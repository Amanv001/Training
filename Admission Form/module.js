// Import and Intilaization Firebase
// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
import { getDatabase, ref, set, child, update, remove } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-database.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyB-BjJD81VAZHPnZmS_Pkjk6GXqvuWT2FI",
    authDomain: "projectadmission-aac6b.firebaseapp.com",
    databaseURL: "https://projectadmission-aac6b-default-rtdb.firebaseio.com",
    projectId: "projectadmission-aac6b",
    storageBucket: "projectadmission-aac6b.appspot.com",
    messagingSenderId: "961229194376",
    appId: "1:961229194376:web:6aace9937f8bb6ef090b3d"
};

const app = initializeApp(firebaseConfig);
const database = getDatabase(app);

// Intialise Firebase

let name, email, add, ph;

function input() {
    name = document.getElementById('.InputName').value;
    email = document.getElementById('.inputEmail').value;
    add = document.getElementById('.inputAddress').value;
    ph = document.getElementById('inputPhone').value;
}

function insert() {
    set(ref(db, "Students/" + email), {
        Name: name,
        Email: email,
        Address: add,
        Phone: ph
    })
    //     .then(() => {
    //         alert("data stored successfully");
    //     })
    //     .catch((error) => {
    //         alert("data failure, " + error);
    //     })
}

// addStudent
document.getElementById('.addStudent').onClick = function () {
    input();
    insert();


    // firebase.database.ref('student/' + email).set({
    //     Name: name,
    //     Email: email,
    //     Address: add,
    //     Phone: ph
    // });
}






// addStudent.addEventListener('click', (e) => {
//     name = document.getElementById('.InputName').value;
//     email = document.getElementById('.InputEmail').value;
//     add = document.getElementById('.InputAddress').value;
//     ph = document.getElementById('InputPhone').value;

//     set(ref(database, 'Students/' + email), {
//         Name: name,
//         Email: email,
//         Address: add,
//         Phone: ph
//     });
//     alert('Saved')
// });