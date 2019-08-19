<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <title>Document</title>
  </head>
  <body>
    <ul>
      ***REMOVED***
        foreach ($names as $name) {
          echo "<li>$name</li>";
        ***REMOVED***
      ?>

      ***REMOVED*** foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
      ***REMOVED*** endforeach; ?>
    </ul>
  </body>
</html>
