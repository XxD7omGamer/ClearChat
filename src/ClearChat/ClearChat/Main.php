<?php

namespace ClearChat1b;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\sound\LaunchSound;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerMoveEvent;

class ClearChat1b extends PluginBase implements Listener{
	
		public function onEnable(){
			$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		if(strtolower($command->getName()) == "cc"){
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");
			$sender->sendMessage(" ");	
			$sender->sendMessage("§a§lChat Has Been Cleared    §2§l#XxD7omGamer");
		}
	}
}ĺ
