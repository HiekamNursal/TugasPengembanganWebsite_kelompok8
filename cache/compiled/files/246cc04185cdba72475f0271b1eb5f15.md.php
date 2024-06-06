<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/pages/04.about-himaki/blog.md',
    'modified' => 1717641897,
    'size' => 373,
    'data' => [
        'header' => [
            'title' => 'About HIMAKI',
            'blog_url' => 'about-himaki',
            'menu' => 'About HIMAKi',
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
        'frontmatter' => 'title: \'About HIMAKI\'
blog_url: about-himaki
menu: \'About HIMAKi\'
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
