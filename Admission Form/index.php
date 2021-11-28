<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>CRUD Operations</title>
  <!-- <script src="script.js"></script> -->
  <!-- <script src="module.js" type="module"></script> -->

  
  

</head>

<body>
  <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Manage <b>Students</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i
                class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
            <a href="#deleteStudentModal" class="btn btn-danger" data-toggle="modal"><i
                class="material-icons">&#xE15C;</i> <span>Delete</span></a>
          </div>
        </div>
      </div>
      <div id="tabledata"></div>
      <div class="clearfix">
        <div class="hint-text">Showing <b>5 </b>entries</div>
        <ul class="pagination">
          <li class="page-item active"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!--Add Student Modal -->
  <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStudentModal">Add Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp"
                placeholder="Enter Full Name">
            </div>
            <div class="form-group">
              <label for="InputEmail">Email</label>
              <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="InputAddress">Address</label>
              <input type="text" class="form-control" id="InputAddress" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="InputPhone">Phone</label>
              <input type="tel" class="form-control" id="InputPhone" placeholder="Enter Phone">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onClick="addStudent()">Add Student</button>
        </div>
      </div>
    </div>
  </div>

  <!--Delete Student Modal -->
  <div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteStudentModal">Delete Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure want to delete these Records?</p>
          <small class="text-warning">This cannot be undone.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" id="delete">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!--Edit Student Modal -->
  <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editStudentModal">Edit Student </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp"
                placeholder="Enter Full Name">
            </div>
            <div class="form-group">
              <label for="InputEmail">Email</label>
              <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="InputAddress">Address</label>
              <input type="text" class="form-control" id="InputAddress" placeholder="Enter Address">
            </div>
            <div class="form-group">
              <label for="InputPhone">Phone</label>
              <input type="tel" class="form-control" id="InputPhone" placeholder="Enter Phone">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
          <input type="hidden" id="hiddendata">
        </div>
      </div>
    </div>
  </div>

</body>

<script>

    $(document).ready(function(){
      displayData();
    });

    function displayData(){
      var displayData = "true";
      $.ajax({
        url: "display.php",
        type:'post',
        data:{
          displaySend: displayData
        },
        success:function(data,status){
          $('#tabledata').html(data);
          console.log(status);
        }
      })
    }

    function addStudent() {
      console.log("add called");
      var name = $('#InputName').val();
      var email = $('#InputEmail').val();
      var add = $('#InputAddress').val();
      var phone = $('#InputPhone').val();

      $.ajax({
        url: "insert.php",
        type: 'post',
        data: {
          nameSend: name,
          emailSend: email,
          addSend: add,
          phoneSend: phone
        },
        success: function (data, status) {
          console.log(status);
          displayData();
        }
      })
    }

    function deleteStudent(deleteid){
      console.log("delete called");
      $.ajax({
        url:"delete.php",
        type:'post',
        data: {
          deleteSend: deleteid
        },
        success: function (data, status){
          displayData();
          console.log(status);
        }
      });
    }

    function updateStudent(updateid){
      console.log("update called");
      $('#hiddendata').val(updateid)

      $.post("update.php",{updateid:updateid},function(data,status){
        var userid = JSON.parse(data);
        $('updatename').val(userid.name);
        $('updateemail').val(userid.email);
        $('updatplace').val(userid.place);
        $('updatemobile').val(userid.mobile);
      });

      $('#editStudentModal').modal("show");
    }

  </script>

</html>
