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
    'role' => [
        'model'     => '\Jrb\RoleManager\Models\Role',
        'table'     => 'roles',
        'foreign'   => 'role_id'
    ],

    /*
    |--------------------------------------------------------------------------
    |   User
    |   # user model
    |   # users table
    |   # users foreign key
    |--------------------------------------------------------------------------
    */
    'user' => [
        'model'     => 'App\User',
        'table'     => 'users',
        'foreign'   => 'user_id'
    ],

    /*
    |--------------------------------------------------------------------------
    |   RoleUser
    |   The pivot table
    |   $user->belongsToMany(Role::class)
    |   $role->belongsToMany(User::class)
    |--------------------------------------------------------------------------
    */
    'role_user' => [
        'model' => 'App\RoleUser',
        'table' => 'role_user'
    ]
];
