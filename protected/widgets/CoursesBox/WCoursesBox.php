<?php

/**
 * Виджет курса или курсов
 */
class WCoursesBox extends CWidget {

    public $allCourses = false;

    public function init() {
        Yii::app()->clientScript->registerCssFile('styles/coursesbox.css');
    }

    public function run() {

        $ono = array(
            'author'=>'Владимир Туров',
            'coursename'    => 'Оптимизация налогов и страховых взносов',
            'courselogo'    =>'/images/courseslogo/ono.jpg',
            'position'      =>'Самый лучший специалист по налогам',

            'rating'        => '5 из 5',
            'complexity'    => 'Сложный',
            'publicdate'    => '20 июня 2015',
            'label'           => '',
        );

        $kadry = array(
            'author'=>'Петр Петров',
            'coursename' => 'Кадры приносящие деньги',
            'courselogo'=>'/images/courseslogo/kadry.png',
            'position'=>'Крутой кадровик',

            'rating'        => '4 из 5',
            'complexity'    => 'Средний',
            'publicdate'    => '10 июня 2015',
            'label'           => '',

        );

        $onoNew = $ono;
        $onoNew['label'] = 'new';

        $kadryNew = $kadry;
        $kadryNew['label'] = 'new';

        $onoSoon = $ono;
        $onoSoon['label'] = 'soon';

        $kadrySoon = $kadry;
        $kadrySoon['label'] = 'soon';

        if($this->allCourses){

            $this->render('index', array('courses' => array(
                    $onoNew,$kadryNew,
                    $ono,$kadry,
                    $ono,$kadry,
                    $onoSoon,$kadrySoon,
                    $onoSoon,$kadrySoon,
                )
            ));

        }
    }

}