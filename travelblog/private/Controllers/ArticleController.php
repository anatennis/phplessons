<?php
namespace Anastasia\Travelblog\Controllers;
use Anastasia\Travelblog\Base\Controller;
use Anastasia\Travelblog\Models\ArticleModel;

class ArticleController extends Controller
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function showAction($get) {

        $view = 'articles_view.php';
        $article = $this->articleModel->getARtilceById($get-1);
        $title =$this->articleModel->getARtilceById($get-1)['title'];
        $data = [
            'title'=>$title,
            'article'=>$article
        ];
        parent::generateResponse($view, $data);
    }
}