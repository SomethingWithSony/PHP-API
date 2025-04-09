<?php 

$data = []; // API Response structure

// request
if(isset($_GET['option'])){

    switch ($_GET['option']){
        case 'status':
            $data['status'] = 'SUCCESS';
            $data['data'] = "API running OK!";
            break;
        default:
            $data['status'] = 'ERROR';
            break;
    }
} else {
    $data['status'] = 'ERROR';
}

// issue response 
response($data);

// response construction
function response($data_response){

    header("Content-Type:application/json");
    echo json_encode($data_response);
}