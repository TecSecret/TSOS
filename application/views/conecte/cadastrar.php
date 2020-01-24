<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= ($this->lang->line('conecte_cad_title')) ?></title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css"/>
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css"/>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
</head>

<body>

    <div class="row-fluid" style="margin-top:0">
    <div class="span6 offset3">
        <div class="widget-box">
            <div class="widget-title">
                    <span class="icon">
                        <i class="fas fa-user"></i>
                    </span>
                    <h5><?= ($this->lang->line('conecte_cad_cadsistema')) ?></h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal">
                        <div class="control-group">
                            <label for="nomeCliente" class="control-label"><?= ($this->lang->line('conecte_cad_nome')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="documento" class="control-label"><?= ($this->lang->line('conecte_cad_cpfcnpj')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input class="cpfcnpj" type="text" name="documento" value="<?php echo set_value('documento'); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="telefone" class="control-label"><?= ($this->lang->line('conecte_cad_phone')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="celular" class="control-label"><?= ($this->lang->line('conecte_cad_celwp')) ?></label>
                            <div class="controls">
                                <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="email" class="control-label"><?= ($this->lang->line('conecte_cad_email')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>" />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="cep" class="control-label"><?= ($this->lang->line('conecte_cad_cep')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="cep" type="text" name="cep" value="<?php echo set_value('cep'); ?>" />
                            </div>
                        </div>


                        <div class="control-group" class="control-label">
                            <label for="rua" class="control-label"><?= ($this->lang->line('conecte_cad_end')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="numero" class="control-label"><?= ($this->lang->line('conecte_cad_endncompl')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>" />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="bairro" class="control-label"><?= ($this->lang->line('conecte_cad_bairro')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>" />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="cidade" class="control-label"><?= ($this->lang->line('conecte_cad_citi')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>" />
                            </div>
                        </div>

                        <div class="control-group" class="control-label">
                            <label for="estado" class="control-label"><?= ($this->lang->line('conecte_cad_estado')) ?><span class="required">*</span></label>
                            <div class="controls">
                                <input id="estado" type="text" name="estado" value="<?php echo set_value('estado'); ?>" />
                            </div>
                        </div>


                        <div class="form-actions">
                            <div class="span12">
                                <div class="span6 offset3">
                                    <button type="submit" class="btn btn-success btn-large"><i class="fas fa-plus"></i> <?= ($this->lang->line('conecte_cad_cad')) ?></button>
                                    <a href="<?php echo base_url() ?>/mine" id="" class="btn btn-large"><i class="fas fa-lock"></i> <?= ($this->lang->line('conecte_cad_acessar')) ?></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#formCliente').validate({
                rules: {
                    nomeCliente: {
                        required: true
                    },
                    documento: {
                        required: true
                    },
                    telefone: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    rua: {
                        required: true
                    },
                    numero: {
                        required: true
                    },
                    bairro: {
                        required: true
                    },
                    cidade: {
                        required: true
                    },
                    estado: {
                        required: true
                    },
                    cep: {
                        required: true
                    }
                },
                messages: {

                    nomeCliente: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    documento: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    telefone: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    email: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    rua: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    numero: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    bairro: {
                        required: 'C<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    cidade: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    estado: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    },
                    cep: {
                        required: '<?= ($this->lang->line('conecte_cad_cmprequerido')) ?>'
                    }

                },

                errorClass: "help-inline",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });
        });
    </script>


    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12">
            <?= date('Y') ?> &copy; TS OS - Mais um produto do Grupo TecSecret para você.</div>
    </div>

    <!-- javascript
    ================================================== -->

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
