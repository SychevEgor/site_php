<link href="Main.css" rel="stylesheet" type="text/css">
<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']='/razdel_1/';
$array_menu[$i++]['name']='О нас';

$array_menu[$i]['url']='/razdel_2/';
$array_menu[$i++]['name']='Котики';



$array_menu[$i]['url']='/razdel_N/';
$array_menu[$i++]['name']='Название раздела N';

echo "<ul>\n";
for ($i=0;$i<count($array_menu);$i++)
{
       echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>