<?php

 class week{
    //1-100的和
    //第一种方式
    public function one(){
        $sum = 0;
        for ($i=1; $i <= 100; $i++) {
            $sum+=$i;
        }
        echo $sum;
    }
   //第二种方式
    public function two(){
        $sum = $i = 0;
        while($i<=100){
            $sum+=($i++);
        }
        echo $sum;
    }
    //第三种方式
   public function three(){
    $n=100;
    echo (1+$n)*($n/2);
   }

   //n的阶乘
   //递归实现
   // public function digui($n){

   // }

   //循环
   public function demo($n){
     if($n<=1){
        return 1;
     }

     echo demo($n-1)*$n;
   }


   //3
 }

     //回文
     $str = 'abcd123';
     $stra = array();
     $strb = array();
     $res = checkback($str);
   function checkback($str){

     for ($i=0; $i <strlen($str) ; $i++) {
        $stra[$i]=$str[$i];
     }
     $strb = array_reverse($stra);

     for ($i=0; $i<count($stra);$i++) {
         if($stra[$i]!=$strb[$i]){
           return 1;
           break;
         }
          return 2;
     }
      if($res==2){
        echo "yes";
      }else{
        echo "no";
      }
   }



 $obj = new week;
 $obj->one();
 echo "<hr>";
 $obj->two();
 echo "<hr>";
 $obj->three();
 echo "<hr>";
 $obj->demo();
 //
 //

 //定义类
 class person{
    public $name,$age;
 }

 //定义接口
 interface walk{
    public function foot();
 }
 //定义类并继承
 class student extends person implements walk{
    public function foot(){}
 }
 //实例化
 $obj1 = new student;
 $obj1->name = '名称1';
 $obj1->age = '17';

  $obj2 = new student;
 $obj2->name = '名称2';
 $obj2->age = '18';

  $obj3 = new student;
 $obj3->name = '名称3';
 $obj3->age = '19';

  $obj4 = new student;
 $obj4->name = '名称4';
 $obj4->age = '12';

  $obj5 = new student;
 $obj5->name = '名称5';
 $obj5->age = '11';

  $obj6 = new student;
 $obj6->name = '名称6';
 $obj6->age = '16';

  $obj7 = new student;
 $obj7->name = '名称7';
 $obj7->age = '15';

  $obj8 = new student;
 $obj8->name = '名称8';
 $obj8->age = '20';



 $data[$obj1->age]=$obj1->name;
 $data[$obj2->age]=$obj2->name;
 $data[$obj3->age]=$obj3->name;
 $data[$obj4->age]=$obj4->name;
 $data[$obj5->age]=$obj5->name;
 $data[$obj6->age]=$obj6->name;
 $data[$obj7->age]=$obj7->name;
 $data[$obj8->age]=$obj8->name;
 $data = aaa($data);
 function aaa($arr){
    krsort($arr);
    // high($arr);
    foreach ($arr as $val) {
        return $val;
    }
 }

?>