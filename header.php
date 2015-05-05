<!-- HEADER.PHP -->

<div id="header">
  <a href="index.php"><img src="img/iconBook.jpg" alt="Books R Us Logo"/></a>
  <a href="index.php"><h1>Books R Us</h1></a>
  <a href="signUp.php" class="signUp"><h3>Sign Up</h3></a>
  <a href="logIn.php" class="logIn"><h3>Log In</h3></a>
</div>
<div id="navBar" onmouseout="hide()">
  <ul class=menuItems>
    <li>
      <a href="index.php" onmouseover="show(`m1`)">Home</a>
      <div id="m1" onmouseover="show(`m1`)">
        <a href="about.php">About Us</a>
      </div>
    </li>
    <li>
      <a href="catalogue.php" onmouseover="show(`m2`)">Catalogue</a>
      <div id="m2" onmouseover="show(`m2`)">
        <a href="catalogue.php">All Books</a>
        <a href="topSellers.php">Top Sellers</a>
        <a href="booksByAge.php">Books By Age</a>
      </div>
    </li>
    <li>
      <a href="contact.php" onmouseover="show(`m3`)">Contact Us</a>
    </li>
  </ul>
</div>
