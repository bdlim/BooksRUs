/*SIGNUPFORM.JS*/

function processRegister () {

}

function validateForm () {
  var registerForm = document.getElementById("signUpForm");
  var firstName = registerForm.firstName.value;
  var lastName = registerForm.lastName.value;
  var email = registerForm.email.value;
  var password = registerForm.password.value;

  if (!validateFirstName(firstName)) {
    alert("Invalid First Name");
    return false;
  } else if (!validateLastName(lastName)) {
    alert("Invalid Last Name");
    return false;
  } else if (!validateEmail(email)) {
    alert("Invalid Email");
    return false;
  } else if (!validateEmail(password)) {
    alert("Invalid Password");
    return false;
  } else {
    alert("Everything looks good!");
    return true;
  }
}

function validateFirstName (firstName) {
  var pattern = /^[-'\w\s]+$/i;
  return (pattern.test(firstName) && (!empty(firstName)));
}

function validateLastName (lastName) {
  var pattern = /^[-'\w\s]+$/i;
  return (pattern.test(lastName) && (!empty(lastName)));
}

function validateEmail (email) {
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return (pattern.test(email) && (!empty(email)));
}

function validatePassword (password) {
  var pattern = /^[-'\w\s]+$/i;
  return (pattern.test(password) && (password.length >= 6));
}


function empty (formValue) {
  if (formValue == null || formValue == ""){
    return true;
  } else {
    return false;
  }
}
