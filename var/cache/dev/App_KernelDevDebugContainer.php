<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ2ImvAr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ2ImvAr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ2ImvAr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ2ImvAr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZ2ImvAr\App_KernelDevDebugContainer([
    'container.build_hash' => 'Z2ImvAr',
    'container.build_id' => '3b2d963d',
    'container.build_time' => 1622193082,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ2ImvAr');
