<?php 
// Fetching post for dashboard 
    class Posts extends Database{

        public function getPosts(){
            $sql = "SELECT * FROM `blog_post`";
            $stmt = $this->connect()->prepare($sql);
            $check = $stmt->execute();
            if($check){
                while($result = $stmt->fetchAll()){
                    return $result;
                }
            }else{
                return false;
            }
        }
        public function getIdPosts($id){
            $sql = "SELECT * FROM `blog_post` WHERE `post_id` ='" . $id . "'";
            $stmt = $this->connect()->prepare($sql);
            $check = $stmt->execute([$id]);
            if($check){
            $result = $stmt->fetch();
            return $result;
            }else{
                return false;
            }
        }
    }
?>