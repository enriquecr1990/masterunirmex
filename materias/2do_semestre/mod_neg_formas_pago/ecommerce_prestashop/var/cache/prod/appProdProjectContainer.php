<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPkv6tgx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPkv6tgx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPkv6tgx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPkv6tgx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPkv6tgx\appProdProjectContainer([
    'container.build_hash' => 'Pkv6tgx',
    'container.build_id' => '1479ca67',
    'container.build_time' => 1611791301,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPkv6tgx');
