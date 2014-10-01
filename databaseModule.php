//新的mysqli 链接module
class databaseModule {
     public connectionIdentifier;
     
     public __construct($h,$u,$p,$n){
          $this->connectionIdentifier = mysqli_connect($h,$u,$p,$n);
          if (mysqli_connect_error()){
               $this->connectionIdentifier = false;
          }
     }
     
     public runQuery($q,$r){
          $result = mysqli_query($this->connectionIdentifier,$q);
          if($result){
               if($r = "SELECT"){
                    
               }
          } else {
               return $this->generateReturnArray("FAILED",0,0);
          }
     }
     
     private generateReturnArray($status,$insertId,$selectResult){
          $returnArray = array(
               'status' => $status,
               'insertId' => $insertId,
               'selectResult' => $selectResult
          );
     }
     
}
