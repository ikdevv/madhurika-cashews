/* Navigation */

$(".nav-close").click(function () {
    $(".nav-menu").css("left", "-100%");
    $(".nav-toggle").css("opacity", "1");
});

$(".nav-toggle").click(function () {
    $(".nav-menu").css("left", "0");
    $(".nav-toggle").css("opacity", "0");
});

$(".nav-link").click(function () {
    $(".nav-menu").css("left", "-100%");
});

/* Navigation */

$(document).ready(function () {
    $(".drop-down-items").hide();
});

$("#dropdown_btn").click(function () {
    $(".drop-down-items").toggle();
});
