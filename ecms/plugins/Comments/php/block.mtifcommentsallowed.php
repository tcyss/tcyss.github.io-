<?php
# Movable Type (r) (C) 2001-2017 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

function smarty_block_mtifcommentsallowed($args, $content, &$ctx, &$repeat) {
    # status: complete
    if (!isset($content)) {
        $switch = $ctx->mt->config('PluginSwitch');
        if (isset($switch) && isset($switch["Comments"]) && !$switch["Comments"]) {
            return $ctx->_hdlr_if($args, $content, $ctx, $repeat, 0);
        }

        $blog = $ctx->stash('blog');
        return $ctx->_hdlr_if($args, $content, $ctx, $repeat,
                              ($blog->blog_allow_unreg_comments
                               || ($blog->blog_allow_reg_comments
                                   && $blog->blog_commenter_authenticators))
                              && $ctx->mt->config('AllowComments'));
    } else {
        return $ctx->_hdlr_if($args, $content, $ctx, $repeat);
    }
}
?>
