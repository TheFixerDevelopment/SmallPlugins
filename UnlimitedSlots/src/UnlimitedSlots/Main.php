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
        $players = $event->setPlayerCount(intval(count));
        $event->setMaxPlayerCount(intval(count($this->getServer()->getOnlinePlayers())+$players));
    }
}
