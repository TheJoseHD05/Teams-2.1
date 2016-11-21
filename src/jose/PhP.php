<?php

namespace jose;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as TE;
use pocketmine\utils\Config;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;


class Php extends PluginBase implements Listener {
	 public $prefix = TE::GRAY . "[" . TE::GREEN . "TEAM" . TE::GRAY . "]" . TE::RESET;
	
	public function onEnable()
	{
		$this->getLogger()->info(TE::AQUA . "TEAMS BY JOSE");
		@mkdir($this->getDataFolder());
		if(!file_exists($this->getDataFolder() . "teams.yml")){
			$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, [
				"[RED]",
				"[BLUE]",
				"[GREEN]",
				"[YELLOW]",
				"[PINK]",
				"[PURPLE]",
				"[AQUA]",
				"[GRAY]",
				"NO MODIFIQUE ESTA CONFIG SOLO ES INFO DE LOS TEAMS QUE HAY"
				
			]);
		}
	
	}
	
	
	
	 public function onCommand(CommandSender $player, Command $cmd, $label, array $args) {
        switch($cmd->getName()){
	               case "team":
                            if(!empty($args[0]))
                            {
                               
                                    if($args[0]=="red")
                                    {
                                    $player->setNameTag("§c[RED]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::RED."Te uniste al equipo ROJO");
                                    }
                                    elseif($args[0]=="blue")
                                    {
                                    $player->setNameTag("§9[AZUL]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::BLUE."Te uniste al equipo AZUL");
                                    }
                                    elseif($args[0]=="green")
                                    {
                                    $player->setNameTag("§a[VERDE]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::GREEN."Te uniste al equipo VERDE");
                                    }
                                    elseif($args[0]=="yellow")
                                    {
                                    $player->setNameTag("§e[AMARILLO]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::YELLOW."Te uniste al equipo AMARILLO");
                                    }
                                    elseif($args[0]=="aqua")
                                    {
                                    $player->setNameTag("§b[AQUA]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::AQUA."Te uniste al equipo AQUA");
                                    }
                                    elseif($args[0]=="pink")
                                    {
                                    $player->setNameTag("§d[PINK]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::LIGHT_PURPLE."Te uniste al equipo ROSA");
                                    }
                                    elseif($args[0]=="gray")
                                    {
                                    $player->setNameTag("§7[GRAY]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::GRAY."Te uniste al equipo GRAY");
                                    }
                                    elseif($args[0]=="purple")
                                    {
                                    $player->setNameTag("§5[PURPLE]"."§l§e".$player->getName());
                                    $player->sendMessage(TE::DARK_PURPLE."Te uniste al equipo MORADO");
                                    }
                                   
                                 
									 elseif($args[0]=="clear")
                                    {
                                    $player->setNameTag("§a[?]"."§l§a".$player->getName());
                                    $player->sendMessage(TE::GREEN."Ya no eres de ningun equipo");
                                    }

								
						
							}
						return true;	
							case "teamhelp";
								$player->sendMessage(TE::BOLD . TE::YELLOW . "==========" . TE::RED . "[" . TE::GREEN . "TEAMS" . TE::AQUA . "-" . TE::GREEN . "COMMANDS" . TE::RED . "]" . TE::YELLOW . "==========");
								$player->sendMessage(TE::RED . "[RED]" . TE::AQUA . " ->" . TE::RED . "  red");
								$player->sendMessage(TE::BLUE . "[BLUE]" . TE::AQUA . " ->" . TE::BLUE . "  blue");
								$player->sendMessage(TE::GREEN . "[GREEN]" . TE::AQUA . " ->" . TE::GREEN . "  green");
								$player->sendMessage(TE::YELLOW . "[AMARILLO]" . TE::AQUA . " ->" . TE::YELLOW . "  yellow");
								$player->sendMessage(TE::AQUA . "[AQUA]" . TE::AQUA . "->" . TE::AQUA . "  aqua");
								$player->sendMessage(TE::DARK_PURPLE . "[PINK]" . TE::AQUA . " ->" . TE::DARK_PURPLE . "  pink");
								$player->sendMessage(TE::GRAY . "[GRAY]" . TE::AQUA . "->" . TE::GRAY . "gray");
								$player->sendMessage(TE::DARK_PURPLE . "[PURPLE]" . TE::AQUA . " ->" . TE::DARK_PURPLE . "  purple");
							
								$player->sendMessage(TE::GREEN . "/team clear");
								$player->sendMessage(TE::GREEN . "/team <team>");
								return true;
							
							
							
							
		}
	
	 }
	
	
}