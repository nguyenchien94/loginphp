<?php 
function user_get_one1($params = [])
{
    $sql = "SELECT * FROM users WHERE 1 ";
    foreach ($params as $field_name => $value) {
        $sql .= " AND {$field_name} = :{$field_name} ";
        return pdo_query_one($sql, $params);
    }
}
function user_list_all() {
    $sql = "SELECT * FROM users WHERE role = 1";
    return pdo_query($sql);
}
?>