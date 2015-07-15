<?php

class WebUser extends CWebUser {
    public $allowAutoLogin = true;

    public function beforeLogin()
    {
        $this->allowAutoLogin = true;
        var_dump(self::checkHash());die;

    }

    public function beforeLogout(){
        unset(Yii::app()->request->cookies['tipclientid']);
        unset(Yii::app()->request->cookies['tipclienthash']);
        parent::beforeLogout();
    }

    static function checkHash(){

        if (isset(Yii::app()->request->cookies['tipclientid']) && isset(Yii::app()->request->cookies['tipclienthash'])){
            $id = Yii::app()->request->cookies['tipclientid'];
            $hash = Yii::app()->request->cookies['tipclienthash'];
            $user = UsersAR::model()->findByPk($id);
            if($user == null)
                return false;

            $userHash = $user->hash;
            if($userHash != $hash){
                unset(Yii::app()->request->cookies['tipclientid']);
                unset(Yii::app()->request->cookies['tipclienthash']);
                return false;
            }else{
                return true;
            }
        }

    }
} 