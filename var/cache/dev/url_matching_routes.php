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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/dashboard/reset-cache' => [[['_route' => 'dashboard_reset_cache', '_controller' => 'App\\Controller\\DashboardController::reset_cache'], null, null, null, false, false, null]],
        '/dashboard/newsletter/subscribe/download' => [[['_route' => 'dashboard_news_subs_download', '_controller' => 'App\\Controller\\DashboardNewsletterController::newsletter_subs_download'], null, null, null, false, false, null]],
        '/ico' => [[['_route' => 'ico', '_controller' => 'App\\Controller\\ICOController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/ico' => [[['_route' => 'ico', '_controller' => 'App\\Controller\\ICOController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/newsletter/subscribe' => [[['_route' => 'newsletter_subscribe', '_controller' => 'App\\Controller\\NewsletterController::subscribe'], null, null, null, true, false, null]],
        '/organization' => [[['_route' => 'organization', '_controller' => 'App\\Controller\\OrganizationController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/organisation' => [[['_route' => 'organization', '_controller' => 'App\\Controller\\OrganizationController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/privacy-policy' => [[['_route' => 'privacy_policy', '_controller' => 'App\\Controller\\PrivacyPolicyController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/politique-de-confidentialite' => [[['_route' => 'privacy_policy', '_controller' => 'App\\Controller\\PrivacyPolicyController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/produit' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\TeamController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/l-equipe' => [[['_route' => 'team', '_controller' => 'App\\Controller\\TeamController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
        '/terms-service' => [[['_route' => 'terms_service', '_controller' => 'App\\Controller\\TermsServiceController::index', '_locale' => 'en'], null, null, null, false, false, null]],
        '/fr/condition-d-utilisation' => [[['_route' => 'terms_service', '_controller' => 'App\\Controller\\TermsServiceController::index', '_locale' => 'fr'], null, null, null, false, false, null]],
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
                .'|/dashboard(?'
                    .'|(?:/([^/]++))?(*:196)'
                    .'|/newsletter(?'
                        .'|(*:218)'
                        .'|/subscribe/delete/([^/]++)(*:252)'
                    .')'
                .')'
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
        196 => [[['_route' => 'dashboard', 'current_page' => 1, '_controller' => 'App\\Controller\\DashboardController::index'], ['current_page'], null, null, false, true, null]],
        218 => [[['_route' => 'dashboard_newsletter', '_controller' => 'App\\Controller\\DashboardNewsletterController::index'], [], null, null, false, false, null]],
        252 => [
            [['_route' => 'dashboard_news_subs_delete', '_controller' => 'App\\Controller\\DashboardNewsletterController::newsletter_subs_delete'], ['email'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
