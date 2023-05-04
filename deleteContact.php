<?php
require './contacts.model.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Delete Contact</title>
</head>

<body>
  <?php
  $id = $_GET['id'];

  if (isset($id)) {
    deleteContactById($id);
    echo '<p>Contact Successfully Deleted<p>';
  }
  ?>
  <br />
  <a href="http://localhost/final/laboratory-1/">Go back to home page</a>
</body>

</html>