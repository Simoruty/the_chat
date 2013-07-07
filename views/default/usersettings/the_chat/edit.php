<table>
    <tr>
        <td><?php echo elgg_echo('bbar:user:enableicons'); ?></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <?php $friends_iconsCtl=elgg_get_plugin_user_setting("friends_icons",$_SESSION['user']->guid,"the_chat") != "false"; ?>
        <td>
            <?php echo elgg_echo('option:yes'); ?><input type="radio" name="params[friends_icons]" value="true" <?php if ($friends_iconsCtl) echo "checked=\"checked\""; ?>/>
            <?php echo elgg_echo('option:no'); ?><input type="radio" name="params[friends_icons]" value="false" <?php if (!$friends_iconsCtl) echo "checked=\"checked\""; ?>/>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td><?php echo elgg_echo('bbar:user:enablechat'); ?></td>
        <td>
            &nbsp;
        </td>
         <?php $chat_enabledCtl=elgg_get_plugin_user_setting("chat_enabled",$_SESSION['user']->guid,"the_chat") != "false"; ?>
        <td>
            <?php echo elgg_echo('option:yes'); ?><input type="radio" name="params[chat_enabled]" value="true" <?php if ($chat_enabledCtl) echo "checked=\"checked\""; ?>/>
            <?php echo elgg_echo('option:no'); ?><input type="radio" name="params[chat_enabled]" value="false"<?php if (!$chat_enabledCtl) echo "checked=\"checked\""; ?>/>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
</table>