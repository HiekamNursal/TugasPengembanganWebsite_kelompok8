<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/pages/01.home/modular.md',
    'modified' => 1717649465,
    'size' => 445,
    'data' => [
        'header' => [
            'title' => 'Home',
            'menu' => 'Home',
            'onpage_menu' => false,
            'body_classes' => 'home page page-template page-template-template-home page-template-template-home-php group-blog',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_showcase',
                        1 => '_highlights',
                        2 => '_callout',
                        3 => '_bottom',
                        4 => '_contact'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Home
menu: Home
onpage_menu: false
body_classes: \'home page page-template page-template-template-home page-template-template-home-php group-blog\'
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _highlights
            - _callout
            - _bottom
            - _contact',
        'markdown' => '## Our Activities Posts
### Check Out What We\'ve Done This Year!
'
    ]
];
