<?php
if(isset($_REQUEST['username'])){
    echo "Hello" . $_REQUEST['username'];
}

function myFunction(){
    echo "hello is douglas mogoba";
}
// myFunction();

class NewClass{
    // properties
    public $info ;
    public $eyeColor ;
    public $age ;

    public function __construct($info,$eyeColor,$age){
        $this->info = $info;
        $this->eyeColor = $eyeColor;
        $this-> age = $age;
    }

    public function firstName($info){
        $this->info = $info;

    }


    
    
}
$object = new NewClass('this is my name','blue',24);
// $object->firstName('douglasOkee');
echo $object->info;
echo $object->eyeColor;
echo $object->age;
$object.firstName('helllllooo');


// var_dump($object)


?>