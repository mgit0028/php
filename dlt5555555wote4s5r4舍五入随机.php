
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>大乐透随机{核心算法4舍五入拉伸算法，自修正拉伸算法}复合计算版</title>




<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("div").hide();
  });
  $("#show").click(function(){
    $("div").show();
  });
});

</script>



<body>


<h1  style=color:#888888>如果你点击“隐藏” 按钮，我将会消失。</>




<h1  style=color:#888888>如果你点击“显示” 按钮，我将会出现。</>



<div  style="display:none";>


<?php
/**
 * 生成0~1随机小数
 * @param Int  $min
 * @param Int  $max
 * @return Float
 */
function randFloat($min=0, $max=1){
  return $min + mt_rand()/mt_getrandmax() * ($max-$min);
}

// 例子，创建36个0~1随机小数
for($i=0; $i<36; $i++){
 
 echo "第".$i."=".randFloat().'<br>';

}


?>



</div>




<button id="hide"  style="font-size:35px;

color:#FF0000"  >隐藏前区</button>

<button id="show"  style="font-size:35px;


color:#FF0000"  >显示前区</button>



<h1 style=color:#888888>大乐透核心算法4舍五入关联修正版，0保留，4舍五入，自关联修正，0保留，可进位，可退位，――――――――<br>



</>



<br><hr>

<a href="dlt5555555wote4s5r.php" 

style="font-size:38px;">前区开始4舍5入</a>


<br><hr>

</body>

</html>





