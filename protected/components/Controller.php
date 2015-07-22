<?php

class Controller extends CController {

    public function filterAccessControl($filterChain) {
        parent::filterAccessControl($filterChain);
    }

    protected function beforeAction() {
        if (!Yii::app()->user->isGuest && !WebUser::checkHash() && Yii::app()->controller->id != 'login')
            $this->redirect(Yii::app()->createUrl('login/logout'));

        return true;
    }

}