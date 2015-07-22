<?php

class UsersAR extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_users';
    }

    public function rules() {
        return array(
            array('login,password', 'required'),
            array('login', 'length', 'max' => 200),
            array('password,hash', 'length', 'max' => 1000),
            array('salt', 'length', 'max' => 10),
            array('id,company_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations() {
        return array(
            'profile' => array(self::HAS_ONE, 'ProfilesAR', 'user_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'login' => 'E-mail',
            'password' => 'Пароль',
            'salt' => 'Соль',
            'hash' => 'Хэш',
            'company_id' => 'ID компании',
        );
    }

}