<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $homepage = M("homepage");
        $cdt = $homepage -> find(1);
        $listall = M("listall");
        $mapz['cph'] = array('eq',$cdt['bnra']);
        $this->assign('elisez', $listall -> where($mapz) -> find());
        $mapy['cph'] = array('eq',$cdt['bnrb']);
        $this->assign('elisey', $listall -> where($mapy) -> find());
        $mapx['cph'] = array('eq',$cdt['bnrc']);
        $this->assign('elisex', $listall -> where($mapx) -> find());
        
        $mapb['cph'] = array('in',array($cdt['tja'],$cdt['tjb'],$cdt['tjc'],$cdt['tjd']));
        $this->assign('tj', $listall -> where($mapb) -> select());

        $sort = M("sort");
        $mapc['abbr'] = array('in',array($cdt['fla'],$cdt['flb'],$cdt['flc'],$cdt['fld']));
        $this->assign('fl', $sort->where($mapc)->select());

        $mapg['abbr'] = array('in',array($cdt['fle'],$cdt['flf'],$cdt['flg'],$cdt['flh']));
        $this->assign('flg', $sort->where($mapg)->select());
        
        $this->display();
    }
    public function assort($type=AAA){
        $listall = M("listall");
        $mapd['fla'] = array('eq',$type);
        $count = $listall->where($mapd)->count();
        $page = new \Think\Page($count,25);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        foreach ($mapd as $key => $val){
            $page -> parameter[$key] = urlencode($val);
        }
        $show = $page->show();
        $list = $listall->where($mapd)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);

        $sort = M("sort");
        $mapj['abbr'] = array('eq',$type);
        $this->assign('flm', $sort->where($mapj)->find());
        $this->display();
    }
}