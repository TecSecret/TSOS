<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$this->lang->line('nomesist');?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/css/matrix-style.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/css/matrix-media.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/font-awesome/css/font-awesome.css')?>"  />
        <link rel="stylesheet" href="<?=base_url('assets/css/fullcalendar.css')?>" />
        <link rel="icon" href="<?=base_url('assets/img/favicon.ico')?>">

        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript"  src="<?=base_url('assets/js/jquery-1.10.2.min.js')?>"></script>

    </head>
    <body>
        <!--Header-part-->
        <div id="header">
            <h1><a href=""><?=$this->lang->line('nomesist');?></a></h1>
        </div>
        <!--close-Header-part-->

        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">

                <li class=""><a title="" href="<?=site_url('minhaConta')?>"><i class="icon icon-star"></i> <span class="text"><?=$this->lang->line('topo_conta');?></span></a></li>
                <li class=""><a title="" href="<?=site_url('sair')?>"><i class="icon icon-share-alt"></i> <span class="text"><?=$this->lang->line('topo_exit');?></span></a></li>
            </ul>
        </div>

        <!--start-top-serch-->
        <div id="search">
            <form action="<?=site_url('tsdc/pesquisar')?>">
                <input type="text" name="termo" placeholder="Pesquisar..."/>
                <button type="submit"  class="tip-bottom" title="Pesquisar"><i class="icon-search icon-white"></i></button>

            </form>
        </div>
        <!--close-top-serch-->

        <!--sidebar-menu-->

        <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i><?=$this->lang->line('topo_menu');?></a>
            <ul>


                <li class="<?php if (isset($menuPainel)) {
    echo 'active';
}?>"><a href="<?=site_url()?>"><i class="icon icon-home"></i> <span><?=$this->lang->line('topo_dash');?></span></a></li>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
                ?>
                <li class="<?php if (isset($menuClientes)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('clientes')?>"><i class="icon icon-group"></i> <span><?=$this->lang->line('topo_dashcli');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
                ?>
                <li class="<?php if (isset($menuProdutos)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('produtos')?>"><i class="icon icon-barcode"></i> <span><?=$this->lang->line('topo_dashprod');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
                ?>
                <li class="<?php if (isset($menuServicos)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('servicos')?>"><i class="icon icon-wrench"></i> <span><?=$this->lang->line('topo_dashserv');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                ?>
                <li class="<?php if (isset($menuOs)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('os')?>"><i class="icon icon-tags"></i> <span><?=$this->lang->line('topo_dashos');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) {
                ?>
                <li class="<?php if (isset($menuVendas)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('vendas')?>"><i class="icon icon-shopping-cart"></i> <span><?=$this->lang->line('topo_dashven');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) {
                ?>
                <li class="<?php if (isset($menuArquivos)) {
                    echo 'active';
                } ?>"><a href="<?=site_url('arquivos')?>"><i class="icon icon-hdd"></i> <span><?=$this->lang->line('topo_dasharq');?></span></a></li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) {
                ?>
                <li class="submenu <?php if (isset($menuFinanceiro)) {
                    echo 'active open';
                } ?>">
                    <a href="#"><i class="icon icon-money"></i> <span><?=$this->lang->line('topo_dashfinanc');?></span> <span class="label"><i class="icon-chevron-down"></i></span></a>
                    <ul>
                        <li><a href="<?=site_url('financeiro/lancamentos')?>"><?=$this->lang->line('topo_dashfinanclanc');?></a></li>
                    </ul>
                </li>
                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rServico') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) {
                ?>

                <li class="submenu <?php if (isset($menuRelatorios)) {
                    echo 'active open';
                } ?>" >
                    <a href="#"><i class="icon icon-list-alt"></i> <span><?=$this->lang->line('topo_dashrelat');?></span> <span class="label"><i class="icon-chevron-down"></i></span></a>
                    <ul>

                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/clientes')?>"><?=$this->lang->line('topo_dashrelatcli');?></a></li>
                        <?php
                } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/produtos')?>"><?=$this->lang->line('topo_dashrelatprod');?></a></li>
                        <?php
                } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/servicos')?>"><?=$this->lang->line('topo_dashrelatserv');?></a></li>
                        <?php
                } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/os')?>"><?=$this->lang->line('topo_dashrelatos');?></a></li>
                        <?php
                } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/vendas')?>"><?=$this->lang->line('topo_dashrelatven');?></a></li>
                        <?php
                } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) {
                        ?>
                        <li><a href="<?=site_url('relatorios/financeiro')?>"><?=$this->lang->line('topo_dashrelatfinan');?></a></li>
                        <?php
                } ?>

                    </ul>
                </li>

                <?php
} ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) {
                ?>
                <li class="submenu <?php if (isset($menuConfiguracoes)) {
                    echo 'active open';
                } ?>">
                    <a href="#"><i class="icon icon-cog"></i> <span><?=$this->lang->line('topo_dashconfig');?></span> <span class="label"><i class="icon-chevron-down"></i></span></a>
                    <ul>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <li><a href="<?=site_url('usuarios')?>"><?=$this->lang->line('topo_dashconfiguser');?></a></li>
                        <?php } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) { ?>
                        <li><a href="<?=site_url('tsdc/emitente')?>"><?=$this->lang->line('topo_dashconfigemite');?></a></li>
                        <?php } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                        <li><a href="<?=site_url('permissoes')?>"><?=$this->lang->line('topo_dashconfigpermi');?></a></li>
                        <?php } ?>
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                        <li><a href="<?=site_url('tsdc/backup')?>"><?=$this->lang->line('topo_dashconfigbkp');?></a></li>
                        <?php } ?>

                    </ul>
                </li>
                <?php
} ?>


            </ul>
        </div>
        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"> <a href="<?=site_url()?>" title="Dashboard" class="tip-bottom"><i class="icon-home"></i><?=$this->lang->line('topo_dash');?></a>
                    <?php if ($this->uri->segment(1) != null):?>
                    <a href="<?=site_url($this->uri->segment(1))?>" class="tip-bottom" title="<?=ucfirst($this->uri->segment(1))?>"><?=ucfirst($this->uri->segment(1))?></a>
                    <?php if ($this->uri->segment(2) != null):
                    ?><a href="<?=site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3) )?>" class="current tip-bottom" title="<?=ucfirst($this->uri->segment(2)); ?>"><?php echo ucfirst($this->uri->segment(2));
                    endif; ?></a> <?php
                    endif;?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <?php if ($this->session->flashdata('error') != null) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?=$this->session->flashdata('error')?>
                        </div>
                        <?php
}?>

                        <?php if ($this->session->flashdata('success') != null) {
                        ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?=$this->session->flashdata('success')?>
                        </div>
                        <?php
}?>

                        <?php if (isset($view)) {
    $this->load->view($view);
}?>


                    </div>
                </div>
            </div>
        </div>
        <!--Footer-part-->
        <div class="row-fluid">
            <div id="footer" class="span12"> <?=date('Y')?> &copy; TSDC Assistência - Projeto mantido pela TecSecret e DC WebSolutions</div>
        </div>
        <!--end-Footer-part-->
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/js/matrix.js')?>"></script>

    </body>
</html>
