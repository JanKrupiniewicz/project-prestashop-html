<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEfkg6xr\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEfkg6xr/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEfkg6xr.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEfkg6xr\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEfkg6xr\appProdProjectContainer([
    'container.build_hash' => 'Efkg6xr',
    'container.build_id' => '7dfebb02',
    'container.build_time' => 1733858760,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEfkg6xr');
