***REMOVED***

function isOldEnough($age){
  return ($age >= 21 ? true : false);
***REMOVED***

function echoOldEnough($age){
  echo '<p>';
  echo 'You are, ' . $age . ". ";
  echo (isOldEnough($age) ? "You can enter the club." : "You cannot enter.");
  echo '</p>';
***REMOVED***
