<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
<style>
body{
    font-family:  'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
div{
    
    text-align:center;
}
</style>
<div>
<p>this is not PHP</p>

   <?php
   // information found at https://www.youtube.com/watch?v=U10yvfIStx8
    echo "<h3>Hello there! this is PHP it's also  a string</h3>";
   ?>
    
   <p>this is also not PHP</p>
   <hr>
   <?php
   // information found at https://www.youtube.com/watch?v=atNrwSTB3-c
   echo "<p>some integers</p>";
    echo 10;
    echo 28;
   ?>
    <hr>
   <?php
   // information found at https://www.youtube.com/watch?v=atNrwSTB3-c
   echo "<p>some floats</p>";
    echo 10.5;
    echo 28.35;
    echo 1284.35276;
   ?>
    <hr>
<?php
// information found at https://www.youtube.com/watch?v=atNrwSTB3-c
   echo "<p> an Boolean</p>";
    $a = true;
    if ($a === true){
        echo "varible $a is true!";
    }
   
   ?>
    <hr>
    <?php
    //information found at https://www.youtube.com/watch?v=MoCJXlOqENk
    echo "<p> two arrays</p>";
    $data = array();
    $data[] = "Singalliath";
    $data[] = "Aldercroft";
    print_r($data);
    // method one
    echo "<br>";
    $data = array();
    array_push($data, "Drakion",2020,2021);
    print_r($data);
    //method two
    ?>
    <hr>
    <?php
    //information found at https://www.youtube.com/watch?v=MQslKOOmpls
    echo "<p> an object from an array</p>";
    $array = ['items' => ['Sword','Dagger','Axe']];
    
    $object = json_decode(json_encode($array));

    foreach($object->items as $item) {
        echo $item, ' , ';
    }
    ?>
    <hr>
    </div>
</body>
</html>