<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/drupal-8.*');

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::EXCLUDE_RECTORS, []);
};
