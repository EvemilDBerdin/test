<?php 
    $datenow = date("Y/m/d");
    $test = shell_exec("git add .");
    $test2 = shell_exec("git commit -m '".$datenow."'");
    $test3 = shell_exec("git push");

    if($test3){
        echo json_encode('success');
    }
?>