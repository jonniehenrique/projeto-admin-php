/* APP.JS - MODULE */

class App {

    constructor() {
        this.urlbase = 'http://localhost/sysadmin/';
        this.dados = [];
        this.id;
    }

    carregar() {
        this.esconderAlerta();
        this.carregarPortfolio();
        this.carregarUsuario();
        this.carregarConfiguracoes();
    }

    carregarPortfolio() {
        this.disparaCadastrarPortfolio();
        this.disparaEditarPortfolio();
        this.disparaDeletarPortfolio();
    }

    carregarUsuario() {
        this.disparaCadastrarUsuario();
        this.disparaEditarUsuario();
        this.disparaDeletarUsuario();
    }

    carregarConfiguracoes() {
        this.disparaEditarConfiguracoes();
    }

    esconderAlerta() {
        $('.alert').click(function (e) {
            e.preventDefault();

            $(this).html('').removeClass('alert-danger').removeClass('alert-success');
        })
    }

    disparaCadastrarPortfolio() {
        let that = this;

        $('#form-portfolio').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.cadastrarPortfolio();
        });
    }

    cadastrarPortfolio() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/PortfolioCadastrar.php',
            data: that.dados,

            beforeSend() {
                $('#form-portfolio').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Projeto adicionado com sucesso');
                    $('#form-portfolio').find('input, textarea').val('');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao adicionar o projeto');
                }
            },

            complete() {
                $('#form-portfolio').css({opacity: '1'});
            }
        });
    }

    disparaEditarPortfolio() {
        let that = this;

        $('#form-portfolio-edit').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.editarPortfolio();
        });
    }

    editarPortfolio() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/PortfolioEditar.php',
            data: that.dados,

            beforeSend() {
                $('#form-portfolio-edit').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Projeto atualizado com sucesso');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao atualizar o projeto');
                }
            },

            complete() {
                $('#form-portfolio-edit').css({opacity: '1'});
            }
        });
    }

    disparaDeletarPortfolio() {
        let that = this;

        $('.table-portfolio .delete').click(function (e) {
            e.preventDefault();

            that.id = $(this).data('id');

            alert('Deseja realmente excluir o projeto ' + $(this).data('titulo') + ' do sistema?');

            that.deletarPortfolio();
        });
    }

    deletarPortfolio() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/PortfolioDeletar.php',
            data: {id: that.id},

            beforeSend() {
                $('.table-portfolio').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Projeto deletado com sucesso');
                    location.reload();
                } else {
                    that.mostrarMensagem('danger', 'Erro ao deletar projeto');
                }
            },

            complete() {
                $('.table-portfolio').css({opacity: '1'});
            }
        });
    }

    /* USUARIO */

    disparaCadastrarUsuario() {
        let that = this;

        $('#form-usuario').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.cadastrarUsuario();
        });
    }

    cadastrarUsuario() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/UsuarioCadastrar.php',
            data: that.dados,

            beforeSend() {
                $('#form-usuario').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Usuário adicionado com sucesso');
                    $('#form-usuario').find('input, textarea, select').val('');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao adicionar o usuário');
                }
            },

            complete() {
                $('#form-usuario').css({opacity: '1'});
            }
        });
    }

    disparaEditarUsuario() {
        let that = this;

        $('#form-usuario-edit').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.editarUsuario();
        });
    }

    editarUsuario() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/UsuarioEditar.php',
            data: that.dados,

            beforeSend() {
                $('#form-usuario-edit').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Usuário atualizado com sucesso');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao atualizar o usuário');
                }
            },

            complete() {
                $('#form-usuario-edit').css({opacity: '1'});
            }
        });
    }

    disparaDeletarUsuario() {
        let that = this;

        $('.table-usuario .delete').click(function (e) {
            e.preventDefault();

            that.id = $(this).data('id');

            alert('Deseja realmente excluir ' + $(this).data('nome') + ' como usuário do sistema?');

            that.deletarUsuario();
        });
    }

    deletarUsuario() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/UsuarioDeletar.php',
            data: {id: that.id},

            beforeSend() {
                $('.table-usuario').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Usuário deletado com sucesso');
                    location.reload();
                } else {
                    that.mostrarMensagem('danger', 'Erro ao deletar usuário');
                }
            },

            complete() {
                $('.table-usuario').css({opacity: '1'});
            }
        });
    }

    disparaEditarConfiguracoes() {
        let that = this;

        $('#form-configuracoes').submit(function (e) {
            e.preventDefault();

            that.dados = $(this).serializeArray();
            that.editarConfiguracoes();
        });
    }

    editarConfiguracoes() {
        let that = this;

        $.ajax({
            type: 'POST',
            url: that.urlbase + 'admin/api/Configuracoes.php',
            data: that.dados,

            beforeSend() {
                $('#form-configuracoes').css({opacity: '.5'});
            },

            success(json) {
                if (json == '1') {
                    that.mostrarMensagem('success', 'Configurações atualizadas com sucesso');
                } else {
                    that.mostrarMensagem('danger', 'Erro ao atualizar configurações');
                }
            },

            complete() {
                $('#form-configuracoes').css({opacity: '1'});
            }
        });
    }

    mostrarMensagem(tipo, mensagem) {
        $('.alert').addClass('alert-' + tipo).html(mensagem);
    }
}