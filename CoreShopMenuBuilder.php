<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Bundle\MenuBundle;

use CoreShop\Bundle\MenuBundle\Builder\MenuBuilderInterface;
use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

class CoreShopMenuBuilder implements MenuBuilderInterface
{
    public function buildMenu(ItemInterface $menuItem, FactoryInterface $factory, string $type): void
    {
        $menuItem->setLabel('coreshop');
        $menuItem->setAttributes([
            'class' => 'coreshop_logo_menu',
            'content' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 87">
                    <defs>
                        <style>.cls-1{fill:#cd1017;fill-rule:evenodd;}</style>
                    </defs>
                    <path class="cls-1"
                          d="M48.57,50.58,38,56.69,14.31,43V29.82L38,16.15l31.87,18.4V25.1L38,6.7,6.13,25.1V47.73L38,66.13,56.75,55.3V45.86l-8.18-4.72v9.44ZM27.43,36.42,38,30.31,61.69,44V57.18L38,70.85,6.13,52.45V61.9L38,80.3,69.87,61.9V39.27L38,20.87,19.25,31.7v9.44l8.18,4.72V36.42Z"/>
                </svg>
            ',
        ]);
    }
}
