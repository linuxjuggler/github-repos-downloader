<?php
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with composer at https://github.com/composer/composer/blob/master/LICENSE.
 *
 * PS: I copied this file as this is the simplest way to do it.
 */

function includeIfExists($file)
{
    return file_exists($file) ? include $file : false;
}

if ((!$loader = includeIfExists(__DIR__.'/../vendor/autoload.php')) && (!$loader = includeIfExists(__DIR__.'/../../../autoload.php'))) {
    echo 'You must set up the project dependencies using `composer install`'.PHP_EOL.
        'See https://getcomposer.org/download/ for instructions on installing Composer'.PHP_EOL;
    exit(1);
}

return $loader;
