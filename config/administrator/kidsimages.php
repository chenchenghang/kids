<?php

use App\Models\KidsImages;

return [
    'title'   => '轮播图',
    'single'  => '轮播图',
    'model'   => KidsImages::class,

    'columns' => [
        'title' => [
            'title'    => '图片描述',
            'sortable' => false,
        ],
        'picUrl' => [
            'title'    => '图片路径',
            'sortable' => false,
        ],
        'picUrl' => [
            // 数据表格里列的名称，默认会使用『列标识』
            'title'  => '图片预览',

            // 默认情况下会直接输出数据，你也可以使用 output 选项来定制输出内容
            'output' => function ($picUrl, $model) {
                return empty($picUrl) ? 'N/A' : '<img src="'.addPrefix($picUrl).'" width="80">';
            },

            // 是否允许排序
            'sortable' => false,
        ],
        'package' => [
            'title'    => '小程序套餐',
            'sortable' => false,
        ],
        'advertUrl' => [
            'title'    => '跳转URl',
            'sortable' => false,
        ],
        'category' => [
            'title'    => '小程序分类',
        ],
        'operation' => [
            'title'  => '管理',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title'    => '图标描述',
              'title'    => '图标描述',
        ],
        'picUrl' => [
        	 'title'    => '图片路径',
            'picUrl'    => '图片路径',
        ],
        'picUrl' => [
            'title' => '图片路径',

            // 设置表单条目的类型，默认的 type 是 input
            'type' => 'image',

            // 图片上传必须设置图片存放路径
            'location' => public_path() . '/uploads/swiper/',
        ],
        'package' => [
        	 'title'    => '小程序套餐',
            'package'    => '小程序套餐',
        ],
        'category' => [
        	 'title'    => '小程序轮播图分类',
            'category'    => '小程序轮播图分类',

        ],
        'advertUrl' => [
        	'title'    => '跳转URl',
            'advertUrl'    => '小程序分类',
        ],


    ],
    'filters' => [
        'category' => [
            'title' => '小程序轮播图分类 5:主页轮播图   四种套餐分别0123 ',
        ],
    ],
    'rules'   => [
        'title' => 'required'
    ],
    'messages' => [
        'title.required' => '请填写标题',
    ],

];