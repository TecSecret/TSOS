<?php if($this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){ ?>
    <a href="<?=site_url('clientes/adicionar')?>" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Cliente</a>
<?php } ?>
<?php
if(!$results){?>
        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5><?=$this->lang->line('cli');?></h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><?=$this->lang->line('cliaid');?></th>
                        <th><?=$this->lang->line('clinome');?></th>
                        <th><?=$this->lang->line('clicpfcnpj');?></th>
                        <th><?=$this->lang->line('clifonefixo');?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5"><?=$this->lang->line('clivazio');?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php }else{
?>
<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5><?=$this->lang->line('cli');?></h5>
     </div>
<div class="widget-content nopadding">
<table class="table table-bordered ">
    <thead>
        <tr>
            <th><?=$this->lang->line('cliaid');?></th>
            <th><?=$this->lang->line('clinome');?></th>
            <th><?=$this->lang->line('clicpfcnpj');?></th>
            <th><?=$this->lang->line('clifonefixo');?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            echo '<tr>';
            echo '<td>'.$r->idClientes.'</td>';
            echo '<td>'.$r->nomeCliente.'</td>';
            echo '<td>'.$r->documento.'</td>';
            echo '<td>'.$r->telefone.'</td>';
            echo '<td>';
            if($this->permission->checkPermission($this->session->userdata('permissao'),'vCliente')){
                echo '<a href="'.site_url('clientes/visualizar/').$r->idClientes.'" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
            }
            if($this->permission->checkPermission($this->session->userdata('permissao'),'eCliente')){
                echo '<a href="'.site_url('clientes/editar/').$r->idClientes.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Cliente"><i class="icon-pencil icon-white"></i></a>';
            }
            if($this->permission->checkPermission($this->session->userdata('permissao'),'dCliente')){
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" cliente="'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir Cliente"><i class="icon-remove icon-white"></i></a>';
            }
            echo '</td>';
            echo '</tr>';
        }?>
        <tr>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php echo $this->pagination->create_links();}?>
<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?=site_url('clientes/excluir')?>" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel"><?=$this->lang->line('clidel');?></h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idCliente" name="id" value="" />
    <h5 style="text-align: center"><?=$this->lang->line('clidelmsg');?></h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?=$this->lang->line('clicancelar');?></button>
    <button class="btn btn-danger"><?=$this->lang->line('clidel2');?></button>
  </div>
  </form>
</div>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        var cliente = $(this).attr('cliente');
        $('#idCliente').val(cliente);
    });
});
</script>
