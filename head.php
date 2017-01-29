<!DOCTYPE html>
<head>
  <meta charset = "utf-8">
  <link rel = 'stylesheet' type = 'text/css' href = 'group.css'>
</head>
  <title>
    Codex Books
  </title>
</head>
<body>

  <div class = "header">
    <h1>CODEX</h1>
    <h3>Computer books for students!<h3>
  </div>

  <div class = 'search'>
      <form action = "dataSearch.php" method = "POST">
          <input type = "search" name = "search" placeholder="Search">
          <input type = "submit" value = "Go" name = "submit">
      </form>
  </div>

    <p class = "register">
        <a href = "register.php">Sign in / Sign up</a>
    </p>

    <p class = "basket">
        <a href = "wishlist.php">
            <img src = "images/basket.jpg" alt = "basket"><br>Basket
        </a>
    </p>

    <p class = "wishlist">
        <a href = "wishlist.php">
            <img src = "images/wishlist.png" alt = "wishlist"><br>Wishlist
        </a>
    </p>

  <div class = "nav">
    <ul>
      <li>
        <a class="active" href="index.php">Home</a> </li>

      <li>
        <a href="dataSearch.php">Databases</a> </li>
      <li>
        <a href="dataSearch.php">Networking</a> </li>
      <li>
        <a href="dataSearch.php">Java</a> </li>
      <li>
        <a href="dataSearch.php">Systems</a> </li>
      <li>
        <a href="dataSearch.php">Web Design</a> </li>
      <li>
        <a href="dataSearch.php">Software Engineering</a> </li>
      <li>
        <a href="dataSearch.php">Problem Solving</a> </li>
      <li>
        <a href="dataSearch.php">Other</a> </li>
    </ul>
  </div>
