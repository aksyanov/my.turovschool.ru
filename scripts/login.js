$(document).ready(onReady);

function onReady(){
    $("#login-container-top-left").on("click",changeLoginType);
    $("#login-container-top-right").on("click",changeLoginType);
    $("#login-usual").on("click",authUsual);
    $("#login-business").on("click",authBusiness);

    //$("#login-wrap").fadeIn(500);
    setTimeout(showLoginContainer,100);

}

function authUsual(){
    setTimeout(hideLoginContainer("login-form-usual"),400);
}

function authBusiness(){
    setTimeout(hideLoginContainer("login-form-business"),400);
}

function hideLoginContainer(formID){
    var loginContainer = $("#login-container");
    loginContainer.animate({
            marginTop: "50px",
            opacity: "hide"
        },500,function(){
            setTimeout(function(){
                $("#"+formID).submit()
            },400);
        }
    );
}

function showLoginContainer(){

    if(loginTypeBusiness)
        $("#login-container-top-right").click();

    var loginContainer      = $("#login-container");
    var loginContainerBg    = $("#login-container-bg");

    loginContainerBg.css('height',loginContainer.css('height'));
    loginContainer.animate(
        {
            marginTop: "0",
            opacity: "show"
        }, 700);

    /*loginContainerBg.animate(
        {
            marginTop: "0",
            opacity: "show"
        }, 700);
    loginContainerBg.css('display','block');*/

    loginContainer.css('display','inline-block');
}

function changeLoginType(event){
    var id = event.target.id;
    var lct = "login-container-top-";
    $("#"+lct+"left").removeClass(lct+"notselect");
    $("#"+lct+"right").removeClass(lct+"notselect");

    if(id == lct+"right"){
        $("#"+lct+"left").addClass(lct+"notselect");
        $("#login-container-body-business").show();
        $("#login-container-body-usual").hide();
    }else{
        $("#"+lct+"right").addClass(lct+"notselect");
        $("#login-container-body-usual").show();
        $("#login-container-body-business").hide();
    }

    /*var loginContainer      = $("#login-container");
    var loginContainerBg    = $("#login-container-bg");
    loginContainerBg.css('height',loginContainer.css('height'));*/
}
