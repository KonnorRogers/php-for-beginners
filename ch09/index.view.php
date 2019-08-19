<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <h1> Task for the day </h1>
    <ul>
      ***REMOVED*** foreach ($task as $key => $value) : ?>
        <li>
          <!-- Uppercase first letter of $key -->
          <strong><?= ucwords($key); ?>: </strong>

          <!-- if $task['completed'] -->
          ***REMOVED*** if ($key == 'completed') {
            // Set to 'Completed' if true
            // Set to 'Incomplete' if false
            $value = ($value) ? '&#9989' : 'Incomplete';
          ***REMOVED***; ?>

          <!-- Print $value -->
          <?= $value; ?>
        </li>
      ***REMOVED*** endforeach; ?>
    </ul>
  </body>
</html>
