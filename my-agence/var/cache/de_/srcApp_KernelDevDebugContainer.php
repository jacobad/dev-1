<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHHmri90\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHHmri90/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHHmri90.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHHmri90\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHHmri90\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HHmri90',
    'container.build_id' => 'c9ae98f0',
    'container.build_time' => 1559084762,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHHmri90');
