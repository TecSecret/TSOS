<link rel="stylesheet" href="<?=base_url('assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css')?>" />
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js')?>"></script>
<div class="span12" style="margin-left: 0">
    <form method="get" action="<?=current_url()?>">
        <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'aArquivo')){ ?>
             <div class="span3">
                <a href="<?=site_url('arquivos/adicionar')?>" class="btn btn-success span12"><i class="icon-plus icon-white"></i><?=$this->lang->line('arquiadd2');?></a>
            </div>
        <?php } ?>
        <div class="span5">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Digite o nome do documento para pesquisar" class="span12" value="<?=$this->input->get('pesquisa')?>" >
        </div>
        <div class="span3">
            <input type="text" name="data"  id="data"  placeholder="Data de" class="span6 datepicker" value="<?=$this->input->get('data')?>">
            <input type="text" name="data2"  id="data2"  placeholder="Data até" class="span6 datepicker" value="<?=$this->input->get('data2')?>" >
        </div>
        <div class="span1">
            <button class="span12 btn"> <i class="icon-search"></i> </button>
        </div>
    </form>
</div>
<?php
if(!$results){?>
<div class="span12" style="margin-left: 0">
        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-hdd"></i>
            </span>
            <h5><?=$this->lang->line('arquiarqui2');?></h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><?=$this->lang->line('arquiid');?></th>
                        <th><?=$this->lang->line('arquinome');?></th>
                        <th><?=$this->lang->line('arquidt');?></th>
                        <th><?=$this->lang->line('arquitm');?></th>
                        <th><?=$this->lang->line('arquiext');?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5"><?=$this->lang->line('arquivazio');?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php }else{ ?>
<div class="span12" style="margin-left: 0">
    <div class="widget-box">
         <div class="widget-title">
            <span class="icon">
                <i class="icon-hdd"></i>
             </span>
            <h5><?=$this->lang->line('arquiarqui2');?></h5>
         </div>
    <div class="widget-content nopadding">
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th><?=$this->lang->line('arquiid');?></th>
                <th><?=$this->lang->line('arquinome');?></th>
                <th><?=$this->lang->line('arquidt');?></th>
                <th><?=$this->lang->line('arquitm');?></th>
                <th><?=$this->lang->line('arquiext');?></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $r) {
                echo '<tr>';
                echo '<td>'.$r->idDocumentos.'</td>';
                echo '<td>'.$r->documento.'</td>';
                echo '<td>'.date('d/m/Y',strtotime($r->cadastro)).'</td>';
                echo '<td>'.$r->tamanho.' KB</td>';
                echo '<td>'.$r->tipo.'</td>';
                echo '<td>';
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vArquivo')){
                        echo '<a class="btn btn-inverse tip-top" style="margin-right: 1%" target="_blank" href="'.$r->url.'" class="btn tip-top" title="Imprimir"><i class="icon-print"></i></a>';
                    }
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vArquivo')){
                        echo '<a href="'.site_url('arquivos/download/').$r->idDocumentos.'" class="btn tip-top" style="margin-right: 1%" title="Download"><i class="icon-download-alt"></i></a>';
                    }
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'eArquivo')){
                        echo  '<a href="'.site_url('arquivos/editar/').$r->idDocumentos.'" class="btn btn-info tip-top" style="margin-right: 1%" title="Editar"><i class="icon-pencil icon-white"></i></a>';
                    }
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'dArquivo')){
                         echo '<a href="#modal-excluir" style="margin-right: 1%" role="button" data-toggle="modal" arquivo="'.$r->idDocumentos.'" class="btn btn-danger tip-top" title="Excluir Arquivo"><i class="icon-remove icon-white"></i></a>';
                    }
                echo  '</td>';
                echo '</tr>';
            }?>
            <tr>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
</div>
<?=$this->pagination->create_links();}?>
<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?=site_url('arquivos/excluir')?>" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel"><?=$this->lang->line('arquidel');?></h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idDocumento" name="id" value="" />
    <h5 style="text-align: center"><?=$this->lang->line('arquidelmsg');?></h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?=$this->lang->line('arquicancelar');?></button>
    <button class="btn btn-danger"><?=$this->lang->line('arquidel2');?></button>
  </div>
  </form>
</div>
<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        var arquivo = $(this).attr('arquivo');
        $('#idDocumento').val(arquivo);
   });
   $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
});
</script>
