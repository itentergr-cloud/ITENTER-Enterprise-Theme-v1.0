php
<?php


if(!defined('ABSPATH')){

exit;

}



function itenter_register_blocks(){



register_block_type(

get_template_directory()
.'/blocks/hero'

);



register_block_type(

get_template_directory()
.'/blocks/services'
  );



register_block_type(

get_template_directory()
.'/blocks/projects'

);



}


add_action(

'init',

'itenter_register_blocks'

);
