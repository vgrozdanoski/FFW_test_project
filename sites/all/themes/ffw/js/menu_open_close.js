jQuery(document).ready(function ($) {
    $('.expanded dropdown').hover(function () {
		$(this).next('.dropdown-menu').slideToggle();
        $(this).next('.dropdown-menu').next('.expanded.dropdown > ul > li > a').slideToggle();
        
        $(this).parent().siblings().children().next().slideUp();
        return false;
    });
});