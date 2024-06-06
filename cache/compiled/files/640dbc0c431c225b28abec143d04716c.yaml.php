<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://relatedpages/relatedpages.yaml',
    'modified' => 1717598950,
    'size' => 1882,
    'data' => [
        'enabled' => true,
        'limit' => 5,
        'show_score' => true,
        'score_threshold' => 20,
        'filter' => [
            'items' => [
                '@page' => '/blog'
            ],
            'excluded_types' => [
                0 => 'quote',
                1 => 'video'
            ],
            'order' => [
                'by' => 'date',
                'dir' => 'desc'
            ]
        ],
        'page_in_filter' => true,
        'explicit_pages' => [
            'process' => true,
            'score' => 100
        ],
        'taxonomy_match' => [
            'taxonomy' => 'tag',
            'taxonomy_taxonomy' => [
                'process' => true,
                'score_scale' => [
                    1 => 50,
                    2 => 75,
                    3 => 100
                ]
            ],
            'taxonomy_content' => [
                'process' => true,
                'score_scale' => [
                    1 => 20,
                    2 => 30,
                    3 => 45,
                    4 => 60,
                    5 => 70,
                    6 => 80,
                    7 => 90,
                    8 => 100
                ]
            ]
        ],
        'content_match' => [
            'process' => false
        ]
    ]
];
