<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4oxFy68\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4oxFy68/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4oxFy68.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4oxFy68\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4oxFy68\App_KernelDevDebugContainer([
    'container.build_hash' => '4oxFy68',
    'container.build_id' => '819c486d',
    'container.build_time' => 1634305203,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4oxFy68');
