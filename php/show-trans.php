<?php

	// Quran Metadata Sample Usage
	// By: Hamid Zarrabi-Zadeh
	// http://tanzil.net


	$quranFile = 'quran-simple.txt';   // quran file
	//$transFile = 'trans-english.txt';  // translation file
	$transFile = 'id.indonesian.txt';  // translation file
	$metadataFile = 'quran-data.xml';  // quran metadata file

	initSuraData();   // initialize sura data array
	

	//------------------ General Functions ---------------------


	// initialize sura data array
	function initSuraData()
	{
		global $suraData, $metadataFile;
		$dataItems = Array("index", "start", "ayas", "name", "tname", "ename", "type", "rukus");

		$quranData = file_get_contents($metadataFile);
		$parser = xml_parser_create();
		xml_parse_into_struct($parser, $quranData, $values, $index);
		xml_parser_free($parser);

		for ($i=1; $i<=114; $i++) 
		{
			$j = $index['SURA'][$i-1];
			foreach ($dataItems as $item)
				$suraData[$i][$item] = $values[$j]['attributes'][strtoupper($item)]; 
		}
	}


	// return given property of a sura
	function getSuraData($sura, $property) 
	{
		global $suraData;
		return $suraData[$sura][$property]; 
	}


	// return contents of a sura
	function getSuraContents($sura, $file) 
	{
		$text = file($file);
		$startAya = getSuraData($sura, 'start');
		$endAya = $startAya+ getSuraData($sura, 'ayas');
		$content = array_slice($text, $startAya, $endAya- $startAya); 
		return $content;
	}


	//------------------ Display Functions ---------------------


	// get sura number 
	import_request_variables("pg");
	if ($sura < 1) $sura = 1; 
	if ($sura > 114) $sura = 114; 


	// show sura contents
	function showSura($sura)
	{
		global $quranFile, $transFile;
		$suraName = getSuraData($sura, 'name');
		$suraText = getSuraContents($sura, $quranFile);
		$transText = getSuraContents($sura, $transFile);
		$showBismillah = false; // change to true to show Bismillahs
		$ayaNum = 1;
		
		echo "<div class=suraName>سورة $suraName</div>";
		foreach ($suraText as $aya)
		{
			$trans = $transText[$ayaNum- 1];
			// remove bismillahs, except for suras 1 and 9
			if (!$showBismillah && $ayaNum == 1 && $sura !=1 && $sura !=9)
				$aya = preg_replace('/^(([^ ]+ ){4})/u', '', $aya);
			// display waqf marks in different style
			$aya = preg_replace('/ ([ۖ-۩])/u', '<span class="sign">&nbsp;$1</span>', $aya);

			echo "<div class=aya>";
			echo "<div class=quran><span class=ayaNum>$ayaNum. </span>$aya</div>";
			echo "<div class=trans>$trans </div>";
			echo "</div>";
			$ayaNum++;
		}
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Show Sura <?php echo $sura ?> </title>
</head>

<style>
	.suraName {text-align: center; font-size: 20px; padding: 10px 0px;
		border: 1px solid #D4DDCC; background-color: #E4EEDC; margin-top: 7px;}
	.aya {background-color: #EEF8E5; border: 1px solid #D4DDCC; border-top: 0px;}
	.quran { font-family: Traditional Arabic; font-size: 28px; direction: rtl;}
	.trans { font-family: Times New Roman; font-size: 20px; direction: ltr; background-color: #E7EFDF;}
	.quran, .trans {padding: 10px; text-align: right;}
	.ayaNum {color: green; font-size: smaller;}
	.sign {font-family: times new roman; font-size: 0.9em; color: #FB7600;}
	.footer {text-align: center; margin: 20px 0px; color: #222; font-family: Arial;
		background-color: #f4f4ff; border: 1px solid #ccd; padding: 3px; font: 12px Verdana;}
</style>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Show Sura: <input type="text" value="<?php echo $sura ?>" name="sura" size="4" >
	<input type="submit" value=" Go "> &nbsp;
</form>

<?php
	showSura($sura); 
?>

<div class="footer">
	Quran text provided by: <a href="http://tanzil.net/">Tanzil.net<a>
</div>
</body>
