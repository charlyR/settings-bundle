<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\SettingsBundle;

use Novosga\Module\BaseModule;

class NovosgaSettingsBundle extends BaseModule
{
    public function getIconName()
    {
        return 'wrench';
    }

    public function getDisplayName()
    {
        return 'Configurações';
    }

    public function getHomeRoute()
    {
        return 'novosga_settings_index';
    }
}
