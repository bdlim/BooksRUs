/*LOGINFORM.JS*/

function processSignOn () {

}

function validateForm () {
  var signOnForm = document.getElementById("logInForm");
  var email = signOnForm.email.value;
  var password = signOnForm.password.value;
  validate = true;

  if (!validateEmail(email)) {
    document.getElementById("emailError").innerHTML = "Invalid Email";
    validate = false;
  } else {
    document.getElementById("emailError").innerHTML = "";
  }
  if (!validatePassword(password)) {
    document.getElementById("passwordError").innerHTML = "Invalid Password";
    validate = false;
  } else {
    document.getElementById("passwordError").innerHTML = "";
  }
  return validate;
}

function validateEmail (email) {
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return (pattern.test(email) && (!empty(email)));
}

function validatePassword (password) {
  var pattern = /^[-'\w\s]+$/i;
  // FURTHER VALIDATION NEEDED
  return (pattern.test(password) && (password.length >= 6));
}

function empty (formValue) {
  if (formValue == null || formValue == ""){
    return true;
  } else {
    return false;
  }
}
