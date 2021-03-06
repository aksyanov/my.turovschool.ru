<?php

class WebUser extends CWebUser {

    static $cookiesIdName = 'tipclientid';
    static $cookiesHashName = 'tipclienthash';
    public $rolesName = array(
        'user'      => 'Пользователь',
        'moderator' => 'Модератор',
        'admin'     => 'Админ',
        'undefined' =>'Неизвестно'
    );

    public function beforeLogin() {
        return true;
    }

    public function beforeLogout() {
        self::unsetUserCookies();
        return parent::beforeLogout();
    }

    static function checkHash() {

        if (isset(Yii::app()->request->cookies[self::$cookiesIdName]) && isset(Yii::app()->request->cookies[self::$cookiesHashName])) {
            $userCookies = self::getUserCookies();
            $id = $userCookies['id']->value;
            $hash = $userCookies['hash']->value;
            $user = UsersAR::model()->findByPk($id);
            if ($user == null)
                return false;

            $userHash = $user->hash;
            if ($userHash != $hash) {
                self::unsetUserCookies();
                return false;
            } else {
                return true;
            }
        }else{
            return false;
        }

    }

    static function getUserCookies() {
        return array(
            'id' => Yii::app()->request->cookies[self::$cookiesIdName],
            'hash' => Yii::app()->request->cookies[self::$cookiesHashName]
        );
    }

    static function setUserCookies($params) {
        foreach ($params as $paramName => $paramValue) {
            $cookie = new CHttpCookie($paramName, $paramValue);
            $cookie->expire = time() + 60 * 60 * 24 * 7;
            Yii::app()->request->cookies[$paramName] = $cookie;
        }
    }

    static function unsetUserCookies() {
        unset(Yii::app()->request->cookies[self::$cookiesIdName]);
        unset(Yii::app()->request->cookies[self::$cookiesHashName]);
    }

    public function getRoleName(){

        if($this->checkAccess('admin'))
            $role = 'admin';
        elseif($this->checkAccess('moderator'))
            $role = 'moderator';
        elseif($this->checkAccess('user'))
            $role = 'user';
        else
            $role = 'undefined';

        return $this->rolesName[$role];
    }
} 