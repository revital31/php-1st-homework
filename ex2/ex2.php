<?php

// פונקציה אסוציאטיבית
$info = array (
array('Revital' => 'Bl'),
array('Rom'=> 'M'),
array('Peter'=> 'Pen')
);

echo '<br/>';

function sayHello($FirstName, $LastName) {
    echo "Hello " . $FirstName . '  '  . $LastName .  "!" ; 
    echo '<br>';
}

echo '<br/>';
foreach($info as $personInfo) {
    foreach($personInfo as $FirstName => $LastName) {
        sayHello($FirstName, $LastName);
    }
   
}


?>