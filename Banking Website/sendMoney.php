<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Send Money - The Sparks Bank</title>

  <!-- Link Favicon -->
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
  <!-- Link CSS File  -->

  <style>
    <?php include 'css/style.css'; ?><?php include 'css/sendMoney.css'; ?>
  </style>


  <!-- Link Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome licensed  -->
  <script src="https://kit.fontawesome.com/5b12999530.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="logo">
      <img src="img/logo.png" class="logo" />
    </div>
    <ul>
      <li class="link"><a href="index.php" target="_blank">HOME</a></li>
      <li class="link"><a href="about.php" target="_blank">ABOUT ME</a></li>
      <li class="link"><a href="sendMoney.php">SEND MONEY</a></li>
      <li class="link"><a href="allUsers.php" target="_blank">ALL USERS</a></li>
      <li class="link"><a href="contact.php" target="_blank">CONTACT ME</a></li>
    </ul>
  </nav>

  <div class="contact">
    <h1>Send Money</h1>
    <form action="transfer.php" method="post" enctype="multipart/form-data">
      <input type="number" name="Sender_Account_Number" onfocus="this.placeholder = ''" placeholder="Sender's Account Number" onblur="this.placeholder = 'Sender\'s Account Number'" required>

      <input type="number" name="Amount" onfocus="this.placeholder = ''" placeholder="Amount To Transfer" onblur="this.placeholder = 'Amount To Transfer'" min="0" required>

      <input type="number" name="Reciever_Account_Number" onfocus="this.placeholder = ''" placeholder="Reciever's Account Number" onblur="this.placeholder = 'Reciever\'s Account Number'" required>

      <input type="submit" name="Submit" class="btn" value="Send Money" />
    </form>
  </div>
  <footer><small>&copy; Copyright 2022, Priyansh Patel</small></footer>
</body>

</html>