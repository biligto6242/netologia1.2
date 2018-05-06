<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="x">
    <input type="submit">
</form>
<?php
$x=isset($_GET['x']) ? $_GET['x'] : 0;
$a=1;
$b=1;
while ($a<=$x) {
    if ($a == $x) {
        echo "задуманное число входит в числовой ряд";
        break;
    } else {
        $c = $a;
        $a += $b;
        $b = $c;
        };
        if ($a > $x){
        echo "задуманное число не входит в числовой ряд";
        break;
    }
}