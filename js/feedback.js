/*FEEDBACK.JS*/

function processFeedback () {

}

function validateForm () {
  var registerForm = document.getElementById("contact");
  var firstName = registerForm.firstName.value;
  var lastName = registerForm.lastName.value;
  var email = registerForm.email.value;
  var message = registerForm.message.value;
  var validate = true;

  if (!validateFirstName(firstName)) {
    document.getElementById("firstNameError").innerHTML = "Invalid First Name";
    validate = false;
  } else {
    document.getElementById("firstNameError").innerHTML = "";
  }
  if (!validateLastName(lastName)) {
    document.getElementById("lastNameError").innerHTML = "Invalid Last Name";
    validate = false;
  } else {
    document.getElementById("lastNameError").innerHTML = "";
  }
  if (!validateEmail(email)) {
    document.getElementById("emailError").innerHTML = "Invalid Email";
    validate = false;
  } else {
    document.getElementById("emailError").innerHTML = "";
  }
  if (!validateMessage(message)) {
    document.getElementById("messageError").innerHTML = "Invalid Message";
    validate = false;
  } else {
    document.getElementById("messageError").innerHTML = "";
  }
  return validate;
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

function validateMessage (message) {
  var pattern = /^[-'\w\s]+$/i;
  return (pattern.test(message) && (!empty(message)));
}


function empty (formValue) {
  if (formValue == null || formValue == ""){
    return true;
  } else {
    return false;
  }
}
