<?php

declare(strict_types=1);

namespace Drupal\pnx_ds_mixtape;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderInterface;

/**
 * Service provider.
 */
final class PnxDsMixtapeServiceProvider implements ServiceProviderInterface {

  public function register(ContainerBuilder $container): void {
    $container->addCompilerPass(new PnxDsMixtapeCompilerPass(), priority: 100);
  }

}
