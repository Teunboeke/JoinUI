<?php

namespace Teunboeke\JoinUI;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\PlayerJoinEvent;
use pocketmine\form\Form;

class Main extends PluginBase implements Listener {

   public $data = [];

   public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
   public function onJoin(PlayerJoinEvent $event){
   
     $player = $event->getPlayer();
     $name = $player->getName();
     $this->openMyForm($sender);
   }
   
   public function openMyForm(Player $player){
     
     $this->data = [];
     $this->data["type"] = "form";
      
     $this->data["title"] = "Welcome to CloudNetwork";
     $this->data["content"] = "Welcome to CloudNetwork this is a test";
      
     $this->data["buttons"] = [];
     $player->sendForm($this);
   }
 }   
    
