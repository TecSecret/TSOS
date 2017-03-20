<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1"><?=$this->lang->line('clivis_dados');?></a></li>
            <li><a data-toggle="tab" href="#tab2"><?=$this->lang->line('clivis_os');?></a></li>
            <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'eCliente')){
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.site_url('clientes/editar/').$result->idClientes.'"><i class="icon-pencil icon-white"></i> Editar</a>';
                    } ?>
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('clivis_tab1_inf');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('clivis_tab1_nome');?></strong></td>
                                                    <td><?=$result->nomeCliente?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_doc');?></strong></td>
                                                    <td><?=$result->documento?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_dtcad');?></strong></td>
                                                    <td><?=date('d/m/Y',  strtotime($result->dataCadastro))?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('clivis_tab1_info2');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('clivis_tab1_telfxo');?></strong></td>
                                                    <td><?=$result->telefone?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_telmovel');?></strong></td>
                                                    <td><?=$result->celular?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_email');?></strong></td>
                                                    <td><?=$result->email?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('clivis_tab1_info3');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('clivis_tab1_end');?></strong></td>
                                                    <td><?=$result->rua?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_num');?></strong></td>
                                                    <td><?=$result->numero ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_bairro');?></strong></td>
                                                    <td><?=$result->bairro?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_citi');?></strong></td>
                                                    <td><?=$result->cidade?> - <?=$result->estado?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('clivis_tab1_cep');?></strong></td>
                                                    <td><?=$result->cep?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th><?=$this->lang->line('clivis_tab2_osn');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_dtini');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_dtfim');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_desc');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_def');?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6"><?=$this->lang->line('clivis_tab2_none');?></td>
                                </tr>
                            </tbody>
                        </table>
                <?php } else { ?>
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th><?=$this->lang->line('clivis_tab2_osn');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_dtini');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_dtfim');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_desc');?></th>
                                    <th><?=$this->lang->line('clivis_tab2_def');?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                foreach ($results as $r) {
                    $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
                    $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));
                    echo '<tr>';
                    echo '<td>' . $r->idOs . '</td>';
                    echo '<td>' . $dataInicial . '</td>';
                    echo '<td>' . $dataFinal . '</td>';
                    echo '<td>' . $r->descricaoProduto . '</td>';
                    echo '<td>' . $r->defeito . '</td>';

                    echo '<td>';
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'vOs')){
                        echo '<a href="' . site_url('os/visualizar/'). $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                    }
                    if($this->permission->checkPermission($this->session->userdata('permissao'),'eOs')){
                        echo '<a href="' . site_url('os/editar/'). $r->idOs . '" class="btn btn-info tip-top" title="Editar OS"><i class="icon-pencil icon-white"></i></a>';
                    }
                    echo  '</td>';
                    echo '</tr>';
                } ?>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
            <?php  } ?>
        </div>
    </div>
</div>
