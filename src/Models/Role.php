<?php
/**
 * User: jrb
 * Date: 6/2/19
 * Time: 2:40 AM
 */
namespace Jrb\RoleManager\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Role
 * @package Jrb\RoleManager
 */
class Role extends Model {

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(config('roles.user.model'))->withTimestamps();
    }

}