<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>SCM Music Player - free and open source web music player</title>
<meta name="description" content="Free and open source web music player. Support Wordpress, Tumblr, Xanga, Blogger, MP3, AAC, Youtube, XSPF, skinning." /> 
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="site.css" />
<style type="text/css">

.skinPreview{ height:25px;width:100%; }
</style>
</head>

<body>
<!--SCM Music Player 5 by Adrian Shum - http://scmplayer.asweb.info-->
<script type="text/javascript" src="script.php" ></script>
<script type="text/javascript"><!--
SCMMusicPlayer.init("{'playlist':'http://www.youtube.com/my_playlists?p=60AB902F95917299','skin':'skins/tunes/skin.css','placement':'top','playback':{'autostart':'false','shuffle':'true','volume':'50'}}");
//--></script>
<!--End of SCM Music Player script-->

<div id="container" >
<h2>SCM Music Player</h2>
<div id="content">
<h3>INTRODUCTION</h3>
<p>SCM Music Player is a free and open source web music player, with powerful features that brings a seamless music experience for your website. Support Wordpress, Tumblr, Blogger.</p>

<ul class="bullet"> 
<li><strong>Play Musics</strong> - Support MP3, AAC, Youtube and FLV audio. <span class="new">New!</span></li> 
<li><strong>Continous Playback Cross Pages</strong> - Seamless playback throughout your site.</li> 
<li><strong>Custom Skinning</strong> - Skins to match your look and feel. Choose or design your own. <span class="new">New!</span></li> 
<li><strong>Playlist or Podcast</strong> - Manual playlist, or XSPF, RSS Proadcast and Youtube Playlist. Make it dynamic. <span class="new">New!</span></li> 
<li><strong>Save Spaces</strong> - Dockable playback module on top or bottom, while playlist can be toggled.</li> 
<li><strong>Setup Wizard</strong> - Create your SCM Music Player without any pain.</li> 
<li><strong>Cross Browsers</strong> - Compatible on Google Chrome, Opera, Firefox, Safari, IE 6+.</li> 
</ul> 
<a name="wizard"></a>
<h3>SETUP WIZARD</h3>
<ul class="bullet"> 
<li>Go through each tab to <strong>Choose Skin</strong>, <strong>Edit Playlist</strong>, and <strong>Configure Settings</strong>. Then select <strong>Done</strong> to proceed.</li> 
<li><strong>Returning user?</strong> You can select <strong>Import Profile</strong>, to load up and edit your current SCM Music Player script.</li> 
</ul>

<div class="loading" id="loading" style="height:200px;"></div>

<ul id="parts" class="stack" style="display:none;">
<li class="stackItem on">
<form id="wizardForm" name="wizardForm">
<ul id="wizardTab" class="tabContent">
<li title="Choose Skin" class="on tabItem">
<ul class="list" >
<table class="data" id="skinChoice" >
<tr><th colspan="2">DEFAULT SKINS</th></tr>
<tr style="display:none;"><td style="width:620px;"><iframe src="" class="skinPreview" frameborder="0"></iframe></td>
<td style="text-align:center;width:30px;"><input type="radio" name="skinType" value="skins/tunes/skin.css" checked="checked" /> </td>
</tr>
</table>
<table class="data">
<tr><th colspan="2">CUSTOM SKIN URL</th></tr>
<tr><td><input type="text" id="customSkin" name="customSkin" style="width:610px;" value="" /></td>
<td style="text-align:center;width:30px;"><input type="radio" name="skinType" id="skinTypeCustom" value="custom" /> </td>
</tr>


</table>
</ul>

</li>
<li title="Edit Playlist" class="tabItem">
<p><input type="radio" name="listType" id="manualListRadio" value="manual" checked="checked" /> Manual Playlist 
<input type="radio" name="listType" id="dynamicListRadio" value="dynamic" /> Podcast (Youtube Playlist / RSS / XSPF)</p>
<ul id="listTypes" class="stack">
<li class="stackItem">
<ul class="bullet">
<li>Insert Song Title, and Song URL (e.g. http://somesite.com/file.mp3):</li>
<li>You can use Youtube address (http://www.youtube.com/watch?v=VIDEO_ID) as Song URL.</li>
</ul>
<table class="data" id="manualList" >
<tr>
<th style="width:310px">SONG TITLE</th>
<th style="width:310px">SONG URL</th>
<th></th>
</tr>
<tr style="display:none;">
<td><input type="text" value="" style="width:290px;" class="songTitle" name="title[]"/></td>
<td><input type="text" value="" style="width:290px;" class="songURL" name="url[]"/></td>
<td><input type="button" class="delete" value="x" /></td>
</tr>
</table>
<p><input type="button" value="Add More Songs" id="addSongsButton" /></p>
</li>
<li class="stackItem">
<h4>PLAYLIST URL</h4>
<p><input type="text" value="" style="width:500px;" id="dynamicURL" name="dynamicURL"/></p>
</li>
</ul>

</li>
<li title="Configure Settings" class="tabItem">


<table class="data" style="width:100%;" >
<tr><th colspan="2">PLAYBACK</th></tr>
<tr>
	<td style="width:50%;" >Autostart</td>
	<td>
		<select class="playback" name="autostart">
        <option value="true" >Yes</option>
        <option value="false" selected="selected">No</option>
		</select>
	</td>
</tr>
<tr>
	<td>Shuffle Playback</td>
	<td>
		<select class="playback" name="shuffle">
        <option value="true" >Yes</option>
        <option value="false" selected="selected">No</option>
		</select>
	</td>
</tr>
<tr>
	<td>Default Volume</td>
	<td>
		<select class="playback" name="volume">
<?php
		for($i=10;$i<=100;$i+=10)
			if($i==50)
				echo '<option selected="selected" value="50">50%</option>';
			else
				echo '<option value="'.$i.'">'.$i.'%</option>';
?>
		</select>
	</td>
</tr>
</table>


<table class="data" style="width:100%;" >
<tr><th colspan="2">APPEARENCE</th></tr>
<tr>
	<td style="width:50%;">Placement of the Player</td>
	<td>
		<select class="appearence" name="placement">
		<option value="top" selected="selected">Top</option>
        <option value="bottom">Bottom</option>
		</select>
	</td>
</tr>
<tr>
	<td style="width:50%;">Show Playlist by Default</td>
	<td>
		<select class="appearence" name="showplaylist">
        <option value="true" >Yes</option>
        <option value="false" selected="selected">No</option>
		</select>
	</td>
</tr>

</table>


</li>
</ul>
</form>
<div style="padding:15px 0;">
<input type="button" id="wizardDone" style="float:right;" value="Done"/>
<input type="button" id="wizardImport" value="Import Profile"/>
</div>

</li>
<li class="stackItem gridContent">
<h4>IMPORT PROFILE</h4>
<p>You can import profile from your current SCM Music Player script, by pasting it to the field below. Press Ok to proceed.</p>
<p><textarea  style="width:640px;height:200px;" id="importField" ></textarea></p>
<p><input type="button" id="importOk" value="OK"/> 
<input type="button" id="importCancel" value="Cancel"/></p>
</li>

<li class="stackItem gridContent">
<h4>DONE</h4>
<p>Congratulations! Your SCM Music Player script has been created.</p>
<p>Please paste the following code under beginning of &lt;body&gt; tag (i.e. on top of webpage content).</p>
<p><textarea  style="width:640px;height:200px;" id="doneField" readonly="readonly" >
<!--SCM Music Player by Adrian Shum - http://scmplayer.asweb.info-->
&lt;script type="text/javascript" src="<?php echo str_replace("index.php","",$_SERVER["SCRIPT_NAME"]); ?>player/script.php" &gt;&lt;!--
//--&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;&lt;!--
SCMMusicPlayer.init(&quot;=settings=&quot;);
//--&gt;&lt;/script&gt;
<!--End of SCM Music Player script-->
</textarea></p>
<p><input type="button" id="doneBack" value="Back"/></p>
</li>
</ul>



</div>

<div id="navigation" >
<ul class="linkList">
<li><a href="index.php">HOME</a></li>
<li><a href="index.php#wizard">SETUP WIZARD</a></li>
<li><a href="resources.html#download">DOWNLOAD</a></li>
<li><a href="resources.html#licensing">LICENSING</a></li>
<li><a href="resources.html#donate">DONATE</a></li>
<li><a href="resources.html#about">ABOUT</a></li>
</ul>
<p>
<script type="text/javascript"><!--
google_ad_client = "pub-6799082498278077";
/* 160x600, created 03/10/10 */
google_ad_slot = "6159633219";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</p>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.5/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="mootools-1.2.4.4-more.js"></script> 
<script type="text/javascript" src="wizard.js"></script>
<script type="text/javascript">
window.addEvent(Browser.Engine.trident ? "load": "domready",function(){
	if(window.parent!=window){
		$("loading").setStyle("display","none");
		$("parts").setStyle("display","block");
		
		new asweb.SCMWizard([
			"skins/tunes/skin.css",
			"skins/aquaBlue/skin.css",
			"skins/aquaPurple/skin.css",
			"skins/aquaPink/skin.css",
			"skins/aquaOrange/skin.css",
			"skins/aquaGreen/skin.css",
			"skins/cyber/skin.css",
			"skins/black/skin.css",
			"skins/blue/skin.css",
			"skins/purple/skin.css",
			"skins/pink/skin.css",
			"skins/orange/skin.css",
			"skins/green/skin.css"
		]);
	}
});
</script>
</body>

</html>