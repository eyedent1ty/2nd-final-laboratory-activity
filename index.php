<?php
require './contacts.model.php';
?>

<table border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>phone</th>
      <th>address</th>
      <th>actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contacts as $contact): ?>
      <tr>
        <td><?php echo $contact['id'] ?></td>
        <td><?php echo $contact['name'] ?></td>
        <td><?php echo $contact['phone'] ?></td>
        <td><?php echo $contact['address'] ?></td>
        <td>
          <?php 
            $id = $contact['id'];
            echo "<a href='http://localhost/final/laboratory-1/editContact.php?id=$id'>Edit</a>" 
          ?>
          |
          <?php 
            $id = $contact['id'];
            echo "<a href='http://localhost/final/laboratory-1/deleteContact.php?id=$id'>Delete</a>"
          ?>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br />

<a href="http://localhost/final/laboratory-1/addContact.php">Add Contact</a>


