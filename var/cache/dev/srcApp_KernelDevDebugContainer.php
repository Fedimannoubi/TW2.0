<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container962CNcL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container962CNcL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container962CNcL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container962CNcL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container962CNcL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '962CNcL',
    'container.build_id' => 'b9a02758',
    'container.build_time' => 1622138977,
], __DIR__.\DIRECTORY_SEPARATOR.'Container962CNcL');