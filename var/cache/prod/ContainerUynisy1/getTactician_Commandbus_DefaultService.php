<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tactician.commandbus.default' shared service.

return $this->services['tactician.commandbus.default'] = new \League\Tactician\CommandBus([0 => ${($_ = isset($this->services['tactician.commandbus.default.middleware.command_handler']) ? $this->services['tactician.commandbus.default.middleware.command_handler'] : $this->load('getTactician_Commandbus_Default_Middleware_CommandHandlerService.php')) && false ?: '_'}]);
