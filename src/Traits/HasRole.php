<?php
namespace Jrb\RoleManager\Traits;

/**
 * Trait HasRole
 * @package Jrb\RoleManager
 * @description This trait is the base core of the package. It's supposed to be used in the User model.
 */
trait HasRole {

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
        return $this->belongsToMany(config('roles.role.model'))->withTimestamps();
    }

    /**
     * Get all the user's roles
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getRoles()
    {
        return $this->roles()->get();
    }

    /**
     * Check if the user has any of the Roles passed in $roles.
     *
     * @param string|array $roles
     * @return boolean $hasRole
     */
    public function hasAnyOfRoles($roles)
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
     * Check if the use has the given role.
     *
     * @param $role string
     * @return bool
     */
    public function hasRole($role)
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
     * Attach a Role.
     * The role can be an id int or a name string
     *
     * TODO: make it possible to pass an array or single role
     *
     * @param int|string $role
     * @return void
     */
    public function attachRole($role)
    {
        if(is_string($role)){
            $roleName = $role;
            $role = getInstanceFromConfig(config('roles.role.model'));
            $role = $role->where('name', $roleName)->first()->id;
        }

        $this->roles()->syncWithoutDetaching($role);
    }

    /**
     * Detach a Role
     *
     * Works only with id.
     *
     * TODO: make it possible with a string
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