<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {
    public function info($no=T1){
        $listall = M("listall");
        $mape['cph'] = array('eq',$no);
        $this->assign('fit',$listall->where($mape)->find());
        $this->display();
    }
    public function order(){
        $orderlist = D('orderlist');
        if ($orderlist->create()){
            $result=$orderlist->add();
            if($result){
                $this->success('您已成功预约！');
            }
            else{
                $this->error('提交失败，请稍后再试。');
            }
        }
        else{
            $this->error($orderlist->getError());
        }
    }
}