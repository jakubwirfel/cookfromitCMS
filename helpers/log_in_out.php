<?php
if(isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    if (isset($user) && isset($password)) {
        $data = array();
        $data['user'] = $username;
        $data['password'] = $password;

        if($user -> login($data)) {
            $logs -> addLog(3, $ipId, $username . " login success to CMS");
            redirect('cms.php', 'You login to CMS', 'success');
        } else {
            $logs -> addLog(3, $ipId, $username . " login in error");
            redirect($_SERVER['PHP_SELF'], 'Incorrect user', 'error');
        }
    } else {
        redirect($_SERVER['PHP_SELF'], 'Username and password are required', 'error');
    }
}

if (isset($_GET['logout'])) {
    if ($user -> logout()) {
        $logs -> addLog(4, $ipId, "Logout from CMS success");
        redirect($_SERVER['PHP_SELF'], 'You logout from CMS', 'success');
    } else {
        $logs -> addLog(4, $ipId, $_SESSION['username'] . " logout from CMS in error");
        redirect($_SERVER['PHP_SELF'], 'Something went wrong', 'error');
    }
}