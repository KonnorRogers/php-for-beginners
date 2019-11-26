<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>
      <?php
        $name = htmlspecialchars($_GET['name']);
        echo "Hello, " . $name;
      ?>
    </h1>
  </header>
</body>
</html>
