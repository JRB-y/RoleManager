<?php

if (! function_exists('getInstanceFromConfig')) {
    /**
     * Get an instance from the config file.
     *
     * Read the string from the config file passed in arg and return a new instance
     * of the object.
     *
     * @param string $classPath
     * @return mixed
     */
    function getInstanceFromConfig($classPath){
        $class =  $classPath;
        return new $class;
    }
}
