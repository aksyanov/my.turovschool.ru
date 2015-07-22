<?php

class CoursesAR extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_courses';
    }

    public function rules() {
        return array(
            array('name,author_id,description,publicdate,courselogo,alias_name', 'required'),
            array('description,courselogo', 'length', 'max' => 3000),
            array('publicdate', 'length', 'max' => 100),
            array('name', 'length', 'max' => 300),
            array('alias_name', 'length', 'max' => 500),
            array('id,author_id,label_id,rating,complexity', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations() {
        return array(
            'author' => array(self::HAS_ONE, 'AuthorsAR', array('id' => 'author_id')),
            'label' => array(self::HAS_ONE, 'LabelsAR', array('id' => 'label_id')),
        );
    }

    public function attributeLabels() {
        return array(
            'id'            => 'ID',
            'alias_name'    => 'Синоним',
            'name'          => 'Наименование',
            'description'   => 'Описание',
            'rating'        => 'Рейтинг',
            'complexity'    => 'Сложность',
            'publicdate'    => 'Дата публикации',
            'courselogo'    => 'Логотип курса',
        );
    }

}