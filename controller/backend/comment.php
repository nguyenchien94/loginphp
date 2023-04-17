<?php
require_once APP_PATH . '/model/comment_model.php';
switch ($action) {
    case 'add':
        extract(Addcmt());
        break;
    case 'List_bl':
        extract(List_bl());
        break;
    
    default:
        extract(List_bl());
        break;
}

function Addcmt()
{
    $err = ['description' => ''];
    if (isset($_POST['btnSave'])) {
        extract($_POST); //bung mảng post thành các biến tự do
        if (trim($description) == '') {
            $err['description'] = "<small class='text-danger'>*không được để trống!!!</small>";
        }
        //nếu k có lỗi thì ghi csdl
        if (!array_filter($err)) {
            //tạo mảng tham số để lưu csdl, key của mảng là tên cột trong csdl
            $dataInsert = [

                'description' => $description,
            ];
            $last_id = cmt_add($dataInsert);
            $msg = "THÊM MỚI THÀNH CÔNG" . $last_id;
        }
        // else {
        //     $err;
        // }
    }
    return [
        'view_name' => 'comment/add.php',
        'new_id' => @$last_id,
        'err' => $err,
        'msg' => @$msg
    ];
}
function List_bl()
{
    $list_cmt = cmt_list_all();
    return [
        'view_name' => 'comment/list.php',
        'list_cmt' => $list_cmt,
    ];
}