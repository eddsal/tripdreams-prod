<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOMSZEEc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOMSZEEc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOMSZEEc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOMSZEEc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOMSZEEc\App_KernelDevDebugContainer([
    'container.build_hash' => 'OMSZEEc',
    'container.build_id' => 'b90407f2',
    'container.build_time' => 1634308776,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOMSZEEc');
