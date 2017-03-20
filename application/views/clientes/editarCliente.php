<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5><?=$this->lang->line('cliedit');?></h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?=current_url()?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <?=form_hidden('idClientes',$result->idClientes)?>
                        <label for="nomeCliente" class="control-label"><?=$this->lang->line('clinome');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo $result->nomeCliente; ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label"><?=$this->lang->line('clicpfcnpj');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="documento" value="<?=$result->documento?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label"><?=$this->lang->line('clifonefixo');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" class="telefone" type="text" name="telefone" value="<?=$result->telefone?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label"><?=$this->lang->line('clifonemovel');?></label>
                        <div class="controls">
                            <input id="celular" class="telefone" type="text" name="celular" value="<?=$result->celular?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label"><?=$this->lang->line('cliemail');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="email" type="text" name="email" value="<?=$result->email?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label"><?=$this->lang->line('cliendereco');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?=$result->rua?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label"><?=$this->lang->line('clienderecon');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?=$result->numero?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label"><?=$this->lang->line('cliendbairro');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value="<?=$result->bairro?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label"><?=$this->lang->line('cliendciti');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidade" type="text" name="cidade" value="<?=$result->cidade?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label"><?=$this->lang->line('cliendus');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="<?=$result->estado?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label"><?=$this->lang->line('cliendcep');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" value="<?=$result->cep?>"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i><?=$this->lang->line('clialterar');?></button>
                                <a href="<?=site_url('clientes')?>" id="" class="btn"><i class="icon-arrow-left"></i><?=$this->lang->line('clivoltar');?></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/jquery.validate.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.maskedinput.js')?>"></script>
<script src="<?=base_url('assets/js/foneMask.js')?>"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  documento:{ required: true},
                  telefone:{ required: true},
                  email:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  documento :{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  telefone:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  email:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  rua:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  numero:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  bairro:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  cidade:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  estado:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'},
                  cep:{ required: '<?=$this->lang->line('clicmpobrigatorio');?>'}
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>
