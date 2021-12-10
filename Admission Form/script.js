function validateForm() {
    let name = document.forms['myform']['name'].value;
    if (name == "") {
        alert("Name cannot be empty");
        return false;
    }

    let email = document.forms['myform']['email'].value;
    if (email != "") {
        // if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

        // } else {
        //     alert("Please enter a valid Email-ID");
        //     return false;
        // }
    } else {
        alert("Email cannot be empty");
        return false;
    }

    let phone = document.forms['myform']['phone'].value;
    if (phone == "") {
        alert("Phone cannot be empty");
        return false;
    }

    let place = document.forms['myform']['place'].value;
    if (place == "") {
        alert("Place cannot be empty");
        return false;
    }

}