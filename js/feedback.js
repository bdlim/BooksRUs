/*FEEDBACK.JS*/

function validateForm () {
  var feedbackForm = document.getElementById("contact");
  var salutation = feedbackForm.salutation.value;
  var firstName = feedbackForm.firstName.value;
  var lastName = feedbackForm.lastName.value;
  var email = feedbackForm.email.value;
  var message = feedbackForm.message.value;
  var validate = true;

  if (!validateSalutation(salutation)) {
    document.getElementById("salutationError").innerHTML ="Invalid Salutation";
    validate = false;
  } else {
    document.getElementById("salutationError").innerHTML = "";
  }
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

function validateSalutation (salutation) {
  return (salutation != " ");
}

function validateFirstName (firstName) {
  return validateText(firstName);
}

function validateLastName (lastName) {
  return validateText(lastName);
}

function validateEmail (email) {
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return (pattern.test(email) && (!empty(email)));
}

function validateMessage (message) {
  return (!empty(message));
}

function validateText (text) {
  var pattern = /^[-'\w\s]+$/i;
  return (pattern.test(text) && (!empty(text)));
}


function empty (formValue) {
  if (formValue == null || formValue == ""){
    return true;
  } else {
    return false;
  }
}
