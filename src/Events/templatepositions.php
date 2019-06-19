<?php
namespace ExtensionsValley\Ranger\Events;


\Event::listen('website.template.positions', function ($collection) {

    $collection->put('extensionsvalley.ranger', [
            '0' => [
                'title' => "Header Menu"
                ,'position' => 'header-menu'
                , 'layout' => 'Ranger::partials.menuitem'
                , 'allpages' => 1
            ],
            '1' => [
                'title' => "Home Banner"
                ,'position' => 'home-banner'
                , 'layout' =>  'Ranger::partials.homebanner'
                , 'allpages' => 0
            ],
            '2' => [
                'title' => "Our Service"
                ,'position' => 'service-section'
                , 'layout' =>  'Ranger::partials.services'
                , 'allpages' => 0
            ],
            '3' => [
                'title' => "App Screens"
                ,'position' => 'appscreen-section'
                , 'layout' =>  'Ranger::partials.appscreens'
                , 'allpages' => 0
            ],
            '4' => [
                'title' => "Web Apps Mobile"
                ,'position' => 'webappmobile-section'
                , 'layout' =>  'Ranger::partials.webappmobile'
                , 'allpages' => 0
            ],
            '5' => [
                'title' => "Features"
                ,'position' => 'feature-section'
                , 'layout' =>  'Ranger::partials.feature'
                , 'allpages' => 0
            ],
            '6' => [
                'title' => "Testimonials"
                ,'position' => 'testimonials'
                , 'layout' =>  'Ranger::partials.testimonials'
                , 'allpages' => 0
            ],
            '7' => [
                'title' => "Pricing"
                ,'position' => 'pricing-section'
                , 'layout' =>  'Ranger::partials.pricing'
                , 'allpages' => 0
            ],
            '8' => [
                'title' => "Getting Started"
                ,'position' => 'getting-started'
                , 'layout' =>  'Ranger::partials.gettingstarted'
                , 'allpages' => 0
            ],
            '9' => [
                'title' => "Footer"
                ,'position' => 'footer-section'
                , 'layout' =>  'Ranger::partials.footer'
                , 'allpages' => 0
            ],

    ]);


});


/*\Event::listen('website.template.layout', function ($collection) {

    $collection->put('extensionsvalley.ranger', [
                'full-width' => 'Full Width'
                ,'left-side-bar' => 'Left Side Bar'
                ,'right-side-bar' => 'Right Side Bar'
                ,'both-side-bar' => 'Both Side Bar'
    ]);


});*/
