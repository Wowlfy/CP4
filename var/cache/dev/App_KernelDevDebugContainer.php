<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVET7V31\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVET7V31/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVET7V31.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVET7V31\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVET7V31\App_KernelDevDebugContainer([
    'container.build_hash' => 'VET7V31',
    'container.build_id' => '7f37576c',
    'container.build_time' => 1626953763,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVET7V31');