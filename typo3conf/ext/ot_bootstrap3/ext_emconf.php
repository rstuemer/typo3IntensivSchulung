<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Basis Template',
    'description' => '',
    'category' => 'template',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Robert Stümer',
    'author_email' => '',
    'author_company' => '',
    'version' => '7.6.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0.-7.6.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['OliverThiele\\OtBootstrap3\\'=> 'Classes']
    ]
];
