<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

defined('BASEPATH') OR exit('No direct script access allowed');
//define o hook que será executado após a execução do método __construct
//de cada controller, para que o controle do idioma seja feito de maneira
//automática
$hook['post_controller_constructor'] = array(
    'class' => 'LanguageLoader', //define a classe
    'function' => 'initialize', //define o método a ser executado
    'filename' => 'LanguageLoader.php', //define o nome do arquivo
    'filepath' => 'hooks' //define o diretório onde o arquivo está
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */