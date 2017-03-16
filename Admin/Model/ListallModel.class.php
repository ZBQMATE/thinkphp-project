<?php
namespace Admin\Model;
use Think\Model;
class ListallModel extends Model {
    protected $_validate = array(
        array('mm','sjtu220','管理员密码不正确！','0','equal'),
        array('cph','require','内容不完善！'),
        array('fla','require','内容不完善！'),
        array('cpm','require','内容不完善！'),
        array('xcbta','require','内容不完善！'),
        array('xcya','require','内容不完善！'),
        array('xcbtb','require','内容不完善！'),
        array('xcyb','require','内容不完善！'),
        array('xcbtc','require','内容不完善！'),
        array('xcyc','require','内容不完善！'),
        array('cjs','require','内容不完善！'),
        array('fy','require','内容不完善！'),
        array('fysm','require','内容不完善！'),
        array('mbrq','require','内容不完善！'),
        array('sjsm','require','内容不完善！'),
        array('ddsm','require','内容不完善！'),
        array('ydl','require','内容不完善！'),
        array('tdbta','require','内容不完善！'),
        array('tdjsa','require','内容不完善！'),
        array('tdbtb','require','内容不完善！'),
        array('tdjsb','require','内容不完善！'),
        array('nfa','require','内容不完善！'),
        array('sja','require','内容不完善！'),
        array('sjjsa','require','内容不完善！'),
        array('nfb','require','内容不完善！'),
        array('sjba','require','内容不完善！'),
        array('sjjsba','require','内容不完善！'),
        array('sjbb','require','内容不完善！'),
        array('sjjsbb','require','内容不完善！'),
        array('jgdz','require','内容不完善！'),
        array('lxdh','require','内容不完善！'),
    );
}