<?php
namespace Home\Model;
use Think\Model;
class OrderlistModel extends Model {
    protected $_validate = array(
        array('khdh','require','请输入联系电话。'),
    );
}