<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container50SWPa0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container50SWPa0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container50SWPa0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container50SWPa0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container50SWPa0\App_KernelDevDebugContainer([
    'container.build_hash' => '50SWPa0',
    'container.build_id' => '52c573ec',
    'container.build_time' => 1647860195,
], __DIR__.\DIRECTORY_SEPARATOR.'Container50SWPa0');
