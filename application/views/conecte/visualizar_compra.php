<?php $totalProdutos = 0;?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5><?=$this->lang->line('conecteviscpcp');?></h5>
                <div class="buttons">
                    
                    <a id="imprimir" title="Imprimir" class="btn btn-mini btn-inverse" href=""><i class="icon-print icon-white"></i><?=$this->lang->line('conecteviscpprint');?></a>
                </div>
            </div>
            <div class="widget-content" id="printOs">
                <div class="invoice-content">
                    <div class="invoice-head">
                        <table class="table">
                            <tbody>

                                <?php if($emitente == null) {?>
                                            
                                <tr>
                                    <td colspan="3" class="alert"><?=$this->lang->line('conecteviscpnotemitente');?></td>
                                </tr>
                                <?php } else {?>

                                <tr>
                                    <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>
                                    <td> <span style="font-size: 20px; "> <?php echo $emitente[0]->nome; ?></span> </br><span><?php echo $emitente[0]->cnpj; ?> </br> <?php echo $emitente[0]->rua.', nº:'.$emitente[0]->numero.', '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span><?=$this->lang->line('conecteviscpemailemitente');?><?php echo $emitente[0]->email.' - Fone: '.$emitente[0]->telefone; ?></span></td>
                                    <td style="width: 18%; text-align: center"><?=$this->lang->line('conecteviscpvd');?> <span ><?php echo $result->idVendas?></span></br> </br> <span><?=$this->lang->line('conecteviscpemite');?><?php echo date('d/m/Y');?></span></td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
   
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h5><?=$this->lang->line('conecteviscpcli');?></h5>
                                                <span><?php echo $result->nomeCliente?></span><br/>
                                                <span><?php echo $result->rua?>, <?php echo $result->numero?>, <?php echo $result->bairro?></span><br/>
                                                <span><?php echo $result->cidade?> - <?php echo $result->estado?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h5><?=$this->lang->line('conecteviscpvend');?></h5></span>
                                                <span><?php echo $result->nome?></span> <br/>
                                                <span><?=$this->lang->line('conecteviscptel');?><?php echo $result->telefone?></span><br/>
                                                <span><?=$this->lang->line('conecteviscpemail');?><?php echo $result->email?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
      
                    </div>

                    <div style="margin-top: 0; padding-top: 0">


                        <?php if($produtos != null){?>
                   
                        <table class="table table-bordered table-condensed" id="tblProdutos" style="margin-top: 0; padding-top: 0">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 15px"><?=$this->lang->line('conecteviscpprod');?></th>
                                            <th style="font-size: 15px"><?=$this->lang->line('conecteviscpqtd');?></th>
                                            <th style="font-size: 15px"><?=$this->lang->line('conecteviscpsubt');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($produtos as $p) {

                                            $totalProdutos = $totalProdutos + $p->subTotal;
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$p->quantidade.'</td>';
                                            
                                            echo '<td>R$ '.number_format($p->subTotal,2,',','.').'</td>';
                                            echo '</tr>';
                                        }?>

                                        <tr>
                                            <td colspan="2" style="text-align: right"><strong><?=$this->lang->line('conecteviscptt');?></strong></td>
                                            <td><strong><?=$this->lang->line('conecteviscpr$');?><?php echo number_format($totalProdutos,2,',','.');?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                               <?php }?>
                        
                
                        <hr />
                    
                        <h4 style="text-align: right"><?=$this->lang->line('conecteviscpvaltr$');?><?php echo number_format($totalProdutos,2,',','.');?></h4>

                    </div>
            

                    
                    
              
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#imprimir").click(function(){         
            PrintElem('#printOs');
        })

        function PrintElem(elem)
        {
            Popup($(elem).html());
        }

        function Popup(data)
        {
            var mywindow = window.open('', 'TSDC', 'height=600,width=800');
            mywindow.document.write('<html><head><title>TSDC Assist?ncia</title>');
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap.min.css' /><link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap-responsive.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-style.css' /> <link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-media.css' />");


            mywindow.document.write('</head><body >');
            mywindow.document.write(data);
            mywindow.document.write('</body></html>');

            mywindow.print();
            mywindow.close();

            return true;
        }

    });
</script>