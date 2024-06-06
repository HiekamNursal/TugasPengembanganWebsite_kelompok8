---
title: 'Menu Baru'
blog_url: menu-baru
menu: 'Menu Baru'
body_classes: 'blog group-blog infinite-scroll'
sitemap:
    changefreq: monthly
    priority: 1.03
content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

