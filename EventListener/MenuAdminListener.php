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

namespace CoreShop\Bundle\MenuBundle\EventListener;

use Pimcore\Bundle\AdminBundle\Event\BundleManagerEvents;
use Pimcore\Event\BundleManager\PathsEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\RouterInterface;

class MenuAdminListener implements EventSubscriberInterface
{
    public function __construct(
        private RouterInterface $router,
    ) {
    }

    public static function getSubscribedEvents()
    {
        return [
            BundleManagerEvents::JS_PATHS => 'addJsFiles',
        ];
    }

    public function addJSFiles(PathsEvent $event)
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    '/bundles/coreshopmenu/pimcore/js/menu.js',
                    $this->router->generate('coreshop_menu', ['type' => 'coreshop.coreshop']),
                ],
            ),
        );
    }
}
