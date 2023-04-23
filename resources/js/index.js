$(document).ready(function(){
    $(".loginform-btn").on("click", function(e) {
        $(".login-page").fadeToggle(500);
        $(".overflow").fadeToggle(500);
    })
    $(".register-btn").on("click", (e) => {
            $("#login").css("left", "-400px");
            $("#register").css("left", "50px");
            $("#btn").css("left", "110px");
        })
    $(".login-btn").click(function(e) {
        $("#login").css("left","50px");
        $("#register").css("left","450px");
        $("#btn").css("left","0px");
    })
    $(".overflow").click(function(e) {
        $(".login-page").fadeToggle(500);
        $(".overflow").fadeToggle(500);
    })
});
