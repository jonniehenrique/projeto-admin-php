/* LOGIN.JS - MODULE */

class Login {

    constructor() {
        this.urlbase = 'http://localhost/sysadmin/';
        this.dados;
    }

    carregar() {
        this.disparaLogin();
    }

    disparaLogin() {
        let that = this;

        $('#login-form').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.login();
        });
    }

    login() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + '/admin/api/Login.php',
            data: that.dados,

            beforeSend() {
                $('.login').css({opacity: '0.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Login efetuado com sucesso');
                    window.location.replace(that.urlbase + '/admin/painel');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao logar, dados não conferem');
                }
            },

            complete() {
                $('.login').css({opacity: '1'});

            }
        });
    }

    mostrarMensagem(tipo, mensagem) {
        $('.alert').addClass('alert-' + tipo).html(mensagem);
    }
}