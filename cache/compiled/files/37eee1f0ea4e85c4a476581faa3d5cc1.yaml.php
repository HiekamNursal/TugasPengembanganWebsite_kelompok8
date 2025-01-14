<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/plugins/archives/blueprints.yaml',
    'modified' => 1717598888,
    'size' => 4754,
    'data' => [
        'name' => 'Archives',
        'version' => '2.0.3.1',
        'type' => 'plugin',
        'slug' => 'archives',
        'description' => 'The **Archives** plugin creates links for pages grouped by month/year',
        'icon' => 'university',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-archives',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'archives, plugin, blog, month, year, date, navigation, history',
        'bugs' => 'https://github.com/getgrav/grav-plugin-archives/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'date_display_format' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Date Format',
                    'default' => 'jS M Y',
                    'options' => [
                        'F jS Y' => 'January 1st 2024',
                        'l jS of F' => 'Monday 1st of January',
                        'D, m M Y' => 'Mon, 01 Jan 2024',
                        'd-m-y' => '01-01-24',
                        'jS M Y' => '10th Feb 2024',
                        'F Y' => 'Jan 2024',
                        'Y' => '2024'
                    ]
                ],
                'show_count' => [
                    'type' => 'toggle',
                    'label' => 'Show Count',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'limit' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Count Limit',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'taxonomy_names' => [
                    'type' => 'array',
                    'label' => 'Taxonomy Names',
                    'placeholder_key' => 'e.g. month',
                    'placeholder_value' => 'e.g. archives_month'
                ],
                'taxonomy_values' => [
                    'type' => 'array',
                    'label' => 'Taxonomy Values (date format)',
                    'placeholder_key' => 'e.g. month',
                    'placeholder_value' => 'e.g. \'M_Y\''
                ],
                'defaults_section' => [
                    'type' => 'section',
                    'underline' => true,
                    'title' => 'Default Configuration'
                ],
                'order.by' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Order Type',
                    'options' => [
                        'default' => 'Default - based on folder name',
                        'title' => 'Title - based on title field in header',
                        'basename' => 'Basename - based on the alphabetic folder name',
                        'date' => 'Date - based on date field in header',
                        'modified' => 'Modified - based on the modified timestamp',
                        'folder' => 'Folder - based on prefix-less folder name',
                        'random' => 'Random - order is randomized'
                    ]
                ],
                'order.dir' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Order Direction',
                    'default' => 'desc',
                    'options' => [
                        'asc' => 'Ascending',
                        'desc' => 'Descending'
                    ]
                ],
                'filters' => [
                    'type' => 'textarea',
                    'yaml' => true,
                    'label' => 'Filter',
                    'placeholder' => 'page@: \'/blog\'',
                    'validate' => [
                        'type' => 'yaml'
                    ]
                ],
                'filter_combinator' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Filter Combinator',
                    'default' => 'and',
                    'options' => [
                        'and' => 'And - Boolean &&',
                        'or' => 'Or - Boolean ||'
                    ]
                ],
                'pageconfig_section' => [
                    'type' => 'section',
                    'underline' => true,
                    'title' => 'Page-Specific Configuration'
                ],
                'page_specific_config' => [
                    'type' => 'list',
                    'label' => 'Configurations',
                    'fields' => [
                        '.route' => [
                            'type' => 'text',
                            'label' => 'Route',
                            'placeholder' => '/blog',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.filters' => [
                            'type' => 'textarea',
                            'yaml' => true,
                            'label' => 'Filter',
                            'placeholder' => 'page@: \'/blog\'',
                            'validate' => [
                                'type' => 'yaml'
                            ]
                        ],
                        '.filter_combinator' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Filter Combinator',
                            'default' => '',
                            'options' => [
                                '' => 'Use Default',
                                'and' => 'And - Boolean &&',
                                'or' => 'Or - Boolean ||'
                            ]
                        ],
                        '.order_by' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Order Type',
                            'default' => '',
                            'options' => [
                                '' => 'Use Default',
                                'default' => 'Default - based on folder name',
                                'title' => 'Title - based on title field in header',
                                'basename' => 'Basename - based on the alphabetic folder name',
                                'date' => 'Date - based on date field in header',
                                'modified' => 'Modified - based on the modified timestamp',
                                'folder' => 'Folder - based on prefix-less folder name',
                                'random' => 'Random - order is randomized'
                            ]
                        ],
                        '.order_dir' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Order Direction',
                            'default' => '',
                            'options' => [
                                '' => 'Use Default',
                                'asc' => 'Ascending',
                                'desc' => 'Descending'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
