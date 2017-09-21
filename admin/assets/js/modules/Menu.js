/* MENU.JS - MODULE */

class Menu {

    constructor() {
        this.menu;
    }

    carregar() {
        this.mostrarSubmenu();
        this.esconderSubmenu();

        this.painelTabActive();
    }

    mostrarSubmenu() {
        $('.nav-submenu').click(function (e) {
            e.preventDefault();
            e.stopPropagation();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).siblings('.submenu-nav').removeClass('active');
                return false;
            }

            $(this).siblings('.submenu-nav').addClass('active');
        });
    }

    esconderSubmenu() {
        $('body').click(function (e) {
            e.stopPropagation();

            $('.nav-submenu, .submenu-nav').removeClass('active');
        })
    }

    painelTabActive() {
        $('.nav-section').click(function (e) {
            e.preventDefault();

            $('.nav-section, .main-section').removeClass('active');

            $(this).addClass('active');
            $('#section-' + $(this).data('section')).addClass('active');
        });
    }
}