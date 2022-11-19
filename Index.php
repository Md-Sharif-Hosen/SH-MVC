<?php
include_once("./vendor/autoload.php");
include_once('./App/helper.php');
include_once("./routes/web.php");



// class caculation{
//     public $result=0;
//     public function __construct($number)
//     {
//         $this->result +=$number;
     
//     }
//     public function add($number){
//         $this->result +=$number;
//         return $this;
//     }
//         public function sub($number){
//             $this->result -=$number;
//             return $this;
//         }   

//         public function mul($number){
//             $this->result *=$number;
//             return $this;
//         }  
// }
// $cals= new caculation(10);
// $cals->add(5)->sub(2)->mul(2);  

// dd($cals);

class User{
    public $info=[
        'name'=>null,
        'address'=>null,
        'country'=>null,
        'contact'=>null,
    ];
    public function name($name)
    {
        $this->info["name"]=$name;
        return $this;
    }
    public function address($address)
    {
        $this->info["address"]=$address;
        return $this;
    }
    public function country($country)
    {
        $this->info["country"]=$country;
        return $this;
    }
    public function contact($contact)
    {
        $this->info["contact"]=$contact;
        return $this;
    }
}
$student  =new User();
$student->name('sharif')->contact('01753553')->address('dhaka')->country('bd');

$student2  =new User();
$student2->name('sharif3')->contact('017535f53')->address('dhaka')->country('bd');

dd($student,$student2);

// dd(
// request()->district, 
// $_REQUEST['class']
// );

?>