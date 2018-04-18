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
        $count = $event->setPlayerCount();
        $event->setMaxPlayerCount(intval(count($this->getServer()->getOnlinePlayers())+$count));
    }
}
