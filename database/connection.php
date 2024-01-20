<?php

    class connection{
        public function connect(){
            try{
                $connect = mysqli_connect("localhost","root","","software_eng");
                return $connect;
            }
            catch (PDOException $f){
                    echo $f->getmessage();
            }
        }
    }

?>