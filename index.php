<?php 
    $test = shell_exec("git add .");
    $test2 = shell_exec("git push origin master");

    if($test2){
        echo json_encode('success');
    }
?>