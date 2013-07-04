<table>
    <tr>
        <td><?php echo elgg_echo('bbar:user:enableicons'); ?></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
            <?php echo elgg_echo('option:yes'); ?><input type="radio" name="params[friends_icons]" value="true" <?php if ($vars['entity']->friends_icons) echo "checked=\"checked\""; ?>/>
            <?php echo elgg_echo('option:no'); ?><input type="radio" name="params[friends_icons]" value="false" <?php if (!$vars['entity']->friends_icons) echo "checked=\"checked\""; ?>/>
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
        <td>
            <?php echo elgg_echo('option:yes'); ?><input type="radio" name="params[chat_enabled]" value="true" <?php if ($vars['entity']->chat_enabled) echo "checked=\"checked\""; ?>/>
            <?php echo elgg_echo('option:no'); ?><input type="radio" name="params[chat_enabled]" value="false"<?php if (!$vars['entity']->chat_enabled) echo "checked=\"checked\""; ?>/>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
</table>