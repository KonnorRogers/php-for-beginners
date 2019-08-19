<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2rem;
      text-align: center;
    ***REMOVED***
  </style>
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
