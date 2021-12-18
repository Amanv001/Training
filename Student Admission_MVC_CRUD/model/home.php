<?php 

    class HomeModel extends Model {
        public function Index() {
            $this->query('SELECT * FROM student_info');
            $rows = $this->resultSet();
            return $rows;
        }

        public function add() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $this->query('INSERT INTO student_info(name, email, phone, place) VALUES(:name, :email, :phone, :place)');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':phone', $post['phone']);
                $this->bind(':place', $post['place']);

                $this->execute();
                // VERIFY
                if($this->lastInsertId()) {
                    header('Location: '. ROOT_URL);
                }
                return;
            }

        public function delete() {

            $id = $_POST["id"];
                echo $id;
                $this->query('DELETE from student_info where sno=:id');
                $this->bind(':id', $id);
                $this->execute();

                header('Location: '. ROOT_URL);
            return;
        }

        public function update() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->query('UPDATE student_info SET name=:name, email=:email, phone=:phone, place=:place WHERE sno=:id');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':phone', $post['phone']);
            $this->bind(':place', $post['place']);
            $this->bind(':id', $post['update_id']);

            $this->execute();
            header('Location: '. ROOT_URL);
            // echo 'SUBMITTED';
            return;
        }

    }

?>