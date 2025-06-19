<?php
date_default_timezone_set('Asia/Tokyo');
$d=date("Y/m/d H:i:s");
printf("現在、%s\n",$d);
echo "<br/>";
$today=date('Y/m/d',strtotime('1day'));
printf("明日は%sです。\n",$today);
echo "<br/>";
$yestaday=date('Y/m/d',strtotime('-1day'));
printf("昨日は%sです。\n",$yestaday);
echo "<br/>";
$week=date('Y/m/d',strtotime('7day'));
printf("一週間後は%sです。\n",$week);
echo "<br/>";
$anyday=date("y/m/d",strtotime('+3month'));
printf("三か月後は%sです。\n",$anyday);
echo "<br/>";
 $date1='now';
 $date2='now  3 month';
 echo '３か月後までの日にちは'.((strtotime($date2) - strtotime($date1)) / 86400).'日です。';
?>