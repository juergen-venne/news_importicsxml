<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Import of ICS & XML to EXT:news',
    'description' => 'Versatile news import from ICS + XML (local files or remote URLs) including images and category mapping',
    'category' => 'backend',
    'author' => 'Jürgen Venne',
    'author_email' => 'venne@web.de',
    'state' => 'beta',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => '2.1.1',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '7.6.13-8.7.99',
                'news' => '6.0.0-6.5.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
