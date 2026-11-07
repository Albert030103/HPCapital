
<?php

 $ExactBrowserNameUA=$_SERVER['HTTP_USER_AGENT'];

if (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/")) {
    // OPERA
    $ExactBrowserNameBR="Opera";
	echo '&nbsp;&nbsp;aa&nbsp;&nbsp;'; 
} elseIf (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "chrome/")) {
    // CHROME
    $ExactBrowserNameBR="Chrome";
	echo '&nbsp;&nbsp;'; 
} elseIf (strpos(strtolower($ExactBrowserNameUA), "msie")) {
    // INTERNET EXPLORER
    $ExactBrowserNameBR="Internet Explorer";
	echo '&nbsp;&nbsp;cc&nbsp;&nbsp;'; 
} elseIf (strpos(strtolower($ExactBrowserNameUA), "firefox/")) {
    // FIREFOX
    $ExactBrowserNameBR="Firefox";
	echo '&nbsp;&nbsp;dd&nbsp;&nbsp;'; 
} elseIf (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/")==false and strpos(strtolower($ExactBrowserNameUA), "chrome/")==false) {
    // SAFARI
    $ExactBrowserNameBR="Safari";
	echo '&nbsp;&nbsp;ee&nbsp;&nbsp;'; 
} else {
    // OUT OF DATA
    $ExactBrowserNameBR="OUT OF DATA";
	echo '&nbsp;&nbsp;ff&nbsp;&nbsp;'; 
};


?>

