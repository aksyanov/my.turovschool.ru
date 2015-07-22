<?php

class ProfilesAR extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_profiles';
    }

    public function rules() {
        return array(
            array('user_id,name', 'required'),
            array('name', 'length', 'max' => 200),
            array('id,user_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations() {
        return array(
            'user' => array(self::HAS_ONE, 'UsersAR', array('id' => 'user_id')),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Имя',
        );
    }

}