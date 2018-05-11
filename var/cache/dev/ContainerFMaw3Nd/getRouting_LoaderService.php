<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/FileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/ApiLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';

$a = ($this->services['kernel'] ?? $this->get('kernel'));
$b = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

$c = new \Symfony\Component\HttpKernel\Config\FileLocator($a, ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src')));

$d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \Symfony\Component\Config\Loader\LoaderResolver();
$e->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c));
$e->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$e->addLoader(new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader($a, ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $this, $this->parameters['api_platform.formats'], $this->getParameter('api_platform.resource_class_directories'), ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), false, true, true));
$e->addLoader($d);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $d));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $d));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($a)), $e);
