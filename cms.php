<?php include_once 'config/init.php'; ?>

<?php
    if(isset( $_SESSION['userId']) && isset($_SESSION['confirm']) && isset($_SESSION['username'])) {
        $user = new User;
        $addons = new Addons;

        $ipId =   $ip -> getIpId($u_info -> get_ip())->IPID;

        include_once 'helpers/log_in_out.php';

        $template = new Template('./templates/mainboard.php');

        $template -> addons = $addons -> selectAddons();

        echo $template;
    } else {
        redirect('index.php', 'You must login', 'error');
    }
?>