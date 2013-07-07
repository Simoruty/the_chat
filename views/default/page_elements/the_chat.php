<?php
     $friends = $_SESSION['user']->getFriends("", 1000);
 	 $showFriendIcon = elgg_get_plugin_user_setting("friends_icons",$_SESSION['user']->guid,"the_chat") != "false";
     $chatEnable = elgg_get_plugin_user_setting("chat_enabled",$_SESSION['user']->guid,"the_chat") != "false";

    // elgg_set_plugin_user_setting("friends_icons",$showFriendIcon,$_SESSION['user']->guid,"the_chat");
    // elgg_set_plugin_user_setting("chat_enabled",$chatEnable,$_SESSION['user']->guid,"the_chat");
     
     $numFriendsOnline = 0;
     $friends = $_SESSION['user']->getFriends("", 1000);

    if (count($friends) > 0) {
        foreach ($friends as $friend) {
            if ($friend ->last_action < time() - 600 ) {
                // Consider them offline if no action for 10 mins ..
            } elseif ($friend->last_action < time() - 300) {
                $numFriendsOnline++;
            } else {
                $numFriendsOnline++;
            }
        }
    }
?>

<script type="text/javascript" src="<?php echo $CONFIG->wwwroot; ?>mod/the_chat/soundmanager2/script/soundmanager2.js"></script>

<script type="text/javascript"> 
 
soundManager.setup({
url: '<?php echo $CONFIG->wwwroot; ?>mod/the_chat/soundmanager2/swf/soundmanager2.swf',
flashVersion: 9, // optional: shiny features (default = 8)
useFlashBlock: false, // optionally, enable when you're ready to dive in
  /**
   * read up on HTML5 audio support, if you're feeling adventurous.
   * iPad/iPhone and devices without flash installed will always attempt to use it.
   */
onready: function() {
soundManager.createSound({id:"msg_in",  url:"<?php echo $CONFIG->wwwroot; ?>mod/the_chat/sounds/msg_in.mp3",  
autoLoad: true
 });
  }
});
</script>


<div id="elggchat_toolbar" style=" width: 98%;   display: block;" >

<div id="elggchat_toolbar_left" >


<div id="elggchat_friends" style="width: 205px; ">
<div style="margin-top:5px;"><center><a href="javascript:toggleFriendsPicker();"><?php if (count($friends) > 0) { echo "Chat (" . $numFriendsOnline .")";}else{ echo "Chat";} ?></a></center></div>
</div>
<div id="elggchat_friends_picker">


<?php

if(!$chatEnable){echo elgg_echo('bbar:bar:chatEnabledOff');}
	else{
        if (count($friends) > 0) {
            echo "<table width=100% id='bb_friendslist'>";
            foreach ($friends as $friend) {
                $icon = $friend->getIconURL('topbar');
                if ($friend->last_action < time() - 600 ) {
                    // Consider them offline if no action for 10 mins ..

                } elseif ($friend->last_action < time() - 300) {
                    echo "<tr>";
                    if ($showFriendIcon) echo "<td width=10><img src='$icon'></td>";
                    echo "<td style='padding-left: 5px;'><a href='#' onClick='addChat(\"" . $friend->guid . "\", \"" . $friend->name . "\");'>" . $friend->name . "</a></td><td width=10 style='padding-top: 3px;'>";
                    echo "<img src='" . $CONFIG->wwwroot . "mod/the_chat/graphics/icons/inactive.png'>";
                } else {
                    echo "<tr>";
                    if ($showFriendIcon) echo "<td width=10><img src='$icon'></td>";
                    echo "<td style='padding-left: 5px;'><a href='#' onClick='addChat(\"" . $friend->guid . "\", \"" . $friend->name . "\");'>" . $friend->name . "</a></td><td width=10 style='padding-top: 3px;'>";
                    echo "<img src='" . $CONFIG->wwwroot . "mod/the_chat/graphics/icons/online_s.png'>";
                }
                echo "</td></tr>";
            }
            echo "</table>";
            if ($numFriendsOnline == 0) {
                echo elgg_echo('bbar:bar:noneonline');
            }
        }
    else if (count($friends) == 0) {
	  echo elgg_echo('bbar:bar:nofriends');
    }
}
?>


</div>
</div>
<div id='elggchat_sessions' style="float:right;"> 

</div>
</div>
<script>
function toggleFriendsPicker(){
$("#elggchat_friends_picker").slideToggle('fast');
}
</script>

<script>
<?php require_once("functions.php"); ?>
initPage();
</script>