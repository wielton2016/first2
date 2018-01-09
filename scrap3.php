<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
<title>
Untitled Document
</title>
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript" src="projekktor.min.js"></script>
<link rel="stylesheet" href="theme/maccaco/style.css" type="text/css" media="screen" />

<script type="text/javascript">
$(document).ready(function() {
projekktor('video');
})
</script>
    
</head>
<body>
<div>
<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Ae1e1e1%3Aplaylist%3A5oNL4QH8UpBDi7pwDlH1B7" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
</div>
<div>radio zw</div>
<div>
  <embed type="application/x-vlc-plugin"
         pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2"  
         width="100%"  height="100%" id="vlc" loop="yes" autoplay="no" 
         target="http://stream2.nadaje.com:8022/;"></embed>
  </div>
 
  
<div>radio czwórka</div>
<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" 
       version="VideoLAN.VLCPlugin.2"  width="100%"  
       height="100%" id="vlc" loop="yes" 
       autoplay="no" target="http://stream3.polskieradio.pl:8906/"></embed>
<div>używać firefoxa,jeśli nie działa, zinstaluj wtyczke VLC:</div>
<a href="http://get.videolan.org/vlc/2.0.7/win32/vlc-2.0.7-win32.exe">VLC plugin</a>


<video id="video" src="http://stream3.polskieradio.pl:8906/" autoplay="autoplay" />


</body>
</html>