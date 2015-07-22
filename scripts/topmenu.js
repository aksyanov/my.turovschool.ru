$(document).ready(onReady);

function onReady() {
    $(".top-menu-user-info-button").on("mouseover", showUserInfoMenu);
    $(".top-menu-user-info-button").on("mouseout", hideUserInfoMenuTimeout);
    $(".top-menu-user-info-menu").on("mouseout", hideUserInfoMenuTimeout);
}

function showUserInfoMenu() {
    $(".top-menu-user-info-menu-bg").show();
    $(".top-menu-user-info-menu").show();
    $(".top-menu-user-info-name").css('margin-right','-8px');
}

function hideUserInfoMenuTimeout() {
    setTimeout(hideUserInfoMenu,400);
}

function hideUserInfoMenu() {
    var isHoverDiv = $('.top-menu-user-info-button').is(':hover') || $('.top-menu-user-info-menu').is(':hover');
    if (!isHoverDiv){
        $(".top-menu-user-info-menu-bg").hide();
        $(".top-menu-user-info-menu").hide();
        $(".top-menu-user-info-name").css('margin-right','10px');
    }
}
