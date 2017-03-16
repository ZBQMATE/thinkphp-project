<?php if (!defined('THINK_PATH')) exit();?><form method="post" action="/index.php/Admin/Homepage/ass">
    页面顶端推荐课程1：<input type="text" name="bnra" value="<?php echo ($cvc["bnra"]); ?>" maxlength="40"><br/>
    页面顶端推荐课程2：<input type="text" name="bnrb" value="<?php echo ($cvc["bnrb"]); ?>" maxlength="40"><br/>
    页面顶端推荐课程3：<input type="text" name="bnrc" value="<?php echo ($cvc["bnrc"]); ?>" maxlength="40"><br/>
    热门分类1：<input type="text" name="fla" value="<?php echo ($cvc["fla"]); ?>" maxlength="40"><br/>
    热门分类2：<input type="text" name="flb" value="<?php echo ($cvc["flb"]); ?>" maxlength="40"><br/>
    热门分类3：<input type="text" name="flc" value="<?php echo ($cvc["flc"]); ?>" maxlength="40"><br/>
    热门分类4：<input type="text" name="fld" value="<?php echo ($cvc["fld"]); ?>" maxlength="40"><br/>
    热门分类5：<input type="text" name="fle" value="<?php echo ($cvc["fle"]); ?>" maxlength="40"><br/>
    热门分类6：<input type="text" name="flf" value="<?php echo ($cvc["flf"]); ?>" maxlength="40"><br/>
    热门分类7：<input type="text" name="flg" value="<?php echo ($cvc["flg"]); ?>" maxlength="40"><br/>
    热门分类8：<input type="text" name="flh" value="<?php echo ($cvc["flh"]); ?>" maxlength="40"><br/>
    推荐课程1：<input type="text" name="tja" value="<?php echo ($cvc["tja"]); ?>" maxlength="40"><br/>
    推荐课程2：<input type="text" name="tjb" value="<?php echo ($cvc["tjb"]); ?>" maxlength="40"><br/>
    推荐课程3：<input type="text" name="tjc" value="<?php echo ($cvc["tjc"]); ?>" maxlength="40"><br/>
    推荐课程4：<input type="text" name="tjd" value="<?php echo ($cvc["tjd"]); ?>" maxlength="40"><br/>
    <input type="hidden" name="id" value="1">
 <br/><hr/>
    管理员密码：<input type="password" name="mm" maxlength="70"><br/>
    <input type="submit" value="确认设置">
</form>