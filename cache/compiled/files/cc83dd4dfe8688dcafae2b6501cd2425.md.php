<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Kuliah/Semester 4/PWEB TEO/projek akhir/grav-v1.7.46/grav/user/pages/02.blog/blog.md',
    'modified' => 1717598830,
    'size' => 389,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'blog_url' => 'blog',
            'menu' => 'Blog',
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
        'frontmatter' => 'title: Blog
blog_url: blog
menu: Blog
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
        'markdown' => '## Latest News  
### See what we have done!
'
    ]
];
