<?php
require_once APP_PATH .   '/model/user_model.php';

switch ($action) {
    case 'list':
        extract(ListUser());
        break;
    default:
        extract(ListUser());
        break;
}

function ListUser()
{
    $user = user_list_all();
    return [
        'view_name' => 'user/list.php', 'items' => $user
    ];
}
