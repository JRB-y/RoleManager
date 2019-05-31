# Role Manger (Laravel 5.*)

Role Manager is a package to manage Role for Laravel 5.* application.

## Contents
- [Installation](#installation)
- [Configuration](#configuration)
    - [Relations](#relations)
- [Usage](#usage)
- [Contribution](#contribution)


## Installation

1) To install Jrb Role Manager:

```shell
composer require jrb-y/role-manager
```

2) if you use Laravel + 5.0 the Service Provider will be automaticly registered.

3) Generate the migration:
   
```shell
php artisan migrate
```

This will create a `roles` table and `role_user` table

## Configuration
4) Run the command below to publish the package config file `config/roles.php`:

```shell
php artisan vendor:publish --tag="roles"
```

## Usage
For now you can only access to the package service via the `Jrb\RoleManager\Traits\HasRole`
use it in the `User` model.

## Contribution
All contributions are welcomed.