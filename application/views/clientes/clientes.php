<?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) { ?>
    <a href="<?php echo base_url(); ?>/clientes/adicionar" class="btn btn-success"><i class="fas fa-plus"></i> <?= ($this->lang->line('client_add')) ?></a>
<?php } ?>

<div class="widget-box">
    <div class="widget-title">
        <span class="icon">
            <i class="fas fa-user"></i>
        </span>
        <h5><?= ($this->lang->line('client_cli')) ?></h5>
    </div>

    <div class="widget-content nopadding">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th><?= ($this->lang->line('client_cod')) ?></th>
                    <th><?= ($this->lang->line('cli_add')) ?></th>
                    <th><?= ($this->lang->line('cli_cpfcnpj')) ?></th>
                    <th><?= ($this->lang->line('cli_phone')) ?></th>
                    <th><?= ($this->lang->line('cli_email')) ?></th>
                    <th><?= ($this->lang->line('cli_acoes')) ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    if(!$results){
                        echo '<tr>
                                <td colspan="5">Você não possui clientes</td>
                                </tr>';
                    }
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->idClientes . '</td>';
                        echo '<td>' . $r->nomeCliente . '</td>';
                        echo '<td>' . $r->documento . '</td>';
                        echo '<td>' . $r->telefone . '</td>';
                        echo '<td>' . $r->email . '</td>';
                        echo '<td>';
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
                            echo '<a href="' . base_url() . '/clientes/visualizar/' . $r->idClientes . '" style="margin-right: 1%" class="btn tip-top" title="Ver detalhes"><i class="fas fa-eye"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                            echo '<a href="' . base_url() . '/clientes/editar/' . $r->idClientes . '" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Cliente"><i class="fas fa-edit"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
                            echo '<a href="#modal-excluir" role="button" data-toggle="modal" cliente="' . $r->idClientes . '" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir cliente"><i class="fas fa-trash-alt"></i></a>';
                        }
                        echo '</td>';
                        echo '</tr>';
                    } ?>
          
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->pagination->create_links(); ?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel"><?= ($this->lang->line('client_delete')) ?></h5>
        </div>
        <div class="modal-body">
            <input type="hidden" id="idCliente" name="id" value="" />
            <h5 style="text-align: center"><?= ($this->lang->line('client_delete_msg')) ?></h5>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true"><?= ($this->lang->line('client_cancelar')) ?></button>
            <button class="btn btn-danger"><?= ($this->lang->line('client_delete2')) ?></button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var cliente = $(this).attr('cliente');
            $('#idCliente').val(cliente);
        });
    });
</script>
