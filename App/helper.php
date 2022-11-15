<?php
function view( $file_name){
    include_once($_SERVER['DOCUMENT_ROOT']."/resource/views/$file_name.php") ; 
}
?>