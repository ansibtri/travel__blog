<?php 
    class search extends Database{
        
        public function item($query){
            $sql = "SELECT * FROM `blog_post`WHERE `post_visible` = '1' AND MATCH (`post_name`,`post_description`) AGAINST ('" . $query . "')";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$query]);
            $result = $stmt->fetchAll();
            return $result;
        }
    }
?>
    