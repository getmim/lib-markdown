<?php

return [
    '__name' => 'lib-markdown',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-markdown.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-markdown' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Michelf' => [
                'type' => 'file',
                'base' => 'modules/lib-markdown/third-party/Michelf'
            ]
        ],
        'files' => []
    ]
];