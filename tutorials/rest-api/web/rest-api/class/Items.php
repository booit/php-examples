<?php
class Items{   
    
    // 데이터 속성
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;   
    public $created; 
	public $modified; 
    public $error = null;

    // DB 테이블 명
    private $itemsTable = "items";      
    // DB 커넥션 객체
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function create(){
		
        // 쿼리 생성
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->itemsTable."(`name`, `description`, `price`, `category_id`, `created`)
			VALUES(?,?,?,?,?)");
		
        // 데이터 속성 설정
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->description = htmlspecialchars(strip_tags($this->description));
		$this->price = htmlspecialchars(strip_tags($this->price));
		$this->category_id = htmlspecialchars(strip_tags($this->category_id));
		$this->created = htmlspecialchars(strip_tags($this->created));
		
        // 쿼리 파라미터 구성
		$stmt->bind_param("ssiis", $this->name, $this->description, $this->price, $this->category_id, $this->created);

        // 쿼리 실행
		if($stmt->execute()){
			return true;
		}

        // CUSTOM: 쿼리 실패 시, 에러 메시지 저장
        $this->error = $this->conn->error;
		return false;		 
	}

    function read(){	
        if($this->id) {
            // 쿼리 생성
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE id = ?");
            // 쿼리 파라미터 구성
            $stmt->bind_param("i", $this->id);					
        } else {
            // 쿼리 생성
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable);		
        }		
        // 쿼리 실행 및 결과 반환
        $stmt->execute();			
        $result = $stmt->get_result();		
        return $result;	
    }

    function update(){
	 
        // 쿼리 생성
        $stmt = $this->conn->prepare("
            UPDATE ".$this->itemsTable." 
            SET name= ?, description = ?, price = ?, category_id = ?, created = ?
            WHERE id = ?");
     
        // 데이터 속성 구성
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->created = htmlspecialchars(strip_tags($this->created));
     
        // 쿼리 파라미터 구성
        $stmt->bind_param("ssiisi", $this->name, $this->description, $this->price, $this->category_id, $this->created, $this->id);
        
        // 쿼리 실행
        if($stmt->execute()){
            return true;
        }
     
        return false;
    }

    function delete(){
		
        // 쿼리 생성
        $stmt = $this->conn->prepare("
            DELETE FROM ".$this->itemsTable." 
            WHERE id = ?");
            
        // 데이터 속성 구성
        $this->id = htmlspecialchars(strip_tags($this->id));
     
        // 쿼리 파라미터 구성
        $stmt->bind_param("i", $this->id);
     
        // 쿼리 실행
        if($stmt->execute()){
            return true;
        }
     
        return false;		 
    }
}
?>