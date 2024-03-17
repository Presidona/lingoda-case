<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_logout_main' => [[], [], [], [['text', '/logout']], [], [], []],
    'ux_live_component' => [['_locale', '_live_component', '_live_action'], ['_live_action' => 'get'], [], [['variable', '/', '[^/]++', '_live_action', true], ['variable', '/', '[^/]++', '_live_component', true], ['text', '/_components'], ['variable', '/', '[^/]++', '_locale', true]], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'homepage' => [['_locale'], ['template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_index' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/admin/post/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_post_index' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/admin/post/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_post_new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/admin/post/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_post_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_post_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/edit'], ['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'admin_post_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/delete'], ['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'blog_index' => [['_locale'], ['page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/blog/'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'blog_rss' => [['_locale'], ['page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/blog/rss.xml'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'blog_index_paginated' => [['_locale', 'page'], ['_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['page' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', '[1-9][0-9]*', 'page', true], ['text', '/blog/page'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'blog_post' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/blog/posts'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'comment_new' => [['_locale', 'postSlug'], ['_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['postSlug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/new'], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'postSlug', true], ['text', '/blog/comment'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'blog_search' => [['_locale'], ['_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/blog/search'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'security_login' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/login'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'user_edit' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/profile/edit'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'user_change_password' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/profile/change-password'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\Admin\BlogController::new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/admin/post/new'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\Admin\BlogController::show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\Admin\BlogController::edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/edit'], ['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\Admin\BlogController::delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['id' => '[1-9][0-9]*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/delete'], ['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/post'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\BlogController::postShow' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/blog/posts'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\BlogController::commentNew' => [['_locale', 'postSlug'], ['_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['postSlug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', '_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/new'], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'postSlug', true], ['text', '/blog/comment'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\BlogController::search' => [['_locale'], ['_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/blog/search'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\SecurityController::login' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/login'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\UserController::edit' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/profile/edit'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
    'App\Controller\UserController::changePassword' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale' => 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn'], [['text', '/profile/change-password'], ['variable', '/', 'ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne|bn', '_locale', true]], [], [], []],
];