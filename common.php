<?php
function endsWith($haystack, $needle)
{
	return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}

$prjImages = [];
$prjText = [];
$catText = [];
$dir    = 'prj/';
$cats = scandir($dir);
foreach ($cats as $cat) {
	if ($cat == "." || $cat == "..")
		continue;
	$catdir = $dir . $cat . '/';
	foreach (scandir($catdir) as $prj) {
		if (endsWith(strtolower($prj), ".txt"))
			$catText[$cat] = file_get_contents($catdir . $prj);

		if (!is_dir($catdir . $prj))
			continue;
		$prjdir = $catdir . $prj . '/';

		foreach (scandir($prjdir) as $f) {
			if (endsWith(strtolower($f), ".jpg"))
				$prjImages[$cat][$prj][] = $prjdir . $f;
			if (endsWith(strtolower($f), ".txt"))
				$prjText[$cat][$prj] = file_get_contents($prjdir . $f);
		}
	}
}

$prjInfo = [];
foreach (file('prj-info.txt') as $f) {
	$s = explode("\t", $f);
	//print_r($prjInfo);
	$prjInfo[$s[0].trim()] = $s;
}

function getPrjInfo($name) {
	//echo "PRJ_INFO $name " . substr($name, 0, strpos($name, '-')).trim();
	global $prjInfo;
	//print_r($prjInfo[substr($name, 0, strpos($name, '-')).trim()]);
	return $prjInfo[substr($name, 0, strpos($name, '-')).trim()];
}

function getPrjName($name) {
	return getPrjInfo($name)[5];
}


?>
