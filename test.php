<?php
//echo "korea";
//echo 5-9;
//var_dump(1234);
//var_dump(6.1);
//echo "Hello World";
echo var_dump(1234);
echo "<br/>";
echo var_dump("1234");
echo "<br/>";
echo "hello"."   "."   world";
echo "<br/>";
//문자열출력시에는 작은 따옴표로 묶는다
echo '그는 "안녕하세요" 라고 말했다';
echo "<br/>";
//역슬래시로 쌍따옴표 중간을 처리
echo "그는 \"안녕하세요\" 라고 \n말했다";
echo "<br/>";
$a=1;
echo $a+1;
echo "<br/>"; #for retuen html tag
$a=2;
// echo와 print 는 같은 명령어
//과 #은 동일한 의미의 주석처리 
//긴문장의 주석의 시작과 끝은 /*주석처리하고 싶은 내용 */ 으로 처리
print $a+1;

echo "<br>";
$first = "coding";
echo $first." everybody!";
echo "<br>";
echo "<br>";
echo "<br>";



$a = 100;
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10 ;    
print $a.'<br />';

echo "10>=20 : ";
var_dump(10>=20);	#false
echo '<br />';
echo "10>=1 : ";
var_dump(10>=1);	#true
echo '<br />';
echo '10>=10 : ';
var_dump(10>=10);	#true
echo "<br>";

//echo $_GET['id'];
echo "<br>";
echo "<br>";

echo "10>20 : ";
var_dump(10>20);           #false
echo '<br />';
echo "10>1 : ";
var_dump (10>1);           #true
echo '<br />';
echo '10>10 : ';
var_dump(10>10);   #false


echo "<br>";
?>

<?php
$grades = [];
$grades['egoing'] = 10;
$grades['k8805'] = 6;
$grades['sorialgi'] = 80;
var_dump($grades);
echo "<br>";
?>

<?php
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
echo $grades['sorialgi'];
echo "<br>";
?>

<?php
$grades = array('egoing' => 10, 'k8805' => 6, 'sorialgi'=> 70);
foreach($grades as $key => $value){
    echo "key: {$key} value:{$value}<br />";
}
echo "<br>";
?>