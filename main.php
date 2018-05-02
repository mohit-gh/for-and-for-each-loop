<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$arr = ['mohit','sandeep','kd','ilyaqat','manoj'];

foreach ($arr as $jymmemb) {
	echo $jymmemb;
	echo '<br/>';
}
Output:
        mohit
        sandeep
        kd
        ilyaqat
        manoj
        
-----------------------------------------------------------------------------------------------------------------------------------
		
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$arr = ['mohit','sandeep','kd','ilyaqat','manoj'];

for($i=0;$i<count($arr);$i++) {
	echo $arr[$i];
	echo '<br>';
}

Output:
        mohit
        sandeep
        kd
        ilyaqat
        manoj
