<?php

class aptech {
    public $name , $age; 
    public function __construct($n ,$a){
        $this->name =$n;
        $this->age =$a;
        echo "name: $this->name and age: $this->age <br>";
    }
}
$obj = new aptech ("ali" , 12);
$obj = new aptech ("rohan" , 32);
$obj = new aptech ("khan" , 22);


// class affan {
//     public $name , $age;

//     function std (){
//         echo $this->name , $this->age;
//     }
//     function std1 (){
//         echo'1111';
//     }
// }

// if(isset($_POST['btn'])){
//     $name = $_POST['name'];
//     $age = $_POST['age'];
// }
// $obj = new affan;
// $obj->name=$name;
// $obj->age=$age;
// $obj->std();
?>

<form action="" method="post">
    <input type="text" placeholder="name"  name="name">
    <label for="text"></label>

    <input type="text" placeholder="age" name="age">
    <label for="text"></label>
    
    <input type="submit"  name="btn">
</form>
