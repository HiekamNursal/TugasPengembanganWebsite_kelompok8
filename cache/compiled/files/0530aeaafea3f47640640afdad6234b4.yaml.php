<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/plugins/comments/blueprints.yaml',
    'modified' => 1717598889,
    'size' => 741,
    'data' => [
        'name' => 'Comments',
        'type' => 'plugin',
        'slug' => 'comments',
        'version' => '1.2.8',
        'description' => 'Adds a commenting functionality to your site',
        'icon' => 'comment',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-comments',
        'keywords' => 'guestbook, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-comments/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-comments/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
