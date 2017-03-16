<?php
namespace Admin\Controller;
use Think\Controller;
class EditController extends Controller{
    public function insert(){
        $edit = D('listall');
        if ($edit->create()){
            $result = $edit->add();
            if ($result){
                $upload = new \Think\Upload();
                $upload -> maxSize = 103000 ;
                $upload -> exts = array('jpg','jpeg') ;
                $upload -> rootPath = './Public/picture/' ;
                $upload -> savePath = './private/' ;
                $upload -> saveName = '';
                $upload -> autoSub = false ;
                $info = $upload->upload();
                if($info){
                    $this->success('数据添加上传成功！');
                }
                else{
                    $this->error($upload->getError());
                }
            }
            else{
                $this->error('数据添加失败！');
            }
        }
        else{
            $this->error($edit->getError());
        }

    }
    public function delete(){
        if (I('post.mm','0','htmlspecialchars') == 'sjtu220'){
            $cph=I('post.num','0','htmlspecialchars');
            $delete = M('listall');
            if ($delete -> where("cph='".$cph."'") -> delete()){
                $patha='./Public/picture/private/'.$cph.'1.jpg';
                $resa = unlink($patha);
                $pathb='./Public/picture/private/'.$cph.'2.jpg';
                $resb = unlink($pathb);
                $pathc='./Public/picture/private/'.$cph.'3.jpg';
                $resc = unlink($pathc);
                $pathd='./Public/picture/private/'.$cph.'4.jpg';
                $resd = unlink($pathd);
                $pathe='./Public/picture/private/'.$cph.'5.jpg';
                $rese = unlink($pathe);
                $pathf='./Public/picture/private/'.$cph.'6.jpg';
                $resf = unlink($pathf);
                if ($resa and $resb and $resc and $resd and $rese and $resf){
                    $this->success('该课程已成功删除！');
                }
                else{
                    $this->error('无法删除配图');
                }

            }
            else{
                $this->error('删除失败，请检查输入！');
            }
        }
        else{
            $this->error('管理员密码不正确！');
        }

    }
}