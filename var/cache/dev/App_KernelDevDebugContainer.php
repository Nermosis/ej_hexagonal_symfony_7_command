<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSSJr7kU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSSJr7kU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSSJr7kU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSSJr7kU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSSJr7kU\App_KernelDevDebugContainer([
    'container.build_hash' => 'SSJr7kU',
    'container.build_id' => '4364e435',
    'container.build_time' => 1704221299,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSSJr7kU');