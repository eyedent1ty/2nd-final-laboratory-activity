<?php
require './connection.php';
require './contacts.model.php';

$id = $_GET['id'];

$currentContact = getContactById($id);

$currentContactId = $currentContact['id'];
$currentContactName = $currentContact['name'];
$currentContactPhone = $currentContact['phone'];
$currentContactAddress = $currentContact['address'];
?>

<?php
if (isset($_POST['submit'])) {
  $currentContactName = $_POST['name'];
  $currentContactPhone = $_POST['phone'];
  $currentContactAddress = $_POST['address'];

  editContact($currentContactId, $currentContactName, $currentContactPhone, $currentContactAddress);
}
?>

<?php if (isset($id)) : ?>
  <form method="POST" action="">
    <div>
      <label for="name">Name</label>
      <?php echo "<input id='name' name='name' type='text' required value=$currentContactName />" ?>
    </div>

    <div>
      <label for="phone">Phone</label>
      <?php echo "<input id='phone' name='phone' type='text' required value=$currentContactPhone />" ?>
    </div>

    <div>
      <label for="address">Address</label>
      <?php echo "<input id='address' name='address' type='text' required value=$currentContactAddress />" ?>
    </div>

    <input type="submit" name="submit" />
  </form>
<?php endif; ?>

<br />
<a href="http://localhost/final/laboratory-1/">Go back to home page</a>