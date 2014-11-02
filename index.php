<?php
if(file_exists('text.txt')==false){file_put_contents('text.txt',"");}$us="";if(!empty($_POST["us"])){$us=$_POST["us"];}
if(!empty($_GET["chat1"])){echo '<iframe border="0" framespacing="0" frameborder="0" scrolling="no" onload="setTimeout(function(){this.document.location.reload();}, 5000);" style="width:100%;height:100%;margin:0;padding:0;" src="' . $_SERVER["PHP_SELF"] . '?chat=1"></iframe>';exit();}
if(!empty($_GET["chat"])){echo '<textarea style="width:100%;height:100%;overflow:auto;resize:none;overflow:hidden;">' . file_get_contents('text.txt') . '</textarea></br>';exit();}
if(!empty($_POST["message"])){file_put_contents('text.txt', '[' . date('g:i A') . '] ' . htmlspecialchars($us . " : " . $_POST["message"], ENT_QUOTES) . "\n" . file_get_contents('text.txt'));}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Minimal Chat Box Created By Cameron Crowley" />
</head>
<title>MiniChat</title>
<body bgcolor="black">
<pre><center>
<span style="color:#FFFFFF;text-align:center;">
___  ____       _ _____ _           _   
|  \/  (_)     (_)  __ \ |         | |  
| .  . |_ _ __  _| /  \/ |__   __ _| |_ 
| |\/| | | '_ \| | |   | '_ \ / _` | __|
| |  | | | | | | | \__/\ | | | (_| | |_ 
\_|  |_/_|_| |_|_|\____/_| |_|\__,_|\__|
    
</span></center>                                    
</pre>
</body>
</html>
<?php     
if($us==""){echo '<span style="color:#FFFFFF;text-align:center;"><center>Choose a nickname :<span><form method="POST"><input type="text" name="us" placeholder="Nickname"\><input type="submit" value="chat"\></form></center>';exit();}                                                                                                       
echo '<center><iframe border="0" framespacing="0" frameborder="0" scrolling="no" style="width:100%;height:60%;margin:0;padding:0;" src="' . $_SERVER["PHP_SELF"] . '?chat1=1"></iframe></br><span style="color:#FFFFFF;text-align:center;">Message: </span><form method="POST"><input type="hidden" name="us" value="' . $us . '"\><input type="text" name="message" style="width:70%;" value=""\><input type="submit" value="Send"\></form>
<center><footer><font color="FFFFFF">Created by <a href="https://securitybycameron.com/"/><font color="FFFFFF">Cameron Crowley</font></a>.</center></font>
</footer></center>';
?>
