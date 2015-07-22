<?php

class CoursesController extends Controller {
    public $layout = 'main';

    public function actions() {
        return array(
            'index',
        );
    }

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('deny',
                'actions' => array('index'),
                'users' => array('?'),
            ),
        );
    }

    public function actionIndex() {

        /*$auth=Yii::app()->authManager;

         $auth->createOperation('viewAllUsersLogin','Просматривать всех только с Login');
         $auth->createOperation('viewAllUsersAll','Просматривать всех пользователей');
         $auth->createOperation('viewUser','Просматривать себя');

         $bizRule='return Yii::app()->user->id==$params["id"];';
         $task=$auth->createTask('viewUserSelf','Просмотр своей записи',$bizRule);
         $task->addChild('viewUser');

         $role=$auth->createRole('admin');
         $role->addChild('viewAllUsersAll');

         $role=$auth->createRole('moderator');
         $role->addChild('viewAllUsersLogin');

         $role=$auth->createRole('user');
         $role->addChild('viewUserSelf');

         $auth->assign('admin','adminA');
         $auth->assign('moderator','moderatorB');
         $auth->assign('user','9');*/

        /*if(Yii::app()->user->checkAccess('admin')){
            echo "hello, I'm admin<br>";
        }

        if(Yii::app()->user->checkAccess('user')){
            echo "hello, I'm user<br>";
        }

        if(Yii::app()->user->checkAccess('moderator')){
            echo "hello, I'm moderator<br>";
        }

        if(Yii::app()->user->checkAccess('viewUserSelf',array('id'=>19))){
            echo "hello, I'm assadasd<br>";
        }*/

        $this->render('index');
    }

    public function actionCourse($courseName) {
        $this->render('course',array('courseName'=>$courseName));
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}