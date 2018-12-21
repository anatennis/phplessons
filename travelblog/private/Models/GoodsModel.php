<?php

namespace Anastasia\Travelblog\Models;
//use Anastasia\Travelblog\Models;

class GoodsModel
{

    public function getGoods($count) {
        $goods = [
            ['id' => 1,
                'title' => "TName",
                'description' => 'Desc'
            ],
            ['id' => 2,
                'title' => "TName",
                'description' => 'Desc'
            ],
            ['id' => 3,
                'title' => "TName",
                'description' => 'Desc'
            ],
            ['id' => 4,
                'title' => "TName",
                'description' => 'Desc'
            ]
        ];

        return $goods;
    }

}