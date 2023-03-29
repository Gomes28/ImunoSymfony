<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'app_admin_list', '_controller' => 'App\\Controller\\admin\\AdminController::list'], null, null, null, false, false, null]],
        '/admin/banner/new' => [[['_route' => 'app_banner_new', '_controller' => 'App\\Controller\\admin\\BannerController::new'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\admin\\CategoryController::index'], null, null, null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'app_category_add', '_controller' => 'App\\Controller\\admin\\CategoryController::new'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'app_config', '_controller' => 'App\\Controller\\admin\\ConfigController::index'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login_admin', '_controller' => 'App\\Controller\\admin\\LoginAdminController::index'], null, null, null, false, false, null]],
        '/admin/logout' => [
            [['_route' => 'app_admin_logout', '_controller' => 'App\\Controller\\admin\\LoginAdminController::logout'], null, null, null, false, false, null],
            [['_route' => 'admin_logout'], null, null, null, false, false, null],
        ],
        '/admin/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\admin\\ProductController::index'], null, null, null, false, false, null]],
        '/admin/school/list' => [[['_route' => 'app_admin_school_list', '_controller' => 'App\\Controller\\admin\\SchoolVacinController::index'], null, null, null, false, false, null]],
        '/admin/school/new' => [[['_route' => 'app_admin_school_new', '_controller' => 'App\\Controller\\admin\\SchoolVacinController::list'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\admin\\UserController::index'], null, null, null, false, false, null]],
        '/buy/vacin' => [[['_route' => 'app_buy_vacin', '_controller' => 'App\\Controller\\user\\BuyVacinController::index'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_user_login', '_controller' => 'App\\Controller\\user\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\user\\PageController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\user\\UserController::index'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_user_register', '_controller' => 'App\\Controller\\user\\UserController::register'], null, null, null, false, false, null]],
        '/minhas-compras' => [[['_route' => 'app_user_cliente', '_controller' => 'App\\Controller\\user\\UserController::Compras'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\admin\\ProductController::new'], null, null, null, false, false, null]],
        '/cart/view' => [[['_route' => 'cart_view', '_controller' => 'App\\Controller\\user\\CartController::view'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|school/delete/([^/]++)(*:201)'
                    .'|user/([^/]++)(*:222)'
                .')'
                .'|/buy/checkout/([^/]++)(*:253)'
                .'|/status/(?'
                    .'|success/([^/]++)(*:288)'
                    .'|pending/([^/]++)(*:312)'
                    .'|failure/([^/]++)(*:336)'
                .')'
                .'|/product/([^/]++)(*:362)'
                .'|/cart/(?'
                    .'|add/([^/]++)/([^/]++)/([^/]++)(*:409)'
                    .'|remove/([^/]++)(*:432)'
                .')'
                .'|/update/reference/([^/]++)(*:467)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'app_admin_school_delete', '_controller' => 'App\\Controller\\admin\\SchoolVacinController::delete'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'app_admin_user_id', '_controller' => 'App\\Controller\\admin\\UserController::Id'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'app_buy_checkout', '_controller' => 'App\\Controller\\user\\BuyController::index'], ['BuyId'], null, null, false, true, null]],
        288 => [[['_route' => 'status_success', '_controller' => 'App\\Controller\\user\\StatusController::success'], ['reference'], null, null, false, true, null]],
        312 => [[['_route' => 'status_pending', '_controller' => 'App\\Controller\\user\\StatusController::pending'], ['reference'], null, null, false, true, null]],
        336 => [[['_route' => 'status_failure', '_controller' => 'App\\Controller\\user\\StatusController::failure'], ['reference'], null, null, false, true, null]],
        362 => [[['_route' => 'app_product_id', '_controller' => 'App\\Controller\\user\\ProductsController::FindId'], ['id'], null, null, false, true, null]],
        409 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\user\\CartController::add'], ['productId', 'quantity', 'BuyId'], null, null, false, true, null]],
        432 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\user\\CartController::remove'], ['productId'], null, null, false, true, null]],
        467 => [
            [['_route' => 'payment_update_reference', '_controller' => 'App\\Controller\\user\\PaymentController::reference'], ['reference'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
