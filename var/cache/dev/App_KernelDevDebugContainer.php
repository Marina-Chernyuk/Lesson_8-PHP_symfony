<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWUiOTUX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWUiOTUX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWUiOTUX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWUiOTUX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWUiOTUX\App_KernelDevDebugContainer([
    'container.build_hash' => 'WUiOTUX',
    'container.build_id' => 'bc4f84e7',
    'container.build_time' => 1636263153,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWUiOTUX');
