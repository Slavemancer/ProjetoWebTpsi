$(document).ready(function() {
    console.log("ready!");
    $("#register-form").hide();
});
$("#open-login").click(function() {
    console.log('login btn clicked');
    $("#register-form").hide();
    $("#login-form").show();

});

$("#open-register").click(function() {
    console.log('regsiter btn clicked');
    $("#login-form").hide();
    $("#register-form").show();


});