<?php

namespace skyss0fly\essentials\home;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
class home extends pluginbase implements listener {

public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
 if (!$sender instanceof Player) {
            $this->getLogger()->warning("Please use this command in-game");
            return false;
        }
        switch ($command->getName()) {
            case "home":
                $sender->sendMessage("Usage: /home homename");
                return true;
          
            default:
                throw new \AssertionError("This line will never be executed");
        }
        return false;




} // command final



} // final 
