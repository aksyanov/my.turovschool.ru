<?php

class LoginController extends Controller {
    public $layout = 'login';

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
            array('allow',
                'actions' => array('index'),
                'users' => array('?'),
            ),
        );
    }

    public function actionIndex() {

        $error = '';

        if (isset($_REQUEST['logintype']) && $_REQUEST['logintype'] == 'business')
            $jsLoginType = 'loginTypeBusiness = true;';
        else
            $jsLoginType = 'loginTypeBusiness = false;';

        if (isset($_POST['logintype'])) {
            $identity = new UserIdentity($_POST['login'], $_POST['password']);
            if ($identity->authenticate()) {
                Yii::app()->user->login($identity, 3600 * 24 * 7);
                $this->redirect(Yii::app()->user->returnUrl);
            } else {
                $error = $identity->errorMessage;
            }
        }

        $this->render('index', array('errorLogin' => $error, 'jsLoginType' => $jsLoginType));

    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }


}
