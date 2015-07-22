<div class="top-menu">
    <div class="top-menu-container">
        <div class="top-menu-logo">
            <a href="<?=Yii::app()->createUrl('/')?>">Turovschool</a>
        </div>
        <div class="top-menu-elements">
            <div class="top-menu-element">
                <a href="<?=Yii::app()->createUrl('courses');?>">Курсы</a>
            </div>
            <div class="top-menu-element">
                <a href="">Мой профиль</a>
            </div>
        </div>
        <div class="top-menu-user-info">
            <div class="top-menu-user-info-avatar">
                <img src="<?=Yii::app()->request->baseUrl?>/images/common_logo.jpg" width="32px">
            </div>
            <div class="top-menu-user-info-name">
                <?=$user->profile->name?> (<?=Yii::app()->user->getRoleName()?>)
            </div>
            <div class="top-menu-user-info-button"></div>
            <div class="top-menu-user-info-menu-bg"></div>

        </div>
        <div class="clear"></div>
        <div class="top-menu-user-info-menu">
            <ul>
                <li><a href="#">Настройки</a></li>
                <li><a href="#">Платежи</a></li>
            </ul>
            <div class="user-info-menu-hr"></div>
            <ul>
                <li><a href="#">Партнерская программа</a></li>
                <li><a href="#">Другие услуги</a></li>
            </ul>
            <div class="user-info-menu-hr"></div>
            <ul>
                <li><a href="<?=Yii::app()->createUrl('login/logout')?>">Выход</a></li>
            </ul>
        </div>


    </div>
</div>
<div class="clear"></div>