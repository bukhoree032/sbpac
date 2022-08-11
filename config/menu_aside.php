<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'แผงควบคุม',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'MENU',
        ],
        [
            'title' => 'จัดการ',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'เพิ่มข้อมูลครัวเรือน',
                    'page' => 'pages/manage_Household',
                ],
                // [
                //     'title' => 'เกษตกร',
                //     'bullet' => 'dot',
                //     'submenu' => [
                //         [
                //             'title' => 'เพิ่มข้อมูลเกษตกร',
                //             'page' => 'pages/manage_farme',
                //         ],
                //     ]
                // ],
                // [
                //     'title' => 'ดอกไม้',
                //     'bullet' => 'dot',
                //     'submenu' => [
                //         [
                //             'title' => 'เพิ่มข้อมูลดอกไม้',
                //             'page' => 'pages/manage_flower',
                //         ]
                //     ]
                // ]
            ]
        ],
        // [
        //     'title' => 'ข่าวกิจกรรม',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Files/Selected-file.svg',
        //     'page' => 'pages/news',
        //     'new-tab' => false,
        // ],

        // Layout
        // [
        //     'section' => 'SETTING',
        // ],
        // [
        //     'title' => 'ตั้งค่าพื้นฐาน',
        //     'desc' => '',
        //     'icon' => 'media/svg/icons/Design/Bucket.svg',
        //     'bullet' => 'dot',
        //     'root' => true,
        //     'submenu' => [
        //         [
        //             'title' => 'ตั้งค่าทั่วไป',
        //             'page' => 'pages/system'
        //         ],
        //         [
        //             'title' => 'ตั้งค่าแบนเนอร์',
        //             'page' => 'pages/banner'
        //         ]
        //     ]
        // ],
    ]

];
