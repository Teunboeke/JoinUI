<?php

namespace Teunboeke\JoinUI;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\form\Form;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as Color;

class Main extends PluginBase implements Listener {

   public $data = [];

   public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
   public function onJoin(PlayerJoinEvent $event){
   
     if ($this->getConfig()->get("enabled-joinui") == "true") {  
     $player = $event->getPlayer();
     $name = $player->getName();
     $this->openUI($player); 
      
     $this->openMyForm($player);
   }
    
      if ($this->getConfig()->get("enabled-joinui") == "false") {  
                  
         $player = $event->getPlayer();
         
          $player->sendMessage($this->getConfig()->get("no-joinui-message"));
         }
      }
   }
          
   public function openUI(Player $player)
   } 
     $form = $plugin->createSimpleForm(function (Player $player, $data) {
              
     $result = $data;
        
     if ($result === null) {    
         $player->sendMessage($this->getConfig()->get("joinui-close"));
          return true; 
     }
       
     switch ($result) {  
            case 0: 
         $player->sendMessage($this->getConfig()->get("joinui-close"));   
         break;
     }
        
   });
                
     $form->setTitle($this->getConfig()->get("joinui-title"));
     $form->setContent(str_replace(["{player}", "&"], [$player->getName(), "§"], $this->getConfig()->get("joinui-message")));
     $form->addButton($this->getConfig()->get("joinui-button"));   
        
     $player->sendForm($form);
        
     return $form;    
   }
 }   
    
