<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
<script src="jquery-1.10.2/jquery.min.js"></script>
<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<script src=></script>
​
<div data-role="page">
  <div data-role="header">
  <h1>input输入版传值随机大乐透版</h1>
  </div>
​
  <div data-role="main" class="ui-content">
    <form method="post" action="dlt_input_text23456789.php">
      <div class="ui-field-contain">


      <input type="text" name="c[]" id="fullname" value="请您记下，自动回收码，按顺序全部输入。">       
    


      <label for="fullname"> 输入到input传值随机：提交后可反复组合。</label>

     

 <input type="text" name="a[]" id="fullname" value="">   


        <label for="fullname">请输入前区第1个：</label>
       

 <input type="text" name="a[]" id="fullname" value="">      


    
        <label for="bday">请输入前区第2个：</label>


        <input type="text" name="a[]" id="bday" value="">



         <label for="email">请输入前区第3个:

</label>

        <input type="text" name="a[]" id="email" value="">


<label for="fullname">请输入前区第4个：</label>
       

   <input type="text" name="a[]" id="bday" value="">
 
        <label for="bday">请输入前区第5个：</label>
     
 <input type="text" name="a[]" id="email" value="">


        <label for="email">请输入前区    第6个:</label>
       

 <input type="text" name="a[]" id="fullname" value="">      


<label for="fullname">请输入前区第7个：</label>

       

  <input type="text" name="a[]" id="bday" value="">
 

        <label for="bday">请输入前区第8个：</label>

      

  <input type="text" name="a[]" id="email" value="">

        <label for="email">请输入前区    第9个:</label>

      

 <input type="text" name="a[]" id="fullname" value="">

<label for="fullname">请输入前区第10个：</label>
            

  <input type="text" name="a[]" id="bday" value="">

  
        <label for="bday">请输入前区第11个：</label>

      


 <input type="text" name="a[]" id="email" value="">


        <label for="email">请输入前区  第12个:</label>

       

  <input type="text" name="a[]" id="fullname" value="">       


<label for="fullname">请输入前区第13个：</label>

      

   <input type="text" name="a[]" id="bday" value="">



        <label for="bday">请输入前区第14个：</label>

     

 <input type="text" name="a[]" id="fullname" value="">       



        <label for="email">请输入前区  第15个:</label>

       

 <input type="text" name="a[]" id="email" value="">



<label for="fullname">请输入前区第16个：</label>
       

   <input type="text" name="a[]" id="bday" value="">


        <label for="bday">请输入前区第17个：</label>

     


 <input type="text" name="a[]" id="email" value="">


        <label for="email">请输入前区  第18个:</label>

       


<hr><br>
       
  <input type="text" name="b[]" id="fullname" value="">       

  <label for="fullname">请输入后区第1个：</label>

      
  <input type="text" name="b[]" id="bday" value="">

        <label for="bday">请输入后区第2个：</label>


  <input type="text" name="b[]" id="email" value="">

      
        <label for="email">请输入后区    第3个:</label>
      
   <input type="text" name="b[]" id="fullname" value="">      

<label for="fullname">请输入后区第4个：</label>
      

 <input type="text" name="b[]" id="bday" value="">

        <label for="bday">请输入后区第5个：</label>
       

  <input type="text" name="b[]" id="email" value="">


        <label for="email">请输入后区    第6个:</label>
      



      </div>
      <input type="submit" data-inline="true" value="提交">





<?php 

error_reporting(E_ALL^E_NOTICE^E_WARNING);      // php关闭错误报告



echo "打印出――――>输入的前区号码";

echo "<br>";


print_r($_POST['a']);   

echo "<hr>";


$a=$_POST["a"];

//["a"]是数组名称



$result=array_flip($a);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值

echo "<hr>";

echo "打印出――――>随机后的前区号码";


echo "<br>";


print_r(array_rand($result,5));   


//         以下是后区代码



$b=$_POST["b"];



$result2=array_flip($b);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值

echo "<hr>";

echo "打印出――――>随机后的后区号码";


echo "<br>";


print_r(array_rand($result2,2));   




?>  



<?php 

error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告




//["a"]是数组名称


echo "<hr>";



echo "打印移出后―――>随机的前区号码";


echo "<br>";




$arr = $_POST['a'];   



$result=array_flip($arr);//交换数组的键和值


shuffle($arr);

   
$newarr = array_splice($arr,0,5);  

print_r($newarr);

echo "<hr>";



//         以下是后区代码


echo "<hr>";

echo "打印移出后―――>随机的后区号码";

echo "<br>";


$arr2 = $_POST['b'];   



$result2=array_flip($arr2);//交换数组的键和值

shuffle($arr2);


  
$newarr3 = array_splice($arr2,0,2);  

print_r($newarr3);





?>  



    </form>
  </div>
</div>
​
</body>
</html>
​
