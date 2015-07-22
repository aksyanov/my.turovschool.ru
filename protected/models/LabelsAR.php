<?php

class LabelsAR extends CActiveRecord {
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_labels';
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 100),
            array('id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations() {
        return array(
            'courses' => array(self::HAS_MANY, 'CoursesAR', 'label_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Наименование',
        );
    }

}