<?php
/*
+---------------------------------------------------------------+
|	e107 website system
|	
|
|	©Tgtje 2016
|	https://www.tgtje.nl
|	tgtje@tgtje.nl

+---------------------------------------------------------------+

*/

/*  Creates a Simple small menu/plugin (owa); can not find another thing... helas  menu itself is nameless (made)!!

  Simply change the setSiteID to reflect yours; of course sitepath (baseurl) too)

*/


$caption = "";
$text = "";
$ns -> tablerender($caption, $text);


echo "
<!-- Start Open Web Analytics Tracker -->
<script type='text/javascript'>
//<![CDATA[
var owa_baseUrl = 'http://domain/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'HERE YOUR OWA GENERATED ID']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->
";
?>