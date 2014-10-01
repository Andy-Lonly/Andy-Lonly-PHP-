//新的mysqli 链接module
class databaseModule {
     public connectionIdentifier;
     
     public __construct($h,$u,$p,$n){
          $this->connectionIdentifier = mysqli_connect($h,$u,$p,$n);
          if (mysqli_connect_error()){
               $this->connectionIdentifier = false;
          }
     }
}
