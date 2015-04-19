<?php
namespace App;

class Bootstrap extends \Core\Bootstrap
{

    public function setConsoles()
    {
        return array(
            array('hello', '\Controllers\Hello@console'),
        );
    }

    public function setRoutes()
    {
        return array(
            array('any', '/', '\Controllers\Hello@index'),
            array('any', '/second', '\Controllers\Hello@secondPage'),
            array('any', '/language', '\Controllers\Hello@setLanguage'),

            array('any', '/form', '\Controllers\Hello@form'),
            array('any', '/database', '\Controllers\Hello@database'),

        );
    }
}