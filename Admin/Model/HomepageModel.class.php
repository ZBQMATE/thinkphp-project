<?php
namespace Admin\Model;
use Think\Model;
class HomepageModel extends Model {
    protected $_validate = array(
        array('mm','sjtu220','管理员密码不正确！','0','equal'),
        array('bnra','require','内容不完善！'),
        array('bnrb','require','内容不完善！'),
        array('bnrc','require','内容不完善！'),
        array('fla','require','内容不完善！'),
        array('flb','require','内容不完善！'),
        array('flc','require','内容不完善！'),
        array('fld','require','内容不完善！'),
        array('fle','require','内容不完善！'),
        array('flf','require','内容不完善！'),
        array('flg','require','内容不完善！'),
        array('flh','require','内容不完善！'),
        array('tja','require','内容不完善！'),
        array('tjb','require','内容不完善！'),
        array('tjc','require','内容不完善！'),
        array('tjd','require','内容不完善！'),
    );
}