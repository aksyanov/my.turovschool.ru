<?php

class SiteController extends Controller
{
    public $layout='main';

	public function actions()
	{
		return array(
			'index',
		);
	}

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('deny',
                'actions'=>array('index'),
                'users'=>array('?'),
            ),
            /*array('allow',
                'actions'=>array('index'),
                'users'=>array('*'),
            ),*/
        );
    }

	public function actionIndex()
	{

        //$user = UsersAR::model()->find('login=:login',array(':login'=>'test'));
        //$user = $user[0];
        /*$user->hash = 'asdasd';
        $user->save();*/
        //echo $user->hash;

        /*$cookie = new CHttpCookie('cookie_name', 'asd');
        $cookie->expire = time()+60*60*24*180;
        Yii::app()->request->cookies['cookie_name'] = $cookie;*/
        //unset(Yii::app()->request->cookies['cookie_name']);


        /*$user = new UsersAR();
        $user->login = 'sad';
        $user->password = '24';
        $user->save();*/

       /* $users = UsersAR::model()->findAll();
        foreach($users as $user)
            echo $user->login;*/

		//$this->render('index');
	}

    public function actionTest(){
        $salt = '1876eh2oij';
        $password = 'qwerty';
        echo 'Пароль: '.$password.'<br>';
        echo 'Пароль md5 md5 salt: '.md5(md5($password.$salt)).'<br>';
        echo 'Логин: test<br>';
        echo 'Соль: <br>';
    }

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}