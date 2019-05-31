<?php
/**
 * configuration file
 * todo: replace all the hardcoded configuration keys of the package
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    |   Role
    |   # role model
    |   # roles table
    |   # roles foreign key
    |--------------------------------------------------------------------------
    */
    'role' => 'App\Role',
    'roles_table' => 'roles',
    'role_foreign_key' => 'role_id',

    /*
    |--------------------------------------------------------------------------
    |   User
    |   # user model
    |   # users table
    |   # users foreign key
    |--------------------------------------------------------------------------
    */
    'user' => 'App\User',
    'users_table' => 'users',
    'user_foreign_key' => 'user_id',

    /*
    |--------------------------------------------------------------------------
    |   RoleUser
    |   The pivot table
    |   $user->belongsToMany(Role::class)
    |   $role->belongsToMany(User::class)
    |--------------------------------------------------------------------------
    */
    'role.user' => 'App\RoleUser',
    'roles_users_table' => 'roles_users',
];
