<?php

  $G= '33';
  $text ='Ehab';

  echo 'hi im '. $text .'. and im a well known developer in the industry ';
  echo 'im living my golden era in my '. $G .'year old ';
  echo "<br>";
  // case sensitive
  $s=33;
  $S=44;
  echo $s."<br>";
  echo $S."<br>";

  // php assign by value as a default
  // php is a loosely typed lang
  $mana= 360;
  $Q = $mana;
  $mana=140;
  
  echo $Q."<br>";
  echo $mana."<br>";

    // single line / doc block/* */
    /*
    *
    *
    *
    */
    
    $myName='Ehab'; $myLastName='Gobran';
    echo $myName."<br>";
    echo '$Myname'."<br>";
    echo 'my name is $myName $myLastName'."<br>";
    echo "my name is $myName $myLastName"."<br>";
    echo "my name is {$myName} {$myLastName}"."<br>";
    echo 'my name is {$myName} {$myLastName}'."<br>";

    define("database","const");
    echo database;
    // database = "123";  throw an error

    function printed()
    {
      global $first;
      echo $first;
    }
    printed();
     
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p>ehab</p>
    
</body>
</html>