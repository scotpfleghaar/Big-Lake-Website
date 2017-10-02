$(document).ready(function () {;
    (function () {
        $('#primary-menu li').addClass('nav-item');
        $('#primary-menu li a').addClass('nav-link');
        $('#primary-menu ul').addClass('navbar-nav mr-auto');



        // Styles the dropdown:
        console.log($('#primary-menu > .menu-item-has-children > .nav-link').length);
        $('#primary-menu > .menu-item-has-children > .nav-link').wrap('<button  class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>');
        $('#primary-menu > .menu-item-has-children').wrap('<div class="dropdown"></div>');

        //$('.menu-item-has-children:first > .nav-link').wrap('<button  class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>');
        // $('.dropdown-menu a').removeClass('nav-link');
        // $('.dropdown-item').removeClass('nav-link');
        // $('.dropdown-item').removeClass('dropdown-item');

        // $('.dropdown-toggle > a').css('padding', '1px');
        $('.dropdown > .menu-item-has-children > .sub-menu').wrap('<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>');
        // $('.sub-menu a').addClass('dropdown-item');
        $('.dropdown-toggle').click(function () {
            $(this).next('.dropdown-menu').toggle();
        });
        $(window).click(function () {
            $('.dropdown-menu').css('display', 'none');
        });
        $('.sub-menu').css('display', 'inline-block');
        $('.nav-link').css('padding', '0px');
        $('.nav-link').css('padding-left', '5px');
        $('.nav-link').css('padding-right', '5px');
        $('.nav-link').css('margin', '0px');


        $('.dropdown-toggle a').append(' ▾');
        $('.dropdown-toggle').css('background-color', 'none');
        $('.dropdown-toggle').css('border', 'none');
        $('.dropdown-toggle').css('background', 'none');

        $('.navbar-collapse .search-submit').css('display', 'none');
        $('.header-label h1').addClass('text-center');
        $('.widget .search-submit').css('display', 'none');




        // $('button').text();

    })();
});