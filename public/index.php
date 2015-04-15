<?php
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

    switch (ENVIRONMENT){
        case 'development':
            error_reporting(E_ALL);
            break;

        case 'production':
            error_reporting(0);
            break;

        default:
            exit('The application environment is not set correctly.');
    }

}

include dirname(__DIR__).  '/Core/Crater.php';
$app = new \Core\Crater();
$app->run();