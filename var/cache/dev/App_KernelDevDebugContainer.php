<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQKM3jKQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQKM3jKQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQKM3jKQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQKM3jKQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQKM3jKQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'QKM3jKQ',
    'container.build_id' => '1611a146',
    'container.build_time' => 1594889229,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQKM3jKQ');
