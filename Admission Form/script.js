'use strict';

$(document).ready(function () {
  $('[data-toogle = "tooltip"]').tooltip();

  var checkbox = $('table tbody input[type="checkbox"]');
  $('#selectAll').click(function () {
    if (this.checked) {
      checkbox.each(function () {
        this.checked = true;
      });
    } else {
      checkbox.each(function () {
        this.checked = false;
      });
    }
  });
  checkbox.click(function () {
    if (!this.checked) {
      $('#selectAll').prop("checked", false);
    }
  });
});




// var selectedRow = null;
// function onFormSubmit(e) {
//   event.preventDefault();
//   var formData = readFormData();
//   if (selectedRow === null) {
//     insertNewRecord(formData);
//   }
//   else {
//     updateRecord(formData);
//   }
//   resetForm();
// }

// //Retrieve the data
// function readFormData() {
//   var formData = {};
//   formData["name"] = document.getElementById("InputName").value;
//   formData["email"] = document.getElementById("InputEmail").value;
//   formData["add"] = document.getElementById("InputAddress").value;
//   formData["phone"] = document.getElementById("InputPhone").value;
//   return formData;
// }

// //Insert the data
// function insertNewRecord(data) {
//   var table = document.getElementById("studentList").getElementsByTagName('tbody')[0];
//   var newRow = table.insertRow(table.length);
//   var cell1 = newRow.insertCell(0);
//   cell1.innerHTML = data.name;
//   var cell2 = newRow.insertCell(1);
//   cell2.innerHTML = data.email;
//   var cell3 = newRow.insertCell(2);
//   cell3.innerHTML = data.add;
//   var cell4 = newRow.insertCell(3);
//   cell4.innerHTML = data.phone;
//   var cell5 = newRow.insertCell(4);
//   cell5.innerHTML = `<a href="#editStudentModal" class="edit" data-toggle="modal"><i class="material-icons"
//   data-toggle="tooltip" title="Edit">&#xE254;</i></a> <a href="#deleteStudentModal" class="delete" data-toggle="modal"><i class="material-icons"
//   data-toggle="tooltip" title="Delete">&#xE872;</i></a>`
// }

// //Edit the data
// function onEdit(td){
//     selectedRow = td.parentElement.parentElement;
//     document.getElementById('productCode').value = selectedRow.cells[0].innerHTML;
//     document.getElementById('product').value = selectedRow.cells[1].innerHTML;
//     document.getElementById('qty').value = selectedRow.cells[2].innerHTML;
//     document.getElementById('perPrice').value = selectedRow.cells[3].innerHTML;
// }

// function updateRecord(formData){
//     selectedRow.cells[0].innerHTML = formData.productCode;
//     selectedRow.cells[1].innerHTML = formData.product;
//     selectedRow.cells[2].innerHTML = formData.qty;
//     selectedRow.cells[3].innerHTML = formData.perPrice;
// }

// //Delete the data
// function onDelete(td){
//     if(confirm('Do you want to delete this record?')){
//         row = td.parentElement.parentElement;
//         document.getElementById('storeList').deleteRow(row.rowIndex);
//     }
//     resetForm();
// }
//Reset the data
// function resetForm() {
//   document.getElementById('productCode').value = '';
//   document.getElementById('product').value = '';
//   document.getElementById('qty').value = '';
//   document.getElementById('perPrice').value = '';
// }
