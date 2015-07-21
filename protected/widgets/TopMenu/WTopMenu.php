<?php

/**
 * Виджет верхнего меню
 */
class WTopMenu extends CWidget {

    public function init() {
        Yii::app()->clientScript->registerCssFile('styles/topmenu.css');
    }

    public function run() {
        $user = UsersAR::model()->find('id=:id', array(':id' => Yii::app()->user->getID()));
        $this->render('index',array('user'=>$user));
    }

}