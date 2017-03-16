<?php
namespace Admin\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function showorder() {
        if (I('post.mm','0','htmlspecialchars') == 'sjtu220'){
            $this->mazda();
        }
    }
    private function mazda() {
            $orderlist = M("orderlist");
            $list = $orderlist->order('id desc')->limit(2000)->select();
            $this->assign('list',$list);
            $this->display();
    }
}