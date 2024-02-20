<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vCard'));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
if($_POST["type"]=="备份模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vCardbf'))){
$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:vCardbf');
$updateRows= $db->query($update);
echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
if($ysj){
     $insert = $db->insert('table.options')
    ->rows(array('name' => 'theme:vCardbf','user' => '0','value' => $ysj));
     $insertId = $db->query($insert);
echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}
}
}
if($_POST["type"]=="还原模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vCardbf'))){
$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vCardbf'));
$bsj = $sjdub['value'];
$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:vCard');
$updateRows= $db->query($update);
echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
<?php
}else{
echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
}
}
if($_POST["type"]=="删除备份数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vCardbf'))){
$delete = $db->delete('table.options')->where ('name = ?', 'theme:vCardbf');
$deletedRows = $db->query($delete);
echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
}
}
    }


  
  
    /**
	 *  设置样式+面板
	 */	 
	echo '<link rel="stylesheet" href="/usr/themes/vCard/assets/css/setting.spimes.css"><link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Noto+Serif+SC:300&display=swap" rel="stylesheet"><script src="//cdn.staticfile.org/jquery/3.4.1/jquery.min.js"></script>';

	echo '<div class="miracles-pannel">
	<h1>vCard设置面板</h1>
	<p>vCard主题为博客、自媒体、资讯类的网站设计开发，自适应兼容手机、平板设备的团队，工作室门户主题，精心打磨的一处处细节。只为让您的站点拥有速度与优雅兼具的极致体验。
</p>
     
   	  <form class="protected" action="?MiraclesBackup" method="post">
        <input type="submit" name="type" class="miracles-backup-button backup" value="备份模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button recover" value="还原模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button delete" value="删除备份数据" />
	  </form>
      
	</div>';



   
  
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('<h2 id="div-1">常规设置 Info</h2><hr>站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个logo,留空则会显示网站文字标题'));
    $form->addInput($logoUrl);

	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($favicon);
  
    $sabout = new Typecho_Widget_Helper_Form_Element_Textarea('sabout', NULL, NULL, _t('关于我'), _t(''));
    $form->addInput($sabout);



    $sidehome = new Typecho_Widget_Helper_Form_Element_Text('sidehome', NULL, NULL, _t('主页'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($sidehome);

    $sidename= new Typecho_Widget_Helper_Form_Element_Text('sidename', NULL, NULL, _t('姓名'), _t('姓名'));
    $form->addInput($sidename);

    $sidework = new Typecho_Widget_Helper_Form_Element_Text('sidework', NULL, NULL, _t('岗位'), _t('岗位'));
    $form->addInput($sidework);

    $sideschool = new Typecho_Widget_Helper_Form_Element_Text('sideschool', NULL, NULL, _t('学校'), _t('毕业院校'));
    $form->addInput($sideschool);

    $sideworkyear = new Typecho_Widget_Helper_Form_Element_Text('sideworkyear', NULL, NULL, _t('工作经验'), _t('工作经验'));
    $form->addInput($sideworkyear);

	$sidetime = new Typecho_Widget_Helper_Form_Element_Text('sidetime', NULL, NULL, _t('边栏出生日期'), _t('199x-xx'));
    $form->addInput($sidetime);

	$sidediz = new Typecho_Widget_Helper_Form_Element_Text('sidediz', NULL, NULL, _t('居住地'), _t('北京-东城'));
    $form->addInput($sidediz);

	$sidemail = new Typecho_Widget_Helper_Form_Element_Text('sidemail', NULL, NULL, _t('邮箱'), _t('xxx@xx.com'));
    $form->addInput($sidemail);

	$sidedh = new Typecho_Widget_Helper_Form_Element_Text('sidedh', NULL, NULL, _t('电话'), _t('138-0013-8000'));
    $form->addInput($sidedh);

  
	$webcss = new Typecho_Widget_Helper_Form_Element_Textarea('webcss', NULL, NULL, _t('自定义CSS'), _t('自定义样式'));
    $form->addInput($webcss);

	$tophtml = new Typecho_Widget_Helper_Form_Element_Textarea('tophtml', NULL, NULL, _t('页头代码'), _t('添加在页面</head>前,比如：站长平台HTML验证代码,谷歌分析代码'));
    $form->addInput($tophtml);

	$foothtml = new Typecho_Widget_Helper_Form_Element_Textarea('foothtml', NULL, NULL, _t('页脚代码'), _t('添加在页面</body>前,比如：客服工具等js代码，注意 统计代码不在这里填！！'));
    $form->addInput($foothtml);

	
  
    $navtops = new Typecho_Widget_Helper_Form_Element_Text('navtops', NULL, NULL, _t('作品导航菜单'), _t('"标题|" + 换行 + "标题|" 形式,顺序不要弄错了'));
    $form->addInput($navtops);

  
	$footnav = new Typecho_Widget_Helper_Form_Element_Textarea('footnav', NULL, NULL, _t('页脚版权设置'), _t('页脚版权/备案信息，比如：版权所有 本站内容未经书面许可,禁止一切形式的转载。粤ICP备17062710号-1. All rights reserved.'));
    $form->addInput($footnav);

	
	$baiduappdi = new Typecho_Widget_Helper_Form_Element_Text('baiduappdi', NULL, NULL, _t('<h2 id="div-8">SEO设置 Info</h2><hr>配置熊掌号 APPID'), _t('在这里填入你的个人配置熊掌号 APPID,不填写则为不开启,可以和自动推送有现成的插件：<b style="color: red;">BaiduSubmit</b> 配合推送,此处只是配置熊掌号设置,还需插件配合推送出去,才达到优化效果'));
    $form->addInput($baiduappdi);
  

}

//后台编辑器添加功能
function themeFields($layout) {


    $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('封面图'), _t('在这里填入一个图片 URL 地址, 以添加显示本文的缩略图，留空则显示默认缩略图'));
    $img->input->setAttribute('class', 'w-100');
    $layout->addItem($img);

	//文章出现导图
    $nbimg = new Typecho_Widget_Helper_Form_Element_Radio('nbimg',
        array('able' => _t('显示'),
              'bable' => _t('不显示'),		      
        ),
        'bable', _t('文章导图'), _t('文章出现导图'));
    $layout->addItem($nbimg);

	
    
    $leix = new Typecho_Widget_Helper_Form_Element_Text('leix', NULL, NULL, _t('文章类型'), _t(''));
    $leix->input->setAttribute('class', 'w-100');
    $layout->addItem($leix);
	

	
}

/**
* 阅读统计
* 调用<?php get_post_view($this); ?>
*/
function Postviews($archive) {
    $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `'.$db->getPrefix().'contents` ADD `views` INT(10) DEFAULT 0;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) {
        $cookie = Typecho_Cookie::get('contents_views');
        $cookie = $cookie ? explode(',', $cookie) : array();
        if (!in_array($cid, $cookie)) {
            $db->query($db->update('table.contents')
                ->rows(array('views' => (int)$exist+1))
                ->where('cid = ?', $cid));
            $exist = (int)$exist+1;
            array_push($cookie, $cid);
            $cookie = implode(',', $cookie);
            Typecho_Cookie::set('contents_views', $cookie);
        }
    }
    echo $exist == 0 ? '0' : $exist.' ';
}

/**
* 评论者主页链接新窗口打开
* 调用<?php CommentAuthor($comments); ?>
*/
function CommentAuthor($obj, $autoLink = NULL, $noFollow = NULL) {    //后两个参数是原生函数自带的，为了保持原生属性，我并没有删除，原版保留
    $options = Helper::options();
    $autoLink = $autoLink ? $autoLink : $options->commentsShowUrl;    //原生参数，控制输出链接（开关而已）
    $noFollow = $noFollow ? $noFollow : $options->commentsUrlNofollow;    //原生参数，控制输出链接额外属性（也是开关而已...）
    if ($obj->url && $autoLink) {
        echo '<a href="'.$obj->url.'"'.($noFollow ? ' rel="external nofollow"' : NULL).(strstr($obj->url, $options->index) == $obj->url ? NULL : ' target="_blank"').'>'.$obj->author.'</a>';
    } else {
        echo $obj->author;
    }
}



//获取Gravatar头像 QQ邮箱取用qq头像
function getGravatar($email, $s = 96, $d = 'mp', $r = 'g', $img = false, $atts = array())
{
preg_match_all('/((\d)*)@qq.com/', $email, $vai);
if (empty($vai['1']['0'])) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($atts as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
}else{
    $url = 'https://q2.qlogo.cn/headimg_dl?dst_uin='.$vai['1']['0'].'&spec=100';
}
return  $url;
}








// 会员页判断是否会员id
function userok($id){
$db = Typecho_Db::get();
$userinfo=$db->fetchRow($db->select()->from ('table.users')->where ('table.users.uid=?',$id));
return $userinfo;
}

/**
* 判断时间区间
*
* 使用方法  if(timeZone($this->date->timeStamp)) echo 'ok';
*/
function timeZone($from){
$now = new Typecho_Date(Typecho_Date::gmtTime());
return $now->timeStamp - $from < 24*60*60 ? true : false;
}





/**
 * 高级导航菜单
 */
function navtopinfo()
{
	$settings = Helper::options()->navtops;	
	$navtops_list = array();
	

	if (strpos($settings,'|')) {
			//解析关键词数组
			$kwsets = array_filter(preg_split("/(\r|\n|\r\n)/",$settings));
			foreach ($kwsets as $kwset) {
			$navtops_list[] = explode('|',$kwset);
			}
		}
	ksort($navtops_list);  //对关键词排序，短词排在前面
	
    if($navtops_list){
        $readnum = 0;
		$i = 0;
		$j = 1;
		$z = 2;
        foreach ($navtops_list as $key => $val) {
			
            $title = $val[$i]; 
			
			$str = '<li class="filter__item" data-filter=".'.$title.'"><a class="filter__link" href="#filter">'.$title.'</a></li>';	
           

                $readnum += 1;
				echo $str;
                //$content = substr_replace($content,$str,$str_index,$len);
                //$content = $this->str_replace_limit($title,$str,$content,$this->limit);
          
            if($readnum == 12) {
			//匹配到12个退出
			$i += 3;
            $j += 3;
            $z += 3;
            }
		}
    }
}

