<?php
// HTTP 헤더 설정
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// 모듈 임포트
include_once '../config/Database.php';
include_once '../class/Items.php';
 
// 데이터베이스 연결
$database = new Database();
$db = $database->getConnection();
 
// 아이템 객체 생성
$items = new Items($db);
 
// Post 요청의 Body 데이터 가져오기
$data = json_decode(file_get_contents("php://input"));

// 유효한 데이터일 경우 실행
if(!empty($data->name) && !empty($data->description) &&
!empty($data->price) && !empty($data->category_id) &&
!empty($data->created)){    

    // 아이템 객체의 속성 설정
    $items->name = $data->name;
    $items->description = $data->description;
    $items->price = $data->price;
    $items->category_id = $data->category_id;	
    $items->created = date('Y-m-d H:i:s'); 
    
    // create 메서드 호출
    if($items->create()){         
        // 호출 성공 시
        http_response_code(201);         
        echo json_encode(array("message" => "Item was created."));
    } else{         
        // 호출 실패 시
        http_response_code(503);        
        echo json_encode(array("message" => "Unable to create item.", "details" => $items->error));
    }
// 유효하지 않은 데이터 처리
}else{    
    http_response_code(400);    
    echo json_encode(array("message" => "Unable to create item. Data is incomplete."));
}
?>