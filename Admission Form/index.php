<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <title>JS CRUD</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
    include 'db.php';
    

    $selectSQL = 'SELECT * FROM student_info';
    $result = mysqli_query($conn,$selectSQL);
    if ($result) {
      // $row = mysqli_fetch_assoc($result);
        // while ($row = mysqli_fetch_array($result)) {
        //     foreach($row as $data){
        //         echo $data;
        //     }
        // }
    }
?>

  <div class="container">

    <div class="page-header-extended">
      <h2 class="page-title"><strong> Admission Form </strong></h2>
    </div>

    <div class="starter-template">

      <div class="info-table-header-block">
        <button type="button" class="btn btn-primary add-new-button" data-toggle="modal" data-target="#addnewModal">
          Add Student</i>
        </button>
      </div>


      <!-- Add module start -->
      <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="addnewModalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="addnewModalTitle"><strong>ADD STUDENT</strong></h4>
            </div>

            <div class="modal-body">
              <form name="myform" id="input_form" onsubmit="return validateForm(myform)" method="post"
                action="insert.php">
                <div class="form-group">
                  <label for="name">Name
                    <span class="required-field">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" />
                </div>
                <div class="form-group">
                  <label for="email">Email
                    <span class="required-field">*</span>
                  </label>
                  <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" />
                </div>
                <div class="form-group">
                  <label for="phone">Phone
                    <span class="required-field">*</span>
                  </label>
                  <input type="phone" class="form-control" placeholder="Enter phone number" id="phone" name="phone" />
                </div>
                <div class="form-group">
                  <label for="place">Place
                    <span class="required-field">*</span>
                  </label>
                  <input type="place" class="form-control" placeholder="Enter place" id="place" name="place" />
                </div>

                <div class="modal-footer-extended">
                  <button class="btn btn-success">Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Add Module end -->

      <table id="student_table" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>SNo</th>
            <th>
              Name
            </th>
            <th>
              Email
            </th>
            <th>
              Phone
            </th>
            <th>
              Place
            </th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row = mysqli_fetch_array( $result )){
            echo
            "<tr>
              <td>{$row['sno']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['place']}</td>
              <td><button class='btn btn-sm btn-primary')'><i class='fa fa-pencil' aria-hidden='true'></i></button>&nbsp;<button class='btn btn-sm btn-danger')'><i class='fa fa-trash' aria-hidden='true'></i></button></td>
            </tr>\n";
          }
        ?>
        </tbody>
      </table>

      <div class="show-table-info hide">
        <div class="alert alert-info center">
          <strong>No Data Found, Please Enter Some Data</strong>
        </div>
      </div>
    </div>
  </div>


  <!-- User Edit Modal Start -->

  <div id="show_user_info">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="editModal"><strong>EDIT</strong></h4>
          </div>
          <div class="modal-body">
            <form onsubmit="return validateForm()" name="editForm">
              <div class="form-group">
                <label for="edit_name">Name
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" id="edit_name" />
              </div>
              <div class="form-group">
                <label for="edit_email">Email
                  <span class="required-field">*</span>
                </label>
                <input type="email" class="form-control" placeholder="Enter Email" id="edit_email" />
              </div>
              <div class="form-group">
                <label for="phone">Phone
                  <span class="required-field">*</span>
                </label>
                <input type="phone" class="form-control" placeholder="Enter Author Name" id="edit_phone" />
              </div>
              <div class="form-group">
                <label for="edit_place">Place
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Place" id="edit_place" />
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" id="member_id">
              </div>

              <div class="modal-footer-extended">
                <button class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- User Edit Modal End -->

  <!-- Delete Confirmation Dialog Start -->
  <div id="show_user_info">
    <div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="deleteDialog">Warning!</h4>
          </div>
          <div class="modal-body">
            <h4>Delete this User Data? </h4>
            <input type="hidden" id="deleted-member-id" value="">
            <div class="modal-footer-extended">
              <button class="btn btn-danger" onclick="deleteStudentData(); return false;">Delete</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Delete Confirmation Dialog End -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <script src="bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>