<?php

$conn = mysqli_connect("localhost", "root", "", "sparksbank");
if (!$conn) {
  die("Connection not established: " . mysqli_connect_error());
} else {

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $SenderAC = $_POST['Sender_Account_Number'];
    $RecieverAC = $_POST['Reciever_Account_Number'];
    $amount = $_POST['Amount'];


    $checkblcquery = "SELECT Balance FROM users where Account='$SenderAC'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['Balance'];

    if ($checkblc != NULL) {
      if ($ava_blc >= $amount) {
        $sql1 = "UPDATE users SET Balance= Balance-$amount WHERE Account='$SenderAC'";
        $sql2 = "UPDATE users SET Balance= Balance+$amount WHERE Account='$RecieverAC'";
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        if ($result1 && $result2) {
          echo '<script>alert("Amount Transfered Successfully!")</Script>';
        } else {
          echo '<script>alert(" Oops! Something went wrong!")</Script>';
        }
      } else {
        echo '<script>alert("Insufficient Balance")</Script>';
      }
    }
  }
}