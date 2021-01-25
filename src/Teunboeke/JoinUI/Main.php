<?php

namespace Teunboeke\JoinUI;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\form\Form;
use pocketmine\Server;

class Main extends PluginBase implements Listener {

   public $data = [];

   public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
   public function onJoin(PlayerJoinEvent $event){
   
     $player = $event->getPlayer();
     $name = $player->getName();
     $this->openUI($player); 
      
     $this->openMyForm($player);
   }
   
   public function openUI(Player $player)
   } 
     $form = $plugin->createSimpleForm(function (Player $player, $data) {
        
     $result = $data;
        
     if ($result === null) {    
         $player->sendMessage($this->getConfig()->get("joinui-close"));
          return true; 
     }
        
     $form->setTitle($this->getConfig()->get("joinui-title"));
     $form->setContent(str_replace(["{player}", "&"], [$player->getName(), "§"], $this->getConfig()->get("joinui-message")));
     $form->addButton($this->getConfig()->get("joinui-button"));   
        
     $player->sendForm($form);
        
     return $form;    
   }
 }   
    
