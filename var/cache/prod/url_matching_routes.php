<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/dashboard(?'
                    .'|(?:/([^/]++))?(*:34)'
                    .'|/newsletter(?'
                        .'|(*:55)'
                        .'|/subscribe/delete/([^/]++)(*:88)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'dashboard', 'current_page' => 1, '_controller' => 'App\\Controller\\DashboardController::index'], ['current_page'], null, null, false, true, null]],
        55 => [[['_route' => 'dashboard_newsletter', '_controller' => 'App\\Controller\\DashboardNewsletterController::index'], [], null, null, false, false, null]],
        88 => [
            [['_route' => 'dashboard_news_subs_delete', '_controller' => 'App\\Controller\\DashboardNewsletterController::newsletter_subs_delete'], ['email'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
