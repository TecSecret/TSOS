<link rel="stylesheet" href="<?=base_url('assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css')?>" />
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js')?>"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-hdd"></i>
                </span>
                <h5><?=$this->lang->line('arquicad');?></h5>
            </div>
            <div class="widget-content nopadding">
                <?=$custom_error; ?>
                <form action="<?=current_url()?>" id="formArquivo" enctype="multipart/form-data" method="post" class="form-horizontal" >

                    <div class="control-group">
                        <label for="preco" class="control-label"><span class="required"><?=$this->lang->line('arquiarqui');?>*</span></label>
                        <div class="controls">
                            <input id="arquivo" type="file" name="userfile" /> (txt|pdf|gif|png|jpg|jpeg)
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="nome" class="control-label"><?=$this->lang->line('arquinome');?>*</label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label"><?=$this->lang->line('arquidescr');?></label>
                        <div class="controls">
                            <textarea rows="3" cols="30" name="descricao" id="descricao"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label"><?=$this->lang->line('arquidt');?></label>
                        <div class="controls">
                            <input id="data" type="text" class="datepicker" name="data" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i><?=$this->lang->line('arquiadd');?></button>
                                <a href="<?=site_url('arquivos')?>" class="btn"><i class="icon-arrow-left"></i><?=$this->lang->line('arquivoltar');?></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url('assets/js/jquery.validate.js')?>"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formArquivo').validate({
            rules :{
                  nome:{ required: true},
                  userfile:{ required: true}
            },
            messages:{
                  nome :{ required: '<?=$this->lang->line('arquiobrigatorio');?>'},
                  userfile :{ required: '<?=$this->lang->line('arquiobrigatorio');?>'}
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
           $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
      });
</script>
