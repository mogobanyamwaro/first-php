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
    private $age ;

    public function firstName($info){
        $this->info = $info;

    }


    
    
}
$object = new NewClass();
$object->firstName('douglasOkee');
echo $object->info;

// var_dump($object)


?>