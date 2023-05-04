<?php
require './contacts.model.php';
?>

<?php
$id = $_GET['id'];

if (isset($id)) {
  deleteContactById($id);
  echo '<p>Contact Successfully Deleted<p>';
}
?>
<br />
<a href="http://localhost/final/laboratory-1/">Go back to home page</a>