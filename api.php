<?php
    $project = $_POST['project'];
    $cmd = shell_exec("git clone "+$project);
    echo json_encode($cmd);
    exit;
    if($cmd){
        $data['message'] = "project has been successfully clone";
        $data['status'] = "200";
        echo json_encode($data);
    }else{
        $data['message'] = "Failed";
        $data['status'] = "500";
        echo json_encode($data);
    }
?>