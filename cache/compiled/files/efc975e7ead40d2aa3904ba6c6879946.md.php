<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/pages/05.menu-baru/default.md',
    'modified' => 1717658440,
    'size' => 364,
    'data' => [
        'header' => [
            'title' => 'Menu Baru',
            'blog_url' => 'menu-baru',
            'menu' => 'Menu Baru',
            'body_classes' => 'blog group-blog infinite-scroll',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 10,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: \'Menu Baru\'
blog_url: menu-baru
menu: \'Menu Baru\'
body_classes: \'blog group-blog infinite-scroll\'
sitemap:
    changefreq: monthly
    priority: 1.03
content:
    items: \'@self.children\'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true
feed:
    description: \'Sample Blog Description\'
    limit: 10
pagination: true',
        'markdown' => ''
    ]
];
