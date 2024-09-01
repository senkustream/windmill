<?php

if (!function_exists('windmill_load_menus')) {
    function windmill_load_menus() {
        return [
            [
                'name' => 'Forms',
                'icon' => 'forms',
                'path' => 'forms',
            ],
            [
                'name' => 'Cards',
                'icon' => 'cards',
                'path' => 'cards',
            ],
            [
                'name' => 'Charts',
                'icon' => 'charts',
                'path' => 'charts',
            ],
            [
                'name' => 'Buttons',
                'icon' => 'buttons',
                'path' => 'buttons',
            ],
            [
                'name' => 'Modals',
                'icon' => 'modals',
                'path' => 'modals',
            ],
            [
                'name' => 'Tables',
                'icon' => 'tables',
                'path' => 'tables',
            ]
        ];
    }
}

if (!function_exists('windmill_get_transactions')) {
    function windmill_get_transactions() {
        return [
            [
                'client' => [
                    'name' => 'Hans Burger',
                    'occupation' => '10x Developer',
                    'picture' => 'https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ',
                ],
                'amount' => 863.45,
                'status' => 'Approved',
            ],
            [
                'client' => [
                    'name' => 'Jolina Angelie',
                    'occupation' => 'Unemployed',
                    'picture' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6',
                ],
                'amount' => 369.95,
                'status' => 'Pending',
            ],
            [
                'client' => [
                    'name' => 'Sarah Curry',
                    'occupation' => 'Designer',
                    'picture' => 'https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ',
                ],
                'amount' => 86.00,
                'status' => 'Denied',
            ],
            [
                'client' => [
                    'name' => 'Rulia Joberts',
                    'occupation' => 'Actress',
                    'picture' => 'https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ'
                ],
                'amount' => 1276.45,
                'status' => 'Approved',
            ],
            [
                'client' => [
                    'name' => 'Wenzel Dashington',
                    'occupation' => 'Actor',
                    'picture' => 'https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ'
                ],
                'amount' => 863.45,
                'status' => 'Expired',
            ],
            [
                'client' => [
                    'name' => 'Dave Li',
                    'occupation' => 'Influencer',
                    'picture' => 'https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5'
                ],
                'amount' => 863.45,
                'status' => 'Approved',
            ],
            [
                'client' => [
                    'name' => 'Maria Ramovic',
                    'occupation' => 'Runner',
                    'picture' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ',
                ],
                'amount' => 863.45,
                'status' => 'Approved',
            ],
            [
                'client' => [
                    'name' => 'Hitney Wouston',
                    'occupation' => 'Singer',
                    'picture' => 'https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ',
                ],
                'amount' => 863.45,
                'status' => 'Approved',
            ],
            [
                'client' => [
                    'name' => 'Hans Burger',
                    'occupation' => '10x Developer',
                    'picture' => 'https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ',
                ],
                'amount' => 863.45,
                'status' => 'Approved',
            ],
        ];
    }
}
