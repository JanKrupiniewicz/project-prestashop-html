<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY1a4i9s\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY1a4i9s/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerY1a4i9s.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerY1a4i9s\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerY1a4i9s\appProdProjectContainer([
    'container.build_hash' => 'Y1a4i9s',
    'container.build_id' => 'f280ee3b',
    'container.build_time' => 1732385555,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY1a4i9s');
