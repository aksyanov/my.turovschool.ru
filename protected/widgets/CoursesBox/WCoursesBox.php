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
        if($this->allCourses){

            $this->render('index', array('courses' => array(
                    array('author'=>'Владимир Туров','coursename' => 'Оптимизация налогов и страховых взносов','courselogo'=>'/images/courseslogo/ono.jpg'),
                    array('author'=>'Петр Петров','coursename' => 'Кадры приносящие деньги','courselogo'=>'/images/courseslogo/kadry.png'),
                    array('author'=>'Владимир Туров','coursename' => 'Оптимизация налогов и страховых взносов','courselogo'=>'/images/courseslogo/ono.jpg'),
                    array('author'=>'Петр Петров','coursename' => 'Кадры приносящие деньги','courselogo'=>'/images/courseslogo/kadry.png'),
                    array('author'=>'Владимир Туров','coursename' => 'Оптимизация налогов и страховых взносов','courselogo'=>'/images/courseslogo/ono.jpg'),
                    array('author'=>'Петр Петров','coursename' => 'Кадры приносящие деньги','courselogo'=>'/images/courseslogo/kadry.png'),
                    array('author'=>'Владимир Туров','coursename' => 'Оптимизация налогов и страховых взносов','courselogo'=>'/images/courseslogo/ono.jpg'),
                    array('author'=>'Петр Петров','coursename' => 'Кадры приносящие деньги','courselogo'=>'/images/courseslogo/kadry.png')
                )
            ));

        }
    }

}