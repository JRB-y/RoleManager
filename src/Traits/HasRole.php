<?php
namespace Jrb\RoleManager\Traits;

trait HasRole{

    /**
     * $roles
     *
     * @var \Illuminate\Database\Eloquent\Collection|null
     */
    protected $roles;

    /**
     * User belongs to many roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(config('roles.role'))->withTimestamps();
    }

    /**
     * getRoles
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getRoles()
    {
        return $this->roles()->get();
    }

    /**
     * hasRole
     *  check if the user has the given roles, it return true on the first valid
     * todo: maybe refactor this function 'hasAnyOfRoles', and create another one 'hasAllRoles';
     *
     * @param string|array $roles
     * @return boolean $hasRole
     */
    public function hasRole($roles)
    {
        // init hasRole as false
        $hasRole = false;
        // check if the given $roles is array
        if(is_array($roles)){
            // loop through $roles
            foreach($roles as $role) {
                // check if the user has the role as a string
                $hasRole = $this->checkRole($role);
                if($hasRole) break;
            }
            // else precess like it's a string
        } else {
            $hasRole = $this->checkRole($roles);
        }

        return $hasRole;

    }

    /**
     * checkRole
     *
     * @param string $role
     * @return boolean $hasRole
     */
    protected function checkRole(string $role)
    {
        // init hasRole as false
        $hasRole = false;
        // loop through user->roles
        foreach($this->getRoles() as $userRole)
        {
            // if the use has the role as a string
            if($role === $userRole->name){
                $hasRole = true;
                break;
            }
        }
        return $hasRole;
    }

    /**
     * attachRole
     *
     * @param int $role id
     * @return void
     */
    public function attachRole($role)
    {
        $this->roles()->attach($role);
    }

    /**
     * detachRole
     *
     * @param int $role id
     * @return void
     */
    public function detachRole($role)
    {
        $this->roles()->detach($role);
    }

    /**
     * detachAllRoles id
     *
     * @return void
     */
    public function detachAllRoles()
    {
        $this->roles()->detach();
    }
}