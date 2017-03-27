<link rel="stylesheet" href="<?=base_url('assets/css/uniform.css')?>" />
<link rel="stylesheet" href="<?=base_url('assets/css/select2.css')?>" />

<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?=$this->lang->line('configaltformularios');?></h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?=current_url()?>" method="POST" class="form-horizontal">
          	<div class="control-group">
              <label class="control-label"><?=$this->lang->line('configaltcli');?></label>
              <div class="controls">
                <label>
                  <div class="checker" id="uniform-undefined">
                   <span>
                      <input type="checkbox" name="nomeCliente" style="opacity: 0;" value="required" <?=$validate_rules['nomeCliente']?> >
                    </span>
                  </div>
                  <?=$this->lang->line('configaltnome');?>
                </label>
                <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="documento" style="opacity: 0;" value="required" <?=$validate_rules['documento']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltdoc');?> 
                 </label>       
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="telefone" style="opacity: 0;" value="required" <?=$validate_rules['telefone']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltfonefxo');?> 
                 </label>        
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="celular" style="opacity: 0;" value="required" <?=$validate_rules['celular']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltfonemovel');?> 
                 </label>        
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="email" style="opacity: 0;" value="required" <?=$validate_rules['email']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltemail');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="rua" style="opacity: 0;" value="required" <?=$validate_rules['rua']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltend');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="numero" style="opacity: 0;" value="required" <?=$validate_rules['numero']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltendn');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="bairro" style="opacity: 0;" value="required" <?=$validate_rules['bairro']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltendbairro');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="cidade" style="opacity: 0;" value="required" <?=$validate_rules['cidade']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltendciti');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="estado" style="opacity: 0;" value="required" <?=$validate_rules['estado']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltendus');?> 
                 </label>                 
                 <label>
                  <div class="checker" id="uniform-undefined">
                    <span>
                      <input type="checkbox" name="cep" style="opacity: 0;" value="required" <?=$validate_rules['cep']?> >
                    </span>
                  </div>
                 	<?=$this->lang->line('configaltendcep');?> 
                 </label>
                
              </div>
            </div>
            </div>
         </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success"><?=$this->lang->line('configaltsalvar');?></button>
            </div>
          </form>
        </div>
      </div>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.ui.custom.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.peity.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/select2.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.uniform.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/matrix.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/matrix.form_common.js')?>"></script>
