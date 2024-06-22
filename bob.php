<?php
$x= array('ahmed','pop','bob');
$y=['ehab','doList'];
$z=array('','');
$dob=array('big','over',33,'end',[33]);
$xToDegree=array(3=>'ahmed',80=>'pop',93=>'bob');

$degreesOfSTD = ['ahmed' => 50, 'mohamed' => 256,'sayed' => 4,'gamal' => 7];
$degreesOfSTD[] =55;
$classes = [
    ['a' , 'b' , 'c'] ,
    ['d' , 'e' , 'f'] ,
    ['g' , 'h' , 'i'] ,
  ];
  $statusOfclient='user';
  $logged_in=true;

  $status = $logged_in===true ?(  $statusOfclient==='user' ?
                                  '<button>logout</button>':
                                  '<button>logout</button><button>dashboard</button>'  )
                                  :'<button>login</button>';

  $s1=true;
  $s2=true;
  $s3=false;

  var_dump((s1&&s2)||(s1||s3));
  echo "im ehab";
  

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>