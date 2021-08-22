<?php
class Database{
	
    // DB 연결 정보 설정
	private $host  = 'db';
    private $user  = 'user';
    private $password   = "user1234";
    private $database  = "rest-api-db"; 

    public function getConnection(){		
        // DB 커넥션 객체 생성 및 반환
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>
