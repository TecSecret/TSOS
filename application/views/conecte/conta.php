<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1"><?=$this->lang->line('conectccdados');?></a></li>
            
            <div class="buttons">
                    <a title="Icon Title" class="btn btn-mini btn-info" href="<?php echo base_url()?>index.php/conecte/editarDados/<?php echo $result->idClientes?>"><i class="icon-pencil icon-white"></i><?=$this->lang->line('conectcceditar');?></a>
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
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('conectccddpessoais');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('conectccnome');?></strong></td>
                                                    <td><?php echo $result->nomeCliente ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccdoc');?></strong></td>
                                                    <td><?php echo $result->documento ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccdtcad');?></strong></td>
                                                    <td><?php echo date('d/m/Y',  strtotime($result->dataCadastro)) ?></td>
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
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('conectcccontatos');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('conectcctelfxo');?></strong></td>
                                                    <td><?php echo $result->telefone ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectcctelmovel');?></strong></td>
                                                    <td><?php echo $result->celular ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccemail');?></strong></td>
                                                    <td><?php echo $result->email ?></td>
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
                                            <span class="icon"><i class="icon-list"></i></span><h5><?=$this->lang->line('conectccend');?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong><?=$this->lang->line('conectccend2');?></strong></td>
                                                    <td><?php echo $result->rua ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccendnum');?></strong></td>
                                                    <td><?php echo $result->numero ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccendbairro');?></strong></td>
                                                    <td><?php echo $result->bairro ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccendciti');?></strong></td>
                                                    <td><?php echo $result->cidade ?> - <?php echo $result->estado ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong><?=$this->lang->line('conectccendcep');?></strong></td>
                                                    <td><?php echo $result->cep ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

          
        </div> 
    </div>
</div>