<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <title>Document</title>
  </head>
  <body>
    <ul>
      <?php
        foreach ($names as $name) {
          echo "<li>$name</li>";
        }
      ?>

      <?php foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
