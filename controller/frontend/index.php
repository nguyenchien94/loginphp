<?php
// require_once APP_PATH . '/model/user_model.php';
// require_once APP_PATH . '/model/nap_the_model.php';
switch ($action) {
    case 'home':
        extract(home());
        break;
    default:
        extract(home());
        break;
}
function home()
{
    $msg = "";
    return [
        'view_name' => 'index/index.php',
        'msg' => $msg
    ];
}

