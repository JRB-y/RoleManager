🧠 Role Manger (Laravel 5.*)
========================
A lightweight and simple Laravel package to manage Roles. <br>
Feel free to make some pull requests ✌️

## Contents
- [Installation](#installation)
- [Configuration](#configuration)
    - [Models](#models)
    - [Tables](#tables)
    - [Relations](#relations)
    - [Foreign ](#foreign)
- [Usage](#usage)
- [Contribution](#contribution)


## Installation

1 - To install the pasckage:

```shell
composer require jrb-y/role-manager
```

2 - If you use Laravel +5.0 no need to register the Service Provider, else you need 
to register it manually. <br>
In `config/app.php` add the provider:

```php
Jrb\RoleManager\RoleManagerServiceProvider::class,
```

3 - Publish the config file by running.
```shell
php artisan vendor:publish --tag=roles
```
Laravel will publish a `config/roles.php` configuration file.

3 - Run the migrate
> :warning: if you need to customize your models, tables and foreign keys, jump to [configuration](#configuration) <br>
before you run the migration.

```shell
    php artisan migrate
```

This command will create a `roles` and `role_user` tables.

## Configuration
After you publish your configuration file, you can customize it:

1. **Models**: You can configure your Role, User and UserRole models.
2. **Tables**: You can configure your roles, users and user_role table.
3. **Foreigners**: You can configure your roles and users foreign keys.


## Usage
To use this package you only need to use the `Jrb\RoleManager\Traits\HasRole` trait <br>
in your User Model.

**Documentation in construction**.

## Contribution
All contributions are welcomed.
