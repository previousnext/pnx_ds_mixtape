<?php

declare(strict_types=1);

namespace Drupal\pnx_ds_mixtape;

use PreviousNext\Ds\Mixtape\List;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Service provider.
 */
final class PnxDsMixtapeCompilerPass implements CompilerPassInterface {

  public function process(ContainerBuilder $container): void {
    $pintoLists = $container->getParameter('pinto.lists');
    $pintoLists[] = List\MixtapeAtoms::class;
    $pintoLists[] = List\MixtapeComponents::class;
    $pintoLists[] = List\MixtapeGlobal::class;
    $pintoLists[] = List\MixtapeLayouts::class;
    $container->setParameter('pinto.lists', $pintoLists);
  }

}
