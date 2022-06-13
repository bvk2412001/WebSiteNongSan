<?php
    return [
        [
            'label' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'fa-home'
        ],
            [
                'label' => 'Banner Manager',
                'route' => 'banner.index',
                'icon' => 'fa-image',
                'items' => [
                    [
                        'label' => 'All banner',
                        'route' => 'banner.index'
                    ],
                    [
                        'label' => 'Add banner',
                        'route' => 'banner.create'
                    ]
                ] 
                    ], 
            [
                'label' => 'Order Manager',
                'route' => 'order.index',
                'icon' => 'fa-shopping-cart',
                'items' => [
                    [
                        'label' => 'All order',
                        'route' => 'order.index'
                    ],
                    [
                        'label' => 'Statistic Order',
                        'route' => 'order.create'
                    ],
                ] 
                    ], 
            [
                'label' => 'Detail Manager',
                'route' => 'order_detail.index',
                'icon' => 'fa-shopping-cart',
                'items' => [
                    [
                        'label' => 'All account',
                        'route' => 'order_detail.index'
                    ],
                    [
                        'label' => 'Add account',
                        'route' => 'order_detail.create'
                    ]
                ] 
            ], 
            [
                'label' => 'Blog Manager',
                'route' => 'blog.index',
                'icon' => 'fa-folder-open',
                'items' => [
                    [
                        'label' => 'All blog',
                        'route' => 'blog.index'
                    ],
                    [
                        'label' => 'Add category',
                        'route' => 'blog.create'
                    ]
                ] 
                    ], 
            [
                'label' => 'Logout',
                'route' => 'logout',
                'icon' => 'fa-user',
            ],
            
    ]

?>