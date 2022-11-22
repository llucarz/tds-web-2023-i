<?php
//$content=file_get_contents('example.yaml');
//$yamlContent=yaml_parse($content);
$yamlContent=yaml_parse_file('example.yaml');
//echo '<pre>'.print_r($yamlContent,true).'</pre>';

$menu=$yamlContent['menu'];
//echo "<ul>";
echo "<h1>Menu</h1>";
foreach($menu as $k=>$elm) {
	echo "<li><a href='{$elm['url']}'>{$elm['caption']}</a></li>";
}
echo "</ul>";