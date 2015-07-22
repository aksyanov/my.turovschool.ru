<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?=Yii::app()->params['title']?></title>
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl?>/styles/common.css">
    <script src="<?=Yii::app()->request->baseUrl?>/scripts/jquery.js"></script>
    <script src="<?=Yii::app()->request->baseUrl?>/scripts/common.js"></script>
    <script src="<?=Yii::app()->request->baseUrl?>/scripts/topmenu.js"></script>
</head>
<body>

<div class="main-container">
    <?php
        $this->widget('WTopMenu');
    ?>
    <?=$content?>
</div>
<div class="clear"></div>
<div class="bottom-container">
    <div class="bottom-menu-container">
        <div class="bottom-menu">
            <ul>
                <li><h3>Бизнес школа</h3></li>
                <li class="bottom-menu-el"><a href="<?=Yii::app()->createUrl('courses')?>">Курсы</a></li>
                <li class="bottom-menu-el"><a href="#">Возможности</a></li>
            </ul>
        </div>
        <div class="bottom-menu">
            <ul>
                <li><h3>Юридические услуги</h3></li>
                <li class="bottom-menu-el"><a href="#">Экспертиза бизнеса</a></li>
                <li class="bottom-menu-el"><a href="#">Консультации</a></li>
                <li class="bottom-menu-el"><a href="#">Ведение налогового учета</a></li>
            </ul>
        </div>
        <div class="bottom-menu">
            <ul>
                <li><h3>Бизнес школа</h3></li>
                <li class="bottom-menu-el"><a href="<?=Yii::app()->createUrl('courses')?>">Курсы</a></li>
                <li class="bottom-menu-el"><a href="#">Возможности</a></li>
            </ul>
        </div>
        <div class="bottom-menu bottom-menu-last">
            <ul>
                <li><h3>Блог</h3></li>
                <li class="bottom-menu-el"><a href="#">Перейти</a></li>
                <li class="bottom-menu-el"><a href="#">Статьи</a></li>
                <li class="bottom-menu-el"><a href="#">Подписаться</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>

</body>
</html>
