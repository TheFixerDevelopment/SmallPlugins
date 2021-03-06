<?php

namespace UnlimitedSlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onQuery(QueryRegenerateEvent $event) {
        $maxcount = $event->getMaxPlayerCount();
        $event->setMaxPlayerCount(intval(count($this->getServer()->getOnlinePlayers())+$maxcount));
    }
}
