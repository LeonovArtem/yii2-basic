<?php
namespace app\controllers;
use app\models\Post;
use yii\data\Pagination;

class PostController extends AppController
{
    public function actionIndex()
    {
        //$posts=Post::find()->select('id, title, description')->orderBy('id ASC')->all();
        $query=Post::find()->select('id, title, description')->orderBy('id ASC');
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>1,
            'pageSizeParam'=>false,'forcePageParam'=>false]);
        $posts=$query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',compact('posts','pages'));


    }

    public function actionTest($name='Гость')
    {
        $hi='Привет мир';
        $ar=['one'=>1,'two'=>2];
        return $this->render('test',compact('hi','ar','name'));
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

}