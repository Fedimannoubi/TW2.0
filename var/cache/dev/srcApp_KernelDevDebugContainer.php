<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTDhtVnA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTDhtVnA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTDhtVnA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTDhtVnA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTDhtVnA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'TDhtVnA',
    'container.build_id' => 'cd57ef3f',
    'container.build_time' => 1622489639,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTDhtVnA');
