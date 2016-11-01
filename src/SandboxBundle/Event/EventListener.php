<?php
/**
 * Created by PhpStorm.
 * User: robertas
 * Date: 16.10.30
 * Time: 13.16
 */

namespace SandboxBundle\Event;

use SandboxBundle\Service\TeddyBearBody;

class EventListener
{

    const TEDDYBEAR_BODY_COLOR = "yellow";

    public function changeBody($event)
    {
        /** @var TeddyBearBody $teddyBearBody */
        $teddyBearBody = $event->getTeddyBearBody();
        $teddyBearBody->setBodyColor(self::TEDDYBEAR_BODY_COLOR);
    }
}