<?php

class UserIdentity extends CUserIdentity {
    private $_id;

    public function authenticate() {
        $user = UsersAR::model()->find('login=:login', array(':login' => $this->username));

        if ($user == null || $user->count() == 0) {
            $this->errorMessage = "Ошибка авторизации. Указанный Вами e-mail не зарегистриован.";
            $this->errorCode = false;
        } elseif ($user->count() > 1) {
            $this->errorMessage = "Ошибка авторизации. Проверьте правильность e-mail или пароля.";
            $this->errorCode = false;
            //Отправить админу письмо о косяке
        } elseif ($user->count() == 1) {
            if ($user->password == Utils::secretString($this->password . $user->salt)) {
                $code = Utils::secretString(Utils::generateCode());
                $user->hash = $code;
                $user->save();

                WebUser::setUserCookies(array(WebUser::$cookiesIdName => $user->id, WebUser::$cookiesHashName => $user->hash));

                $this->_id = $user->id;
                $this->errorCode = true;
            } else {
                $this->errorMessage = "Ошибка авторизации. Проверьте правильность e-mail или пароля.";
                $this->errorCode = false;
            }
        }
        return $this->errorCode;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }
}