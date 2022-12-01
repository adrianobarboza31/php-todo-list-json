<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_text= file_get_contents('./todo.json');
$todo_list= json_decode($file_text);
// var_dump($_POST);
if(isset($_POST['text'])){
    // echo 'il parametro cè';
    $newtodo=[
        'text'=>$_POST['text'],
        'done'=> false,
    ];
    array_push($todo_list,$newtodo);
    file_put_contents('./todo.json',json_encode($todo_list));
}else{
    // echo 'non arriva';
    header('Content-Type: application/json');
echo json_encode($todo_list);
}

// ?>