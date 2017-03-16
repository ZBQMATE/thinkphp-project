<?php
namespace Admin\Controller;
use Think\Controller;
class HomepageController extends Controller {
    public function alter(){
        $Chan=M('homepage');
        $this->assign('cvc',$Chan->find(1));
        $this->display();
    }
    public function ass(){
        $Shery=D('homepage');
        if ($Shery->create()){
            $result = $Shery->save();
            if ($result){
                $this->success('修改成功！');
            }
            else{
                $this->error('发生错误！');
            }
        }
        else{
            $this->error($Shery->getError());
        }
    }
}