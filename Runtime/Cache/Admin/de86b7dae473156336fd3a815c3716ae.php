<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xl): $mod = ($i % 2 );++$i;?><hr/><h2><?php echo ($xl["khdh"]); ?></h2><br/>
    <?php echo ($xl["cph"]); echo ($xl["cpm"]); ?><p style="float:right"><?php echo ($xl["ordertime"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>