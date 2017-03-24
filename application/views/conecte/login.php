
<!DOCTYPE html>
<html lang="pt-br">
    
<head>
        <title><?=$this->lang->line('nomesistcli');?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?=base_url('assets/css/matrix-login.css')?>" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <script src="<?=base_url('assets/js/jquery-1.10.2.min.js')?>"></script>
        <link rel="icon" href="<?=base_url('assets/img/favicon.ico')?>">
    </head>
    <body>
        <div id="loginbox">            
            <form  class="form-vertical" id="formLogin" method="post" action="<?=base_url('conecte/login')?>">
                  <?php if($this->session->flashdata('error') != null){?>
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <?php echo $this->session->flashdata('error');?>
                       </div>
                  <?php }?>
                <div class="control-group normal_text"> <h3><img src="<?php echo base_url()?>assets/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input id="email" name="email" type="text" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-star"></i></span><input name="pass_codigo" type="text" placeholder="Codigo" />
                        </div>
                    </div>
                </div>
                <div class="form-actions" style="text-align: center">
                    <button class="btn btn-info btn-large"/><?=$this->lang->line('conectelgacessar');?></button>
                </div>
            </form>
       
        </div>
        
        
        
       <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/js/validate.js')?>"></script>




        <script type="text/javascript">
            $(document).ready(function(){

                $('#email').focus();
                $("#formLogin").validate({
                     rules :{
                          email: { required: true, email: true},
                          pass_codigo: { required: true}
                    },
                    messages:{
                          email: { required: '<?=$this->lang->line('conectelgobriga');?>', email: '<?=$this->lang->line('conectelgobrigaemail');?>'},
                          pass_codigo: {required: '<?=$this->lang->line('conectelgobriga');?>'}
                    },
                   submitHandler: function( form ){       
                         var dados = $( form ).serialize();
                         
                    
                        $.ajax({
                          type: "POST",
                          url: "<?=base_url('index.php/conecte/login?ajax=true')?>",
                          data: dados,
                          dataType: 'json',
                          success: function(data)
                          {
                            if(data.result == true){
                                window.location.href = "<?=base_url('index.php/conecte/painel')?>";
                            }
                            else{
                                $('#call-modal').trigger('click');
                            }
                          }
                          });

                          return false;
                    },

                    errorClass: "help-inline",
                    errorElement: "span",
                    highlight:function(element, errorClass, validClass) {
                        $(element).parents('.control-group').addClass('error');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).parents('.control-group').removeClass('error');
                        $(element).parents('.control-group').addClass('success');
                    }
                });

            });

        </script>



        <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none "><?=$this->lang->line('conectelgnotice');?></a>

        <div id="notification" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel"><?=$this->lang->line('nomesist');?></h4>
          </div>
          <div class="modal-body">
            <h5 style="text-align: center"><?=$this->lang->line('conectelgmsgerro');?></h5>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?=$this->lang->line('conectelgclose');?></button>

          </div>
        </div>


    </body>

</html>









