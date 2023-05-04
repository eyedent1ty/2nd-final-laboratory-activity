<?php
require './contacts.model.php';
?>

<form method="POST" action="">
  <div>
    <label for="name">Name</label>
    <input id="name" name="name" type="text" required />
  </div>

  <div>
    <label for="phone">Phone</label>
    <input id="phone" name="phone" type="text" required />
  </div>

  <div>
    <label for="address">Address</label>
    <input id="address" name="address" type="text" required />
  </div>

  <input type="submit" name="submit" />
</form>

<br />
<a href="http://localhost/final/laboratory-1/">Back to home page</a>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  addContact($name, $phone, $address);
  echo '<p>Succesfully Added</p>';
}

?>