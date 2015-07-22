<div class="promo-container">
    <div class="promo-container-content">
        Библиотека курсов<br>
        <span style="font-size: 25px">Пройди все наши курсы, стань специалистом в налогах и защите бизнеса!</span>
    </div>

    <video class="promo-video" src="<?=Yii::app()->request->baseUrl?>/video/video.mp4" autoplay="" preload="" loop="">
        <!--<source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">-->
        <source src="<?=Yii::app()->request->baseUrl?>/video/video.mp4" type="video/mp4">
    </video>

</div>

<?php
$this->widget('WCoursesBox', array('allCourses' => true));
?>