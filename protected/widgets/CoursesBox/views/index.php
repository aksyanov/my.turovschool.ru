
<div class="courses-container">

    <?php
    $count = 0;
    foreach($courses as $course){
        if($count>2){
            echo '<div class="clear margintop15"></div>';
            $count = 0;
        }
        $count++;
    ?>

    <div class="course-container">
        <a href="#">
            <div class="course-top">
                <div class="course-top-label"></div>
                <div class="course-top-control"></div>
                <div class="course-top-logo">
                    <img src="<?=Yii::app()->request->baseUrl.$course['courselogo']?>" width="305px" height="170px">
                </div>
                <div class="course-top-info">
                    <div class="course-top-info-name">
                        <?=$course['author']?>
                    </div>
                </div>
            </div>
            <div class="course-middle">
                <div class="course-name"><?=$course['coursename']?></div>
                <div class="course-info">
                    <div class="course-progress"></div>
                </div>
            </div>
        </a>
    </div>

    <?php
    }
    ?>

</div>