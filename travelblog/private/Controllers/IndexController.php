<?php
namespace Anastasia\Travelblog\Controllers;
use Anastasia\Travelblog\Base\Controller;
use Anastasia\Travelblog\Models\ArticleModel;
use Anastasia\Travelblog\Models\GoodsModel;

class IndexController extends Controller
{
    private $articleModel;
    private $goodsModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->goodsModel = new GoodsModel();
    }

    public function IndexAction() {
        $title = 'Главная';
        $view = 'index_view.php';
        $articles = $this->articleModel->getArticles(2);
        $goods = $this->goodsModel->getGoods(2);
        $data = [
            'title'=>$title,
            'articles'=>$articles,
            'goods'=>$goods
        ];
        parent::generateResponse($view, $data);
    }
}