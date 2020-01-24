<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= ($this->lang->line('tema_top_title')) ?></title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php echo $this->config->item('app_name') . ' - ' . $this->config->item('app_subname') ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css"/>
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/shortcut.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funcoesGlobal.js"></script>

    <script type="text/javascript">
        shortcut.add("escape", function () {
            location.href = '<?php echo base_url(); ?>';
        });
        shortcut.add("F1", function () {
            location.href = '<?php echo base_url(); ?>/clientes';
        });
        shortcut.add("F2", function () {
            location.href = '<?php echo base_url(); ?>/produtos';
        });
        shortcut.add("F3", function () {
            location.href = '<?php echo base_url(); ?>/servicos';
        });
        shortcut.add("F4", function () {
            location.href = '<?php echo base_url(); ?>/os';
        });
        //shortcut.add("F5", function() {});
        shortcut.add("F6", function () {
            location.href = '<?php echo base_url(); ?>/vendas';
        });
        shortcut.add("F7", function () {
            location.href = '<?php echo base_url(); ?>/garantias';
        });
        shortcut.add("F8", function () {
        });
        shortcut.add("F9", function () {
        });
        shortcut.add("F10", function () {
        });
        shortcut.add("F11", function () {
        });
        shortcut.add("F12", function () {
        });
    </script>

</head>

<body onLoad="initTimer();">
<!--Header-part-->
<div id="header">
    <h1><a href=""> <?= ($this->lang->line('tema_top_title')) ?> </a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class=""><a title="" href="<?php echo site_url(); ?>mine"><i class="fas fa-eye"></i> <span class="text"><?= ($this->lang->line('tema_top_clientarea')) ?></span></a></li>
        <li class="pull-right"><a href="https://tecsecret.com.br/sistemas/tsos" target="_blank"><i class="fas fa-asterisk"></i> <span class="text"><?= ($this->lang->line('tema_top_versao')) ?>:
            <?php echo $this->config->item('app_version'); ?></span></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-cog"></i> <?php echo $this->session->userdata('nome') ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class=""><a title="Meu Perfil" href="<?php echo site_url(); ?>tsos/minhaConta"><i class="fas fa-user"></i> <span class="text"><?= ($this->lang->line('tema_top_profile')) ?></span></a></li>
                <li class="divider"></li>
                <li class=""><a title="Sair do Sistema" href="<?php echo site_url(); ?>tsos/sair"><i class="fas fa-sign-out-alt"></i> <span
                                class="text"><?= ($this->lang->line('tema_top_exit')) ?></span></a></li>
            </ul>
        </li>
        <li class="hidden-phone date-time-top">
          <span class="text date-time-top-text">
              <i class="far fa-calendar-alt"></i>
              <?php
              setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
              date_default_timezone_set('America/Sao_Paulo');
              $uppercaseMonth = ucfirst(gmstrftime('%B'));
              echo utf8_encode(ucfirst(strftime('%A, %d de ' . $uppercaseMonth . ' de %Y', strtotime('today'))));
              ?>
              <i class="far fa-clock"></i></i> <span id="timer"></span>
          </span>
        </li>
    </ul>
</div>
<!--start-top-serch-->
<div id="search">
    <form action="<?php echo base_url() ?>/tsos/pesquisar">
        <input type="text" name="termo" placeholder="<?= ($this->lang->line('tema_top_search')) ?>"/>
        <button type="submit" class="tip-bottom" title="<?= ($this->lang->line('tema_top_search2')) ?>"><i class="fas fa-search fa-white"></i></button>
    </form>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="fas fa-list"></i> <?= ($this->lang->line('tema_top_menu')) ?></a>
    <ul>
        <li class="<?php if (isset($menuPainel)) {
            echo 'active';
        }; ?>"><a href="<?php echo base_url() ?>"><i class="fas fa-home"></i> <span><?= ($this->lang->line('tema_top_dashboard')) ?></span></a></li>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
            <li class="<?php if (isset($menuClientes)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/clientes"><i class="fas fa-users"></i> <span><?= ($this->lang->line('tema_top_clientes')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
            <li class="<?php if (isset($menuProdutos)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/produtos"><i class="fas fa-shopping-bag"></i> <span><?= ($this->lang->line('tema_top_produtos')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
            <li class="<?php if (isset($menuServicos)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/servicos"><i class="fas fa-wrench"></i> <span><?= ($this->lang->line('tema_top_services')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
            <li class="<?php if (isset($menuOs)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/os"><i class="fas fa-diagnoses"></i> <span><?= ($this->lang->line('tema_top_os')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
            <li class="<?php if (isset($menuVendas)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/vendas"><i class="fas fa-cash-register"></i> <span><?= ($this->lang->line('tema_top_vendas')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGarantia')) { ?>
            <li class="<?php if (isset($menuGarantia)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/garantias"><i class="fas fa-book"></i> <span><?= ($this->lang->line('tema_top_garantia')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
            <li class="<?php if (isset($menuArquivos)) {
                echo 'active';
            }; ?>"><a href="<?php echo base_url() ?>/arquivos"><i class="fas fa-hdd"></i> <span><?= ($this->lang->line('tema_top_arquivo')) ?></span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
            <li class="submenu <?php if (isset($menuFinanceiro)) {
                echo 'active open';
            }; ?>">
                <a href="#"><i class="fas fa-hand-holding-usd"></i> <span><?= ($this->lang->line('tema_top_financeiro')) ?></span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <li><a href="<?php echo base_url() ?>/financeiro/lancamentos"><?= ($this->lang->line('tema_top_lancamento')) ?></a></li>
                </ul>
            </li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rServico') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
            <li class="submenu <?php if (isset($menuRelatorios)) {
                echo 'active open';
            }; ?>">
                <a href="#"><i class="fas fa-list-alt"></i> <span><?= ($this->lang->line('tema_top_relatorio')) ?>s</span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/clientes"><?= ($this->lang->line('tema_top_cli')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/produtos"><?= ($this->lang->line('tema_top_prod')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/servicos"><?= ($this->lang->line('tema_top_services2')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/os"><?= ($this->lang->line('tema_top_os2')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/vendas"><?= ($this->lang->line('tema_top_vendas2')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rGarantia')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/Garantias"><?= ($this->lang->line('tema_top_garantia2')) ?></a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) { ?>
                        <li><a href="<?php echo base_url() ?>/relatorios/financeiro"><?= ($this->lang->line('tema_top_finan')) ?></a></li>
                        <?php
                    } ?>
                </ul>
            </li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
            <li class="submenu <?php if (isset($menuConfiguracoes)) {
                echo 'active open';
            }; ?>">
                <a href="#"><i class="fas fa-cog"></i> <span><?= ($this->lang->line('tema_top_config')) ?></span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <li><a href="<?php echo site_url('usuarios') ?>"><?= ($this->lang->line('tema_top_user')) ?></a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) { ?>
                        <li><a href="<?php echo site_url('tsos/emitente') ?>"><?= ($this->lang->line('tema_top_emitente')) ?></a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                        <li><a href="<?php echo site_url('permissoes') ?>"><?= ($this->lang->line('tema_top_permissao')) ?></a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cAuditoria')) { ?>
                        <li><a href="<?php echo site_url('auditoria') ?>"><?= ($this->lang->line('tema_top_auditoria')) ?></a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmail')) { ?>
                        <li><a href="<?php echo site_url('email') ?>"><?= ($this->lang->line('tema_top_email')) ?></a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                        <li><a href="<?php echo site_url('tsos/backup') ?>"><?= ($this->lang->line('tema_top_bkp')) ?></a></li>
                    <?php } ?>

                </ul>
            </li>
            <?php
        } ?>
        <li>
            <a class="text-white" href="<?php echo site_url('tsos/sair'); ?>"><i class="fas fa-sign-out-alt"></i> <span><?= ($this->lang->line('tema_top_exit2')) ?></span></a>
        </li>

    </ul>
</div>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="<?php echo base_url() ?>" title="Dashboard" class="tip-bottom"><i class="fas fa-home"></i> <?= ($this->lang->line('tema_top_dashboard2')) ?></a>
            <?php if ($this->uri->segment(1) != null) {
                ?><a href="<?php echo base_url() . '/' . $this->uri->segment(1) ?>" class="tip-bottom" title="<?php echo ucfirst($this->uri->segment(1)); ?>">
                <?php echo ucfirst($this->uri->segment(1)); ?></a>
                <?php if ($this->uri->segment(2) != null) {
                    ?><a href="<?php echo base_url() . '/' . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3) ?>" class="current tip-bottom" title="<?php echo ucfirst($this->uri->segment(2)); ?>">
                    <?php echo ucfirst($this->uri->segment(2));
                } ?></a>
                <?php

            } ?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <?php if ($this->session->flashdata('error') != null) { ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php
                } ?>
                <?php if ($this->session->flashdata('success') != null) { ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php
                } ?>
                <?php if (isset($view)) {
                    echo $this->load->view($view, null, true);
                } ?>
            </div>
        </div>
    </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"><a href="https://tecsecret.com.br/sistemas/tsos target="_blank">
            <?php echo date('Y'); ?> &copy; <?php echo $this->config->item('app_name') ?> - Mais um produto TecSecret </a></div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/matrix.js"></script>
</body>

</html>
