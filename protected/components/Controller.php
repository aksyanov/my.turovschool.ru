<?php
class Controller extends CController
{
    public function filterAccessControl($filterChain)
    {
        parent::filterAccessControl($filterChain);
        var_dump(Yii::app()->user->isGuest);
        if (!Yii::app()->user->isGuest)
        {
            echo 2;

            if(!WebUser::checkHash())
                echo 3;
            //    $this->redirect('/login/logout');
        }
    }
}