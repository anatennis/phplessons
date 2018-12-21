<?php
namespace Anastasia\Travelblog\Models;
//use Anastasia\Travelblog\Models;

class ArticleModel
{
private $articles = [
['id' => 1,
'title' => "Name1",
'description' => 'Desc1'
],
['id' => 2,
'title' => "Name2",
'description' => 'Desc2'
],
['id' => 3,
'title' => "Name3",
'description' => 'Desc3'
],
['id' => 4,
'title' => "Name4",
'description' => 'Desc4'
]
];
    public function getArticles($count) {


        return $this->articles;
    }

    public function getARtilceById($id) {
        return $this->articles[$id];
    }
}