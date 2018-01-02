<?php 
namespace Admin\Controller;

use Think\Controller;

class CommentController extends Controller
{
	public function index(){
        // .模糊查询房源名称+判断是否查到值
       /* $list = M('comment')
                ->field('gid')
                ->where(array('gid'=>array('eq',$_POST['gid'])))
                ->select();*/

        $comment = M('comment');//实例化comment对象
        $count = $comment->count();//查询满足条件的总记录数
        $Page = new \Think\Page($count,3);//实例化分页类 传入总数和每页显示数
        // 定制分页样式
        $Page->setConfig('header','<span class="total">共<b>%TOTAL_ROW%</b>条数据，第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $show = $Page->show();//分页显示输出
        // 进行分页数据查询 limit方法的参数要使用page类的属性
        $list = $comment
                ->order('createtime desc')
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();
        // V($list);exit;
        $this->assign('list', $list);//赋值数据集
        $this->assign('page',$show);//赋值分页输出
		$this->display('Comment/index');//输出模板
	}

    public function delete(){
        if (M('comment')->delete($_GET['id']) > 0) {
            $this->success("删除成功,ヾ(￣▽￣)Bye~Bye~",U('Comment/index'));
        } else {
            $this->error("删除失败,我就知道你舍不得额...");
        }
    }
    

}