<?php 
    
    // registering user feedback 
    class Contacts extends Database{
        public function regContact($email,$message){
            $sql = "INSERT INTO `user_feedback` (`fd_email`, `fd_message`) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $check = $stmt->execute(array($email,$message));
            if($check){
                return true;
            }else{
                return false;
            }
        }
    }
?>

;