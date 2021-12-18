<?php
    // include('view/index.php');
    class ModelIndex extends Model{

        public function __construct(){
            $sql = 'SELECT * FROM student_info';
            $this->query($sql);
            $rows = $this->resultSet();
            return $rows;
        }

        public function index(){
            $sql = 'SELECT * FROM student_info';
            $this->query($sql);
            $rows = $this->resultSet();
            return $rows;
        }

        public function addRecords(){
            error_reporting(0);
            $name = $_REQUEST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $place = $_POST['place'];
            $sql = 'INSERT INTO student_info (name, email, phone, place)
                    VALUES(:name, :email, :phone, :place)';
            $this->query($sql);
            $this->bind(':name',$name);
            $this->bind(':email',$email);
            $this->bind(':phone',$phone);
            $this->bind(':place',$place);
            $this->execute();
            if($this->lastInsertId()){
                header('Location: '.ROOT_URL.'index');
            }
            
        }

        public function delRecords(){
            $id = $_REQUEST['id'];
            echo $id;
            $sql = 'DELETE FROM student_info WHERE id = $id';
            $this->query($sql);
            echo "deleted";
            echo $id;
            if ($this->execute()) {
                header('Location: '.ROOT_URL.'index');
            }
        }
    }
