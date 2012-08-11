<?php
namespace Composer\Installers;

/**
 * Plugin installer for symfony2 2.x
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 */
class Symfony2Installer extends BaseInstaller
{
    protected $locations = array(
        'bundle'    => 'src/{$vendor}/{$name}/',
    );
}
