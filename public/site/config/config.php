<?php
return [

    // Debugging
    'debug' => true,
	'cache' => false,

    // Cache Buster
    'schnti.cachebuster.active' => false,

    'markdown' => [
        'extra' => true
    ],

    'routes' => [
        [
            'pattern' => '(:any)',
            'action'  => function($uid) {
                $page = page($uid);
                if(!$page) $page = page('writing/' . $uid);
                if(!$page) $page = site()->errorPage();
                return site()->visit($page);
            }
        ],
        [
            'pattern' => 'writing/(:any)',
            'action'  => function($uid) {
                go($uid);
            }
        ]
    ]


];
