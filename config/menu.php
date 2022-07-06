<?php
    return[
        [
            'label'=>'Quản lý sản phẩm',
            'route'=>'product.index',
            'icon'=>'fas fa-shopping-cart',
            'items'=>[
                [
                    'label'=>'Danh sách',
                    'route'=>'product.index'
                ],
                [
                    'label'=>'Thêm mới',
                    'route'=>'product.create'
                ]

            ]
        ],
        [
            'label'=>'Quản lý danh mục',
            'route'=>'category.index',
            'icon'=>'fas fa-shopping-cart',
            'items'=>[
                [
                    'label'=>'Danh sách',
                    'route'=>'category.index'
                ],
                [
                    'label'=>'Thêm mới',
                    'route'=>'category.create'
                ]

            ]
        ],
        [
            'label'=>'Quản lý nhãn hiệu',
            'route'=>'brand.index',
            'icon'=>'fa fa-flag',
            'items'=>[
                [
                    'label'=>'Danh sách',
                    'route'=>'brand.index'
                ],
                [
                    'label'=>'Thêm mới',
                    'route'=>'brand.create'
                ]

            ]
        ],
        [
            'label'=>'Quản lý ảnh bìa',
            'route'=>'banner.index',
            'icon'=>'fas fa-image',
            'items'=>[
                [
                    'label'=>'Danh sách',
                    'route'=>'banner.index'
                ],
                [
                    'label'=>'Thêm mới',
                    'route'=>'banner.create'
                ]

            ]
        ],
        [
            'label'=>'Quản lý đơn hàng',
            'route'=>'order',
            'icon'=>'fas fa-shopping-cart',

        ],
        [
            'label'=>'Quản lý khách hàng',
            'route'=>'user.index',
            'icon'=>'fas fa-user',
        ]
    ]
?>