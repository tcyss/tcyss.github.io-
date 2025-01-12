<?php
# Movable Type (r) (C) 2001-2017 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

function smarty_block_mtifcommentreplies($args, $content, &$ctx, &$repeat) {
    if (!isset($content)) {
        $switch = $ctx->mt->config('PluginSwitch');
        if (isset($switch) && isset($switch["Comments"]) && !$switch["Comments"]) {
            return $ctx->_hdlr_if($args, $content, $ctx, $repeat, 0);
        }

        $comment = $ctx->stash('comment');
        $args['comment_id'] = $comment->comment_id;
        $children = $ctx->mt->db()->fetch_comment_replies($args);
        return $ctx->_hdlr_if($args, $content, $ctx, $repeat, (is_array($children) && count($children) > 0));
    } else {
        return $ctx->_hdlr_if($args, $content, $ctx, $repeat);
    }
}
?>
