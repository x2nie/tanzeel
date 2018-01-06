
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Browse, Search, and Listen to the Holy Quran. With accurate Quran text and Quran translations in various languages." />
<meta name="keywords" content="Quran Translation Authentic Accurate Qur'an Text Kuran Roots Koran Recitation Tartil Tarteel Learn Quraan Online Application Download
تنزيل القرآن الكريم قرائت قرآن ترتيل Keywords" />
<meta name="viewport" content="width=768" />
<link href="http://tanzil.info/tanzil/img/favicon.png" rel="icon" type="image/png" />
<title>Tanzil - Quran Navigator | القرآن الكريم</title>
<link href="/tanzil/css/tanzil(v1.5).css" type="text/css" rel="stylesheet" />
<script src="/tanzil/js/jquery.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
var root = '/tanzil';
var version = '1.5';
var fontAdded = false;
var isPageEmbedded = false;
// var donateDaysLeft = -232;
$(document).ready(function() {
initPage({defTrans: ''});
});
</script>
<a name="top"></a>
<div class="container" id="container">
<div id="top-content" >
<a href="http://tanzil.net/" target="_top" title="Tanzil" style="width: 180px; height: 68px; float: left; "></a>
<a href="http://tanzil.net/" target="_top" title="Tanzil" style="width: 190px; height: 68px; float: right; "></a>
</div>
<div id="top-menu" class="top-menu">
<div class="floatStart">
<ul>
<li> <a href="#" title="About Tanzil" onclick="return openDialog('about', 'About');">About</a> </li>
<li> <a href="#" title="Frequently Asked Questions" onclick="return openDialog('faq.php', 'FAQs');">FAQs</a> </li>
<li> <a href="#" title="Project News" onclick="return openDialog('news.php', 'News');">News</a> </li>
<li> <a href="http://tanzil.net/wiki/" title="Project Documents" target="_blank">Docs</a> </li>
</ul>
</div>
<div class="floatEnd">
<ul>
<li> <a href="#" title="Share Tanzil" onclick="return openDialog('share.php', 'Share');">Share</a> </li>
<li> <a href="#" title="Join Tanzil on Facebook" onclick="return openDialog('join.php', 'Join');">Join</a> </li>
<li> <a href="#" title="Contact Us" onclick="return openDialog('contact.php', 'Contact Us');">Contact</a> </li>
</ul>
</div>
</div>
<div id="body-content" class="ui-helper-clearfix">
<div id="main-content" class="floatEnd">
<div id="page-tab" >
<div id="loadingImage">
<img src="http://tanzil.info/tanzil/img/ajax-loader.gif" width="16" height="16" alt="Loading"/>
</div>
<ul class="ui-tab ui-helper-clearfix">
<li id="quran-selector" class="selected"><a href="#quran">Quran</a></li>
<li id="trans-selector"><a href="#trans">Translation</a></li>
<li id="search-selector" class="ui-hidden"><a href="#search">Search Results</a></li>
</ul>
</div>
<div class="top-ad">
<a class="tbox-close" title="Close" href="#"><b>X</b></a>
</div>
<div id="quran-tab" class="main-tab quran">
<div class="quranPageHeader ui-helper-clearfix">
<div style="float: left; width: 180px; text-align: left;"><span id="suraName"> &nbsp; </span></div>
<div style="float: left; width: 130px;">
<a class="arrow-link arrow-left" href="javascript:changePage('left')">&#9668;</a>
&nbsp;<span class="pageNumber">  </span>&nbsp;
<a class="arrow-link arrow-right" href="javascript:changePage('right')">&#9658;</a>
</div>
<div style="float: right"><span id="juzName"> &nbsp; </span> </div>
</div>
<div class="qFrameTop">
</div>
<div class="qFrameMiddle" id="middleFrame">
<div class="quranText" id="quranText">
<div style="padding: 10px; color: gray; text-align: center; font-size: 22px; direction: ltr">
Loading...
</div>
</div>
<div class="transText" id="transText" style="display: none;">
</div>
</div>
<div class="qFrameBottom">
</div>
<div class="quranPageFooter">
<a class="arrow-link arrow-left" href="javascript:changePage('left')">&#9668;</a>
&nbsp;<span class="pageNumber"> </span>&nbsp;
<a class="arrow-link arrow-right" href="javascript:changePage('right')">&#9658;</a>
</div>
</div>
<div id="trans-tab" class="main-tab">
</div>
<div id="search-tab" class="main-tab" style="display: none;">
<div class="searchHeader ui-helper-clearfix">
<div class="floatStart" style="width: 170px;">Search:&nbsp;<code id="searchPattern"></code>&nbsp;</div>
<div id="search-nav" class="floatStart" style="direction: ltr; width: 150px; text-align: center; vertical-align: middle;">
<form method="post" action="javascript:Search.showPage(0);">
<a class="arrow-link arrow-left" href="javascript:Search.showPage(isRTL ? 1 : -1)">&#9668;</a>
<span>
&nbsp; page
<input type="text" value="1" id="pageOffset" class="searchOffset" />
of <span id="totalPages">-</span>&nbsp;
</span>
<a class="arrow-link arrow-right" href="javascript:Search.showPage(isRTL ? -1 : 1)">&#9658;</a>
</form>
</div>
<div id="searchStat" class="floatEnd"></div>
</div>
<div class="searchFrame" id="searchFrame">
<div class="searchResults" id="searchResults">
</div>
</div>
</div>
</div>
<div id="side-content" class="floatEnd">
<div class="sub-menu">
<div class="menu-top">
Search			</div>
<div class="menu-content">
<div id="menu-tab">
<ul class="ui-tab ui-helper-clearfix">
<li id="search-quran-selector"><a href="#">Quran</a></li>
<li id="search-roots-selector"><a href="#">Roots</a></li>
<li id="search-goto-selector"><a href="#">GoTo</a></li>
</ul>
</div>
</div>
<div class="menu-body" style="padding-top: 10px;">
<div id="search-quran-tab" class="search-tab">
<form action="javascript:Search.go();">
<div class="menu-row">
<input id="searchText" type="text" value="كتاب" />
<span class="button">
<span onclick="Search.go();" class="icon icon-search" title="Search"> </span>
</span>
</div>
<div class="menu-row comment-row">
<a href="#" onclick="return openDialog('search.php', 'Search Tips');">Tips</a>
</div>
</form>
</div>
<div id="search-roots-tab" class="search-tab">
<div class="menu-row">
<select id="rootMenu" class="selection">
<option value="1"></option>
</select>
<span class="button">
<span onclick="Search.goRoot();" class="icon icon-search" title="Search"> </span>
</span>
</div>
<div class="menu-row" id="charList"></div>
</div>
<div id="search-goto-tab" class="search-tab">
<form action="javascript:Search.goTo();">
<div class="menu-row">
<input id="gotoText" type="text" value="19:3" />
<span class="button">
<span onclick="Search.goTo();" class="icon icon-search" title="Go"> </span>
</span>
</div>
<div class="menu-row comment-row">
<a href="#" onclick="return openDialog('goto.php', 'Tips');">Tips</a>
</div>
</form>
</div>
</div>
</div>
<div class="sub-menu">
<div class="menu-top">
Browse			</div>
<div class="menu-body">
<form method="post" action="javascript:showPage();">
<div class="menu-row">
<label class="small">Sura:</label>
<select id="suraMenu" onchange="showSura();">
<option value="1">الحمد</option>
</select>
</div>
<div class="menu-row">
<label class="small">Aya:</label>
<select id="ayaMenu" onchange="showAya();">
<option value="1">1</option>
</select>
</div>
<div class="menu-row">
<label class="small">Juz:</label>
<select id="juzMenu" onchange="showJuz();">
<option value="1">Juz 1</option>
</select>
</div>
<div class="menu-row">
<label class="small">Page:</label>
<input type="text" value="128" id="pageNum" class="small" />
<span class="button small-button" onclick="changePage(-1)"> - </span>
<span class="button small-button" onclick="changePage(+1)"> + </span>
</div>
</form>
</div>
</div>
<div class="sub-menu" id="audio-submenu">
<div class="menu-top">
Recitation			</div>
<div class="menu-body" style="padding-top: 0; position: relative;">
<div class="menu-setting-icon">
<label id="soundOptions" class="icon icon-setting" title="Options"></label>
</div>
<div class="sound-options">
<div class="menu-row" style="padding-top: 0">
<label class="small" title="Play Scope">Play:</label>
<select id="playScope" style="width: 106px" onchange="update('opt.playScope', $(this).val());">
<option value="cont">Continuous</option>
<option value="aya">Aya</option>
<option value="sura">Sura</option>
<option value="page">Page</option>
<option value="juz">Juz</option>
</select>
</div>
<div class="menu-row">
<label class="small" title="Delay Between Ayas">Delay:</label>
<select id="playDelay" style="width: 106px" onchange="update('opt.playDelay', $(this).val());">
<option value="0">0</option>
</select>
</div>
<div class="menu-row" style="padding-top: 3px">
<label class="small" title="Interleaved Recitations">Reciter:</label>
<span class="button" style="padding: 2px 8px; margin: 0;" onclick="addReciter();">Add</span>
</div>
</div>
<div class="vspace" style="height: 8px;"></div>
<div id="reciters">
<div class="menu-row reciter">
<select class="reciteMenu">
<option value="0">Al-Ghamadi</option>
</select>
<select class="repeatMenu">
<option value="1">x1</option>
</select>
<label class="repeatCount" title="Repeat Times">x1</label>
</div>
</div>
<div id="jplayer_inspector" style="position: fixed; top: 0; left: 0"></div>
<div class="menu-row" id="player-loading">
<div class="jp-interface">
<a href="http://tanzil.net/wiki/Sound_Troubleshooting" title="Sound Troubleshooting" style="color: #555" target="_blank">
loading player</a>
</div>
</div>
<div class="menu-row" id="player-pad">
<div class="jp-interface">
<div class="jp-play jp-play-pause">
<div class="icon icon-play"></div>
</div>
<div class="jp-pause jp-play-pause">
<div class="icon icon-pause"></div>
</div>
<div class="jp-progress">
<div class="jp-seek-bar">
<div class="jp-play-bar"></div>
</div>
</div>
<div class="jp-volume-toggle">
<div class="icon icon-volume"></div>
</div>
<div class="jp-volume-bar">
<div class="jp-volume-bar-wrapper">
<div class="jp-volume-bar-value"></div>
</div>
</div>
<div class="jp-volume-max"></div>
<div class="jp-volume-mute-pad"></div>
</div>
</div>
</div>
</div>
<div class="sub-menu">
<div class="menu-top">
Translation			</div>
<div class="menu-body">
<form method="post" action="javascript:display();">
<div class="menu-row trans-row">
<select id="transMenu" class="long" onchange="setTrans()">
<option value="0">English</option>
</select>
<label class="icon" title="Toggle Translation Audio" onclick="updateAudioTransSettings()"></label>
</div>
<div class="vspace"></div>
<div class="menu-row">
<input type="radio" id="showTrans" name="showTrans" value="fixed" onclick="updateTransSettings()" /><label for="showTrans">Fixed translation box</label>
</div>
<div class="menu-row">
<input type="radio" id="showHoverTrans" name="showTrans" value="hover" onclick="updateTransSettings()" /><label for="showHoverTrans">Translate on mouse over</label>
</div>
<div class="menu-row">
<input type="radio" id="showTransNone" name="showTrans" value="none" onclick="updateTransSettings()" /><label for="showTransNone">None</label>
</div>
</form>
</div>
</div>
<div class="sub-menu collapsed">
<div class="menu-top">
Quran			</div>
<div class="menu-body">
<form method="post" action="javascript:updateQuranSettings();">
<div class="menu-row">
<label class="small">Text:<span class="info-mark" title="Text Types" onclick="return openDialog('textTypes.php', 'Quran Text Types');">?</span></label>
<select id="typeMenu" onchange="updateQuranSettings();">
<option value="0">Simple</option>
</select>
</div>
<div class="vspace"></div>
<div class="menu-row">
<input type="checkbox" id="showSigns" onclick="updateQuranSettings();" /><label for="showSigns">Show Pause Marks</label>
</div>
<div class="menu-row">
<input type="checkbox" id="showSmallAlef" onclick="updateQuranSettings();" /><label for="showSmallAlef">Show Small-Alef</label>
</div>
</form>
</div>
</div>
<div class="sub-menu collapsed">
<div class="menu-top">
Display Options			</div>
<div class="menu-body">
<form method="post" action="javascript:updateFontSettings();">
<div class="menu-row">
<label class="small">Font:</label>
<select id="fontMenu" name="font" onchange="updateFont();">
<option value="0">Default</option>
</select>
</div>
<div class="menu-row" id="customFontRow">
<label class="small">&nbsp;	</label>
<input type="text" value="" id="customFont" class="small" />
<span class="button small-button" style="width: 43px;" onclick="updateFont()"> Apply </span>
</div>
<div class="menu-row">
<label class="small">Size:</label>
<input type="text" value="16" id="fontSize" class="small" />
<span class="button small-button" onclick="setFontSize(-1)"> - </span>
<span class="button small-button" onclick="setFontSize(+1)"> + </span>
</div>
<div class="vspace"></div>
<div class="menu-row">
<div class="floatEnd">
<img id="loading-font" src="http://tanzil.info/tanzil/img/loading-h.gif" alt="Loading" width="16" height="11" />
</div>
<input type="checkbox" id="textJustify" onclick="updateFontSettings();" /><label for="textJustify">Align Text</label>
</div>
</form>
</div>
</div>
</div>
<div id="jplayer-box">
</div>
</div>
<div id="footer-content">
<a href="http://tanzil.net/" target="_top" style="color: #333">Tanzil</a> &copy; 2007-2015
</div>
</div>
<div id="page-width"></div>
<div id="dialogs" style="display: none;">
<div id="description">
<h1> Quran </h1>
<p>
Tanzil (Arabic: تنزيل, aka Tanzeel) is a simple and easy-to-use Quranic web application.
Tanzil was previously hosted on tanzil.info. <br/>
This is an independent international Quranic project, and does not belong to any sect, organization, or country. <br/>
See also:
<a href="/download/">Tanzil Quran Text</a> -
<a href="/trans/">Tanzil Quran Translations</a>
</p>
</div>
<div id="about">
<div class="floatStart" style="margin: 0 10px 0 0;">
<a href="http://tanzil.net/" target="_top" title="Tanzil">
<img src="http://tanzil.info/tanzil/img/logo-4.png" border="0" width="95" height="95" alt="Tanzil"/></a>
</div>
<h3>
Tanzil - Quran Navigator		</h3>
<p> &copy; 2007-2015 <a href="http://tanzil.net/" target="_top">Tanzil Project</a></p>
<p> Tanzil is an international Quranic project aimed at providing a highly-verified precise Quran text
(<a href="http://tanzil.net/wiki/Tanzil_Project" target="_blank">more</a>)</p>
<div style="clear: both;"></div>
<h3> Credits: </h3>
<ul>
<li>Developer: <a href="http://zarrabi.info/" target="_blank">Hamid Zarrabi-Zadeh</a></li>
<li>See our <a href="http://tanzil.net/wiki/Credits" target="_blank">Contributors and Resources</a></li>
</ul>
</div>
<div id="ex-dialog">
</div>
</div>
<div class="dbox-wrapper">
<div class="dbox-loading">
Loading...
</div>
<div class="dbox">
<div class="dbox-title">
<a class="dbox-close" title="Close" href="#">X</a>
<span>Title</span>
</div>
<div class="dbox-body">
<div class="dbox-content">
</div>
<div class="dbox-footer">
<span class="button" onclick="Dialog.close();">Close</span>
</div>
</div>
</div>
</div>
<div class="tbox">
<div class="tbox-wrapper">
<div class="tbox-title">
<a class="tbox-close" title="Close" href="#">X</a>
<span>Title</span>
</div>
<div class="tbox-content">
</div>
</div>
</div>
<div class="font-tester events">
</div>
<script src="/tanzil/js/data.js.php?locale=en_US" type="text/javascript"></script>
<script src="/tanzil/js/tanzil(v1.5).js" type="text/javascript"></script>
</body>
</html>