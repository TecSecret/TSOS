<div class="span12" style="margin-left: 0">
    <form action="<?=site_url('permissoes/adicionar')?>" id="formPermissao" method="post">

    <div class="span12" style="margin-left: 0">

        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <h5><?=$this->lang->line('permaddpermicad');?></h5>
            </div>
            <div class="widget-content">

                <div class="span6">
                    <label><?=$this->lang->line('permaddperminome');?></label>
                    <input name="nome" type="text" id="nome" class="span12" />

                </div>
                <div class="span6">
                    <br/>
                    <label>
                        <input name="marcarTodos" type="checkbox" value="1" id="marcarTodos" />
                        <span class="lbl"> <?=$this->lang->line('permaddpermitodos');?></span>

                    </label>
                    <br/>
                </div>

                <div class="control-group">
                    <label for="documento" class="control-label"></label>
                    <div class="controls">

                        <table class="table table-bordered">
                            <tbody>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vCliente" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiviscli');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aCliente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddcli');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eCliente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedcli');?></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input name="dCliente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelcli');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vProduto" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivisprod');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aProduto" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddprod');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eProduto" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedprod');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dProduto" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelprod');?></span>
                                        </label>
                                    </td>

                                </tr>
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vServico" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivisservice');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aServico" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddservice');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eServico" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedservice');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dServico" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelservice');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr><td colspan="4"></td></tr>
                                <tr>

                                    <td>
                                        <label>
                                            <input name="vOs" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivisos');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aOs" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddos');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eOs" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedos');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dOs" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelos');?></span>
                                        </label>
                                    </td>

                                </tr>
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vVenda" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivisven');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aVenda" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddven');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eVenda" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedven');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dVenda" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelven');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vArquivo" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivisarq');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aArquivo" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddarq');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eArquivo" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedarq');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dArquivo" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidelarq');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="vLancamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermivislan');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="aLancamento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiaddlan');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="eLancamento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiedlan');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="dLancamento" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermidellan');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="rCliente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelcli');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rServico" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelaser');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rOs" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelos');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rProduto" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelprod');?></span>
                                        </label>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="rVenda" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelven');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="rFinanceiro" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermirelfinan');?></span>
                                        </label>
                                    </td>
                                    <td colspan="2"></td>

                                </tr>
                                <tr><td colspan="4"></td></tr>

                                <tr>

                                    <td>
                                        <label>
                                            <input name="cUsuario" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiconfuser');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cEmitente" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiconfemite');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cPermissao" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermiconfperm');?></span>
                                        </label>
                                    </td>

                                    <td>
                                        <label>
                                            <input name="cBackup" class="marcar" type="checkbox" value="1" />
                                            <span class="lbl"><?=$this->lang->line('permaddpermibkp');?></span>
                                        </label>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>



            <div class="form-actions">
                <div class="span12">
                    <div class="span6 offset3">
                        <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i><?=$this->lang->line('permaddpermiadd');?></button>
                        <a href="<?site_url('permissoes') ?>" id="" class="btn"><i class="icon-arrow-left"></i><?=$this->lang->line('permaddpermivoltar');?></a>
                    </div>
                </div>
            </div>

            </div>
        </div>


    </div>

</form>

</div>


<script type="text/javascript" src="<?=base_url('assets/js/validate.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '#marcarTodos', function(event) {
            if($(this).prop('checked')){

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", true);
                 }
              );
           }else{

              $('.marcar').each(
                 function(){
                    $(this).attr("checked", false);
                 }
              );
           }
        });



    $("#formPermissao").validate({
        rules :{
            nome: {required: true}
        },
        messages:{
            nome: {required: '<?=$this->lang->line('permaddpermiobriga');?>'}
        }
    });



    });
</script>
