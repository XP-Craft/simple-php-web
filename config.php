<?php

return [
    'site_name' => 'Simple PHP Web',
    'pricings' => [
        [
            'title' => 'Basic',
            'price' => '$10',
            'features' => ['Feature A', 'Feature B'],
        ],
        [
            'title' => 'Pro',
            'price' => '$25',
            'features' => ['Feature A', 'Feature B', 'Feature C'],
        ],
        [
            'title' => 'Enterprise',
            'price' => '$50',
            'features' => ['All Features'],
        ]
    ],
	
	'faqs' => [
	    ['q' => 'What is this site?', 'a' => 'A plain PHP demo site.'],
	    ['q' => 'Does it use Laravel?', 'a' => 'Nope. Just raw PHP.'],
	    ['q' => 'Can I use it for learning?', 'a' => 'Absolutely!'],
	],
];
