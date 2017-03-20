<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span6" style="margin-left: 0">
        <label for="cliente"><?=$this->lang->line('cados_cli');?><span class="required">*</span></label>
        <input id="cliente" class="span12" type="text" name="cliente" value="<?=isset($result) ? $result->nomeCliente : '' ?>"  />
        <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?= isset($result->clientes_id)? $result->clientes_id : '' ?>"  />
        <input id="valorTotal" type="hidden" name="valorTotal" value=""  />
    </div>
    <div class="span6">
        <label for="tecnico"><?=$this->lang->line('cados_tec');?><span class="required">*</span></label>
        <input id="tecnico" class="span12" type="text" name="tecnico" value="<?=isset($result->nome) ? $result->nome : '' ?>"  />
        <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?=isset($result->usuarios_id) ? $result->usuarios_id : ''?>"  />
    </div>
</div>
<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span3">
        <label for="status"><?=$this->lang->line('cados_status');?><span class="required">*</span></label>
        <?=form_dropdown('status', $lista_status, isset($result->status)? $result->status : 'Orçamento', ['class' => 'span12'])?>     
    </div>
    <div class="span3">
        <label for="dataInicial"><?=$this->lang->line('cados_dtentra');?><span class="required">*</span></label>
        <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y'); ?>"  />
    </div>
    <div class="span3">
        <label for="dataFinal"><?=$this->lang->line('cados_dtfim');?></label>
        <input id="dataFinal" class="span12 datepicker" type="text" name="dataFinal" value="<?=isset($result->dataFinal)?date('d/m/Y', strtotime($result->dataFinal)) : ''?>"  />
    </div>
    <div class="span3">
        <label for="garantia"><?=$this->lang->line('cados_dtgarant');?></label>
        <input id="garantia" type="text" class="span12" name="garantia" value="<?=isset($result->garantia)? html_escape($result->garantia) :'' ?>"  />
    </div>
</div>
<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span6">
        <label for="fabricante"><?=$this->lang->line('cados_eqfabri');?><span class="required">*</span></label>
        <input id="fabricante" class="span12" type="text" name="fabricante" value="<?=isset($result->fabricante)? html_escape($result->fabricante) :'' ?>"  />
    </div>
    <div class="span6">
        <label for="modelo"><?=$this->lang->line('cados_eqmod');?><span class="required">*</span></label>
        <input id="modelo" class="span12" type="text" name="modelo" value="<?=isset($result->modelo)? html_escape($result->modelo) :'' ?>"  />
    </div>
</div>
<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span4">
        <label for="tipo_equipamento">Tipo de Equipamento<span class="required">*</span></label>
        <input id="tipo_equipamento" class="span12" type="text" name="tipo_equipamento" value="<?=isset($result->tipo_equipamento)? html_escape($result->tipo_equipamento) :'' ?>"  />
    </div>
    <div class="span4">
        <label for="serie"><?=$this->lang->line('cados_eqsn');?></label>
        <input id="serie" class="span12" type="text" name="serie" value="<?=isset($result->serie)? html_escape($result->serie) :'' ?>"  />
    </div>
    <div class="span4">
        <label for="part_namber"><?=$this->lang->line('cados_eqpn');?></label>
        <input id="part_namber" class="span12" type="text" name="part_namber" value="<?=isset($result->part_namber)? html_escape($result->part_namber) :'' ?>"  />
    </div>
</div>
<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span6">
        <label for="descricaoProduto"><?=$this->lang->line('cados_descr');?></label>
        <textarea class="span12" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"><?=isset($result->descricaoProduto)? html_escape($result->descricaoProduto):''?></textarea>
    </div>
    <div class="span6">
        <label for="defeito"><?=$this->lang->line('cados_def');?></label>
        <textarea class="span12" name="defeito" id="defeito" cols="30" rows="5"><?=isset($result->defeito)? html_escape($result->defeito) :'' ?></textarea>
    </div>
</div>
<div class="span12" style="padding: 1%; margin-left: 0">
    <div class="span6">
        <label for="observacoes"><?=$this->lang->line('cados_obs');?></label>
        <textarea class="span12" name="observacoes" id="observacoes" cols="30" rows="5"><?=isset($result->observacoes)? html_escape($result->observacoes) :'' ?></textarea>
    </div>
    <div class="span6">
        <label for="laudoTecnico"><?=$this->lang->line('cados_laudotec');?></label>
        <textarea class="span12" name="laudoTecnico" id="laudoTecnico" cols="30" rows="5"><?=isset($result->laudoTecnico)? html_escape($result->laudoTecnico) :'' ?></textarea>
    </div>
</div>
