<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.view.write' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/WriteListener.php';

return $this->privates['api_platform.listener.view.write'] = new \ApiPlatform\Core\EventListener\WriteListener(($this->privates['api_platform.data_persister'] ?? $this->load('getApiPlatform_DataPersisterService.php')));
