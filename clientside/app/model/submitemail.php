<?php 
    class subscribe extends Database{

        public function submitEmail($email){
            $sql = "INSERT INTO `subscribed_email` (`user_email`) VALUES ('$email')";
            $stmt = $this->connect()->prepare($sql);
            $check = $stmt->execute([$email]);
            if($check){
                return true;
            }else{
                return false;
            }
        }
    }
?>

