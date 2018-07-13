<?php
date_default_timezone_set('Asia/Singapore');
//$datetime_current = date('Y-m-d H:i');
$datetime_current = date('2018-03-27 00:01:00');
$date_current = date('Y-m-d',strtotime("$datetime_current"));
$date_current_next = date('Y-m-d',strtotime("+24 hours", strtotime($datetime_current)));
$hr_current=date('H',strtotime("$datetime_current"));
$hr_current_next=date("H", strtotime("+1 hours", strtotime($datetime_current)));
//$datecheck1=date('Y-m-d H:i:s', strtotime("$date_current $hr_current:00"));
$datecheck1=date('Y-m-d H:i:s', strtotime("$date_current $hr_current:15"));
$datecheck2=date('Y-m-d H:i:s', strtotime("$date_current $hr_current:30"));
$datecheck3=date('Y-m-d H:i:s', strtotime("$date_current $hr_current:45"));
$datecheck4=date('Y-m-d H:i:s', strtotime("$date_current $hr_current_next:00"));
$datecheck5=date('Y-m-d H:i:s', strtotime("$date_current $hr_current_next:15"));
$datecheck6=date('Y-m-d H:i:s', strtotime("$date_current $hr_current_next:30"));
$datecheck7=date('Y-m-d H:i:s', strtotime("$date_current $hr_current_next:45"));
$datecheck8=date('Y-m-d H:i:s', strtotime("$date_current_next $hr_current_next:00"));
$datecheck9=date('Y-m-d H:i:s', strtotime("$date_current_next $hr_current_next:15"));
$datecheck10=date('Y-m-d H:i:s', strtotime("$date_current_next $hr_current_next:30"));
$datecheck11=date('Y-m-d H:i:s', strtotime("$date_current_next $hr_current_next:45"));
echo $datetime_current."<br>";
echo $datecheck2."<br>";

if($datetime_current>$datecheck1)
{
	echo "aa";
	$diff1=10000; 
}
else
{
	echo "bb";
	$diff1=getDiffMinutes($datetime_current,$datecheck1);
}
if($datetime_current>$datecheck2)
{
	echo "cc";
	$diff2=10000; 
}
else
{
	echo "dd";
	$diff2=getDiffMinutes($datetime_current,$datecheck2); 
}
if($datetime_current>$datecheck3)
{
	$diff3=10000; 
}
else
{
	$diff3=getDiffMinutes($datetime_current,$datecheck3); 
}
if($datetime_current>$datecheck4)
{
	$diff4=10000; 
}
else
{
	$diff4=getDiffMinutes($datetime_current,$datecheck4); 
	//echo $diff4;
}
if($datetime_current>$datecheck5)
{
	$diff5=10000; 
}
else
{
	$diff5=getDiffMinutes($datetime_current,$datecheck5);
}
if($datetime_current>$datecheck6)
{
	$diff6=10000; 
}
else
{ 
	$diff6=getDiffMinutes($datetime_current,$datecheck6); 
}
if($datetime_current>$datecheck7)
{
	$diff7=10000; 
}
else
{
	$diff7=getDiffMinutes($datetime_current,$datecheck7); 
}
if($datetime_current>$datecheck8)
{
	$diff8=10000; 
}
else
{
$diff8=getDiffMinutes($datetime_current,$datecheck8); 
}
if($datetime_current>$datecheck9)
{
	$diff9=10000; 
}
else
{
	$diff9=getDiffMinutes($datetime_current,$datecheck9); 
}
if($datetime_current>$datecheck10)
{
	$diff10=10000; 
}
else
{
	$diff10=getDiffMinutes($datetime_current,$datecheck10); 
}
if($datetime_current>$datecheck11)
{
	$diff11=10000; 
}
else
{
	$diff11=getDiffMinutes($datetime_current,$datecheck11); 
}

//echo $diff2."<br>";
$result=min($diff1,$diff2,$diff3,$diff4,$diff5,$diff6,$diff7,$diff8,$diff9,$diff10,$diff11);
echo $result."<br>";

if($result==$diff1)
{
	$datechosen=$datecheck1;
}
else if($result==$diff2)
{
	$datechosen=$datecheck2;
}
else if($result==$diff3)
{
	$datechosen=$datecheck3;
}
else if($result==$diff1)
{
	$datechosen=$datecheck1;
}
else if($result==$diff4)
{
	$datechosen=$datecheck4;
}
else if($result==$diff5)
{
	$datechosen=$datecheck5;
}
else if($result==$diff6)
{
	$datechosen=$datecheck6;
}
else if($result==$diff7)
{
	$datechosen=$datecheck7;
}
else if($result==$diff8)
{
	$datechosen=$datecheck8;
}
else if($result==$diff9)
{
	$datechosen=$datecheck9;
}
else if($result==$diff10)
{
	$datechosen=$datecheck10;
}
else if($result==$diff11)
{
	$datechosen=$datecheck11;
}

echo $datechosen;

function getDiffMinutes($dt1,$dt2) 
{
    $t1 = new DateTime($dt1);
	$t2 = new DateTime($dt2);
			
	$interval = date_diff($t2,$t1);
    $minutes    = $interval->i;
	return $minutes;			
}

?>