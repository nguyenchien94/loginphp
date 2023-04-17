<?php 
function cmt_list_all() {
    $sql = "SELECT * FROM comment";
    return pdo_query($sql);
}
function cmt_add($params = [])
{
    //cải tiến câu lệnh sql cho phù hợp với truy vấn , nếu cột nào trống
    $sql = "INSERT INTO comment(description) VALUES (:description)";
    return pdo_execute($sql, $params); //trả về id khi thêm mới
}
?>