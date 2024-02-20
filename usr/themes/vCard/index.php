<?php
/**
 * vCard
 *
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <main class="main">
	    <div class="container gutter-top">
		    <div class="row sticky-parent">
			    <!-- Sidebar -->
                <?php $this->need('aside.php'); ?>
		        
				<!-- Content -->
		        <div class="col-12 col-md-12 col-xl-9">
				    <div class="box pb-0">
					    <!-- Menu -->
					    <?php $this->need('menu.php'); ?>
					    <!-- About -->
						<div class="pb-0 pb-sm-2">
		                    <h1 class="title title--h1 title__separate">关于我</h1>
						    <?php $this->options->sabout(); ?>
					    </div>
						
						<!-- What -->
						<div class="box-inner pb-0">
						    <h2 class="title title--h3">职业技能</h2>
							<div class="row">
							    <!-- Case Item1 -->
							    <div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
										<div>
										  <h3 class="title title--h5">熟练掌握 Unity 引擎，UGUI，动画系统，粒子系统，资源管理，性能优化，常用插件</h3>		
										</div>	
									</div>
								</div>
								
								<!-- Case Item2 -->
								<div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
									     <h3 class="title title--h5">熟练掌握 C#语言以及面向对象，设计模式有良好的代码习惯，了解 lua 等其他语言</h3>	
									</div>
								</div>
								
								<!-- Case Item3 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">熟练掌握 PC，安卓，IOS、Web 端发布、测试，调试和 HTC VIVE、体感设备等 SDK 对接</h3>	
								   </div>
								</div>

								<!-- Case Item4 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">熟练掌握网络通讯，数据结构，算法基础，AI，计算机硬件，操作系统，winfrom 开发等</h3>	
								   </div>
								</div>		
								
								<!-- Case Item5 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">熟悉开发流程，可以独立或团队合作开发项目，能撰写技术文档，有独立解决问题的能力</h3>	
									</div>
								</div>
								<!-- Case Item6 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">熟悉 PS，能制作修改 UI，了解 3DMAX，了解美术规范，能够与美工沟通交流、合作开发</h3>	
									</div>
								</div>
								<!-- Case Item7 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">熟悉 Linux 系统，数据库，运维技术，网络技术，服务器搭建等，能独立建站</h3>	
									</div>
								</div>		
							</div>	
						</div>
						
						<div class="box-inner pb-0">
						    <h2 class="title title--h3">工作经历</h2>
							<div class="row">
							    <!-- Case Item -->
							    <div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
									    <img class="case-item__icon" src="<?php $this->options->themeUrl('assets/icons/jxedt.png'); ?>" alt="" />
										<div>
									        <h3 class="title title--h5"><a href="https://www.jxedt.com/" target="_blank">58集团(驾考)</a></h3>
											<h3 class="title title--h5">2021.03 – 至今 Unity 3D 开发</h3>
										    <p class="case-item__caption">负责《驾校一点通》APP 中的3D模拟练车模块（科目二/科目三）功能开发、代码重构、产品迭代、前后端协作、UI /美术协作等</p>
										</div>	
									</div>
								</div>
								
								<!-- Case Item -->
								<div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
									    <img class="case-item__icon" src="<?php $this->options->themeUrl('assets/icons/sunvua.png'); ?>" alt="" />
										<div>
									        <h3 class="title title--h5"><a href="https://www.sunvua.com/" target="_blank">唐山旭华智能科技有限公司</a></h3>
											<h3 class="title title--h5">2020.04 – 2021.03 Unity 3D 开发</h3>
										    <p class="case-item__caption">U3D项目负责人，完成从立项到项目上线并迭代整个过程。包括需求沟通技术解决方案产品设计架构搭建协调美工，后端协作测试调试现场部署项目演示等</p>
										</div>
									</div>
								</div>
								
								<!-- Case Item -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								        <img class="case-item__icon" src="<?php $this->options->themeUrl('assets/icons/weltop.png'); ?>" alt="" />
										<div>
									        <h3 class="title title--h5"><a href="http://www.weltop.com.cn/" target="_blank">北京威远图易数字科技有限公司</a></h3>
											<h3 class="title title--h5">2018.03 - 2020.3 Unity 3D 开发</h3>
										    <p class="case-item__caption">负责部门U3D项目技术开发，包括软件架构搭建、协调团队合作开发、技术解决方案与开发项目所需要的工具类、插件、脚本等</p>
										</div>
								   </div>
								</div>
								
								<!-- Case Item -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									    <img class="case-item__icon" src="<?php $this->options->themeUrl('assets/icons/anxin.png'); ?>" alt="" />
										<div>
									        <h3 class="title title--h5"><a href="https://www.anxin99.com/" target="_blank">北京安信科创软件有限公司</a></h3>
											<h3 class="title title--h5">2016.11- 2018.03 Unity 3D 开发</h3>
										    <p class="case-item__caption">北京研发部unity项目组开发成员，参与仿真类与VR项目开发工作，并负责接入第三方设备，与第三方技术人员进行技术交流，合作开发以及产品演示、设备安装、技术支持等</p>
										</div>
									</div>
								</div>
							</div>	
						</div>

						<div class="box-inner pb-0">
						    <h2 class="title title--h3">自我评价</h2>
							<div class="row">
							    <!-- Case Item1 -->
							    <div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
										<div>
										  <h3 class="title title--h5">适应能力强，能吃苦，在工作期间能适应加班，有独立解决问题的能力</h3>		
										</div>	
									</div>
								</div>
								
								<!-- Case Item2 -->
								<div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
									     <h3 class="title title--h5">热爱IT、科技、游戏，喜欢逛科技网站、GitHub 等，初中时期DIY电脑</h3>	
									</div>
								</div>
								
								<!-- Case Item3 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">乐于助人，公司同事有问题愿意找我帮忙，上级接到任务也愿意交付给我负责完成</h3>	
								   </div>
								</div>

								<!-- Case Item4 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">团队协作意识强，可以协调团队，工作上与他人积极沟通、高效合作，喜欢集体活动</h3>	
								   </div>
								</div>		
								
								<!-- Case Item5 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">善于自主学习、钻研技术，自组搭建Nas，软路由，服务器，自学Lua、C++、H5等</h3>	
									</div>
								</div>
							</div>	
						</div>

						<div class="box-inner pb-0">
						    <h2 class="title title--h3">技能证书</h2>
							<div class="row">
							    <!-- Case Item1 -->
							    <div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
										<div>
										  <h3 class="title title--h5">高级数据库管理工程师证书</h3>		
										</div>	
									</div>
								</div>
								
								<!-- Case Item2 -->
								<div class="col-12 col-lg-6">
							        <div class="case-item box box__second">
									     <h3 class="title title--h5">OA办公自动化证书</h3>	
									</div>
								</div>
								
								<!-- Case Item3 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">C/C++软件开发证书</h3>	
								   </div>
								</div>

								<!-- Case Item4 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
								         <h3 class="title title--h5">全国计算机职业技术证书</h3>	
								   </div>
								</div>		
								
								<!-- Case Item5 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">信息系统管理证书</h3>	
									</div>
								</div>

								<!-- Case Item6 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">高级软件工程师证书</h3>	
									</div>
								</div>

								<!-- Case Item7 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">系统集成管理证书</h3>	
									</div>
								</div>

								<!-- Case Item8 -->
								<div class="col-12 col-lg-6">
								    <div class="case-item box box__second">
									     <h3 class="title title--h5">机动车驾驶证</h3>	
									</div>
								</div>
							</div>	
						</div>						

						<?php $this->need('portfolio.php'); ?>


						<!-- Testimonials -->
						<!-- div class="box-inner box-inner--white">
						    <h2 class="title title--h3">最新回复</h2>
						
						    <div class="swiper-container js-carousel-review">
                                <div class="swiper-wrapper">

								    <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=false&pageSize=8')->to($comments); ?>
									<?php while($comments->next()): ?>  
	
                                    <div class="swiper-slide review-item">
										<svg class="avatar avatar--80" viewBox="0 0 84 84">
                                            <g class="avatar__hexagon">
                                                <image xlink:href="<?php $email=$comments->mail; $imgUrl = getGravatar($email);echo ''.$imgUrl.''; ?>" height="100%" width="100%" />
                                            </g>
                                        </svg>
									    <h4 class="title title--h5"><?php $comments->author(); ?><?php if ($comments->authorId !=0): ?><?php endif; ?></h4>
										<p class="review-item__caption"><?php $comments->excerpt(25, '...'); ?></p>
									</div>
									<?php endwhile; ?>
									
									
                                </div>
    
                                <div class="swiper-pagination"></div>
                            </div>
						</div-->
						

					</div>
					
					<!-- Footer -->
					<footer class="footer"><?php if($this->options->footnav){$this->options->footnav();} ?></footer>
		        </div>
			</div>
		</div>	
    </main>

    <?php $this->need('footer.php'); ?>
