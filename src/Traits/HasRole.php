<?php
namespace Jrb\HasRole\Traits;

trait HasRole{

    public function role()
    {
        return $this->belongsTo(config('roles.role'));
    }

}