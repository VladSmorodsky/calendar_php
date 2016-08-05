$(document).ready(function () {
    $('.accordeon').toggle(false);
    $('div#cog').click(function () {
        $('.accordeon').toggle();
    });
    $(".accordeon dd").hide().prev().click(function() {
        $(this).parents(".accordeon").find("dd").not(this).slideUp().prev().removeClass("active");
        $(this).next().not(":visible").slideDown().prev().addClass("active");
    });
    $('div#exit').click(function () {
        $('.accordeon').toggle(false);
    });
});