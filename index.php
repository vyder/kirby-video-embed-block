<?php

/** @disregard P1009 - Kirby most def exists in this context */
Kirby::plugin('vyder/kirby-video-embed-block', [
    'blueprints' => [
        'blocks/video-embed' => __DIR__ . '/blueprints/blocks/video-embed.yml',
        'files/video'        => __DIR__ . '/blueprints/files/video.yml',
    ],
    'snippets' => [
        'blocks/video-embed' => __DIR__ . '/snippets/blocks/video-embed.php',
    ],
]);
