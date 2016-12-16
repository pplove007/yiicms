<?php 
 return array (
  'appName' => 'YiiCms企业管理系统',
  'logo' => '@web/images/logo.png',
  'keywords' => '',
  'description' => '',
  'pageSize' => '20',
  'nav' => '{
    "options": {
        "class": "nav navbar-nav"
    },
    "items": [
 {
            "label": "首页",
            "url": [
                "/site/index"
            ]
        },
        {
            "label": "产品",
            "url": [
                "/products/list"
            ],
            "activeUrls": [
                "/products/index"
            ]
        },
        {
            "label": "新闻",
            "url": [
                "/news/list"
            ],
            "activeUrls": [
                "/news/index"
            ]
        },
        {
            "label": "关于我们",
            "url": [
                "/site/about"
            ]
        },
        {
            "label": "联系我们",
            "url": [
                "/site/contact"
            ]
        }
    ]
}',
  'themeColor' => 'red',
);
