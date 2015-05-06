/*ORDERFORM.JS*/

function validateOrder () {
  var orderForm = document.getElementById("orderForm");
  var motherQuantity = orderForm.motherQuantity.value;
  var brownBearQuantity = orderForm.brownBearQuantity.value;
  var chickaQuantity = orderForm.chickaQuantity.value;
  var corduroyQuantity = orderForm.corduroyQuantity.value;
  var greenEggsQuantity = orderForm.greenEggsQuantity.value;
  var holesQuantity = orderForm.holesQuantity.value;
  var peachQuantity = orderForm.peachQuantity.value;
  var givingTreeQuantity = orderForm.givingTreeQuantity.value;
  var hungryCaterpillarQuantity = orderForm.hungryCaterpillarQuantity.value;
  var sidewalkEndsQuantity = orderForm.sidewalkEndsQuantity.value;

  var books = [motherQuantity, brownBearQuantity, chickaQuantity, greenEggsQuantity, holesQuantity, peachQuantity, givingTreeQuantity, hungryCaterpillarQuantity, sidewalkEndsQuantity];

  var booksOrder = 0;

  for (i = 0; i < books.length; i++) {
    booksOrder += Number(books[i]);
  }

  if (booksOrder > 0){
    document.getElementById("emptyOrder").innerHTML = "";
    return true;
  } else {
    document.getElementById("emptyOrder").innerHTML = "Error! Order is empty!";
    return false;
  }
}
