<?php

include 'connect.php';

if (isset($_POST['displaySend'])) {

    $table = '<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Sl no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Place</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>';

  $sql = "select * from `studentinfo`";
  $result = mysqli_query($con,$sql);
  while ($row=mysqli_fetch_assoc($result)) {
      $id=$row['sl'];
      $name=$row['name'];
      $email=$row['email'];
      $mobile=$row['place'];
      $place=$row['mobile'];
      $table.='<tr>
      <td scope="row">'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$place.'</td>
      <td>'.$mobile.'</td>
      <td>
        <a href="" class="edit" data-toggle="modal" onclick="updateStudent('.$id.')"><i class="material-icons"
        data-toggle="tooltip" title="Edit">&#xE254;</i></a>
        <a href="#deleteStudentModal" class="delete" data-toggle="modal" onclick="deleteStudent('.$id.')"><i class="material-icons"
        data-toggle="tooltip" title="Delete">&#xE872;</i></a>
      </td>
    </tr>';
  }
  $table.= '</table>';
  echo $table;
}

?>