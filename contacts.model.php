<?php 
  require './connection.php';

  function getContacts() {
    global $connection;
    $sql = 'SELECT * FROM tblContact';
    $result = mysqli_query($connection, $sql);
  
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($rows, $row);
    }
    
    return $rows;
  }

  function getContactById($id) {
    global $connection;
    $sql = "SELECT * FROM tblContact WHERE tblContact.id=$id";
    $result = mysqli_query($connection, $sql);

    return mysqli_fetch_assoc($result);
  }

  function addContact($name, $phone, $address) {
    global $connection;
    $sql = "INSERT INTO tblContact (name, phone, address) VALUES ('$name', '$phone', '$address')";
    mysqli_query($connection, $sql);
  }

  function deleteContactById($id) {
    global $connection;
    $sql = "DELETE FROM tblContact WHERE tblContact.id=$id";

    mysqli_query($connection, $sql);
  }

  function editContact($id, $name, $phone, $address) {
    global $connection;
    $sql = "UPDATE tblContact SET name='$name', phone='$phone', address='$address' WHERE id=$id";

    mysqli_query($connection, $sql);
  }

  $contacts = getContacts();
?>