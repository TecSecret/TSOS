<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5><?=$this->lang->line('titulo_pg');?></h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">'.$custom_error.'</div>';
                } ?>
                <form action="<?=current_url()?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label"><?=$this->lang->line('cad_nome');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" data-validate="<?=$validate_rules['nomeCliente']?>" type="text" name="nomeCliente" value="<?=set_value('nomeCliente')?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label"><?=$this->lang->line('cad_cpfcnpj');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" data-validate="<?=$validate_rules['documento']?>" type="text" name="documento" value="<?=set_value('documento')?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label"><?=$this->lang->line('cad_fonefixo');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" data-validate="<?=$validate_rules['telefone']?>" class="telefone" type="text" name="telefone" value="<?=set_value('telefone')?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label"><?=$this->lang->line('cad_fonemovel');?></label>
                        <div class="controls">
                            <input id="celular" data-validate="<?=$validate_rules['celular']?>" class="telefone" type="text" name="celular" value="<?=set_value('celular')?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label"><?=$this->lang->line('cad_email');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="email" data-validate="<?=$validate_rules['email']?>" type="text" name="email" value="<?=set_value('email')?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label"><?=$this->lang->line('cad_endereco');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" data-validate="<?=$validate_rules['rua']?>" type="text" name="rua" value="<?=set_value('rua')?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label"><?=$this->lang->line('cad_num');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" data-validate="<?=$validate_rules['numero']?>" type="text" name="numero" value="<?=set_value('numero')?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label"><?=$this->lang->line('cad_bairro');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="bairro" data-validate="<?=$validate_rules['bairro']?>" type="text" name="bairro" value="<?=set_value('bairro')?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label"><?=$this->lang->line('cad_citi');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidade" data-validate="<?=$validate_rules['cidade']?>" type="text" name="cidade" value="<?=set_value('cidade')?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label"><?=$this->lang->line('cad_us');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" data-validate="<?=$validate_rules['estado']?>" type="text" name="estado" value="<?=set_value('estado')?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label"><?=$this->lang->line('cad_cep');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" data-validate="<?=$validate_rules['cep']?>" type="text" name="cep" value="<?=set_value('cep')?>"  />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="pass_codigo" class="control-label"><?=$this->lang->line('cliaddclipass_code');?><span class="required">*</span></label>
                        <div class="controls">
                            <input id="pass_codigo" data-validate="<?=$validate_rules['pass_codigo']?>" type="text" name="pass_codigo" value="<?=set_value('pass_codigo')?>"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i><?=$this->lang->line('cad_add');?></button>
                                <a href="<?=site_url('clientes')?>" id="" class="btn"><i class="icon-arrow-left"></i><?=$this->lang->line('cad_exit');?></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.validate.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.maskedinput.js')?>"></script>
<script src="<?=base_url('assets/js/foneMask.js')?>"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: $('#nomeCliente').data('validate')},
                  documento:{ required: $('#documento').data('validate')},
                  telefone:{ required: $('#telefone').data('validate')},
                  email:{ required: $('#email').data('validate')},
                  rua:{ required: $('#rua').data('validate')},
                  numero:{ required: $('#numero').data('validate')},
                  bairro:{ required: $('#bairro').data('validate')},
                  cidade:{ required: $('#cidade').data('validate')},
                  estado:{ required: $('#estado').data('validate')},
                  cep:{ required: $('#cep').data('validate')},
                  pass_codigo:{ required: $('#pass_codigo').data('validate')}
            },
            messages:{
                  nomeCliente :{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  documento :{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  telefone:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  email:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  rua:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  numero:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  bairro:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  cidade:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  estado:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  cep:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'},
                  pass_codigo:{ required: '<?=$this->lang->line('cad_obrigatorio');?>'}
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
