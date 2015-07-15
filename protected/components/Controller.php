<?php
class Controller extends CController
{
    public function filterAccessControl($filterChain)
    {
        parent::filterAccessControl($filterChain);
        if (!Yii::app()->user->isGuest)
        {
            if(!WebUser::checkHash())
                $this->redirect(Yii::app()->homeUrl.'login/logout');

        }
    }
}