<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAy2Anpi\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAy2Anpi/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerAy2Anpi.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerAy2Anpi\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerAy2Anpi\App_KernelProdContainer([
    'container.build_hash' => 'Ay2Anpi',
    'container.build_id' => 'b7bddafc',
    'container.build_time' => 1593775621,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAy2Anpi');