<?php

class AuthorsAR extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_authors';
    }

    public function rules() {
        return array(
            array('name,sname,tname,position', 'required'),
            array('name,sname,tname', 'length', 'max' => 200),
            array('position', 'length', 'max' => 500),
            array('description', 'length', 'max' => 3000),
            array('id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations() {
        return array(
            'courses' => array(self::HAS_MANY, 'CoursesAR', 'author_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Имя',
            'sname' => 'Фамилия',
            'tname' => 'Отчество',
            'position' => 'Должность',
            'description' => 'Описание',
        );
    }

}