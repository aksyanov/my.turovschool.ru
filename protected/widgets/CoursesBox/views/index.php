
<div class="courses-container">

    <?php
    $count = 0;
    foreach($courses as $course){
        if($count>2){
            echo '<div class="clear margin-top-15"></div>';
            $count = 0;
        }
        $count++;
    ?>

    <div class="course-container">
        <a href="<?=Yii::app()->createUrl('courses/course',array('courseName'=>$course['coursename']))?>">
            <div class="course-top">
                <div class="course-top-labels">
                    <?php if($course['label'] == 'new') {?>
                    <div class="course-label label-new"></div>
                    <?php } ?>
                    <?php if($course['label'] == 'soon') {?>
                    <div class="course-label label-soon"></div>
                    <?php } ?>
                </div>
                <div class="course-top-control"></div>
                <div class="course-top-logo">
                    <img src="<?=Yii::app()->request->baseUrl.$course['courselogo']?>" width="305px" height="170px">
                </div>
            </div>
            <div class="course-info">
                <div class="course-info-author">
                    <?=$course['author']?>
                </div>
                <div class="course-info-author-position">
                    <?=$course['position']?>
                </div>
                <div class="course-info-general">
                    <ul>
                        <li>Рейтинг<span class="float-right"><?=$course['rating']?></span></li>
                        <li>Уровень<span class="float-right"><?=$course['complexity']?></span></li>
                        <li>Опубликован<span class="float-right"><?=$course['publicdate']?></span></li>
                    </ul>
                </div>
            </div>
            <div class="course-middle">
                <div class="course-name"><?=$course['coursename']?></div>
                <div class="course-progress"></div>
            </div>
        </a>
    </div>

    <?php
    }
    ?>

</div>