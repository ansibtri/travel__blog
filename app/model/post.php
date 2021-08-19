<?php 
    // fetching post from database
    class Posts extends Database{
        public function getPosts(){
            $sql = 'SELECT * FROM `blog_post`';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while($result = $stmt->fetchAll()){
                return $result;
            }
        }

        public function getSelectedPost($id){
            $sql = 'SELECT * FROM blog_post WHERE post_id=?';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }
    }
?>