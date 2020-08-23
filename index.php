<?php include_once 'config/init.php'; ?>

<?php
    $user = new User;

    $ipId =   $ip -> getIpId($u_info -> get_ip())->IPID;

    include_once 'helpers/log_in_out.php';

    $template = new Template('./templates/login.php');

    echo $template;
?>