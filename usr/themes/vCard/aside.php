<aside class="col-12 col-md-12 col-xl-3">
				    <div class="sidebar box pb-0 sticky-column">
						<svg class="avatar avatar--180" viewBox="0 0 188 188">
                            <g class="avatar__box">
                                <image xlink:href="<?php $this->options->logoUrl();?>" height="100%" width="100%" />
                            </g>
                        </svg>
						<div class="text-center">
						    <!--div><input class="wb-switch" id="J_themesSwitchBtn" type="checkbox" onclick="javascript:switchNightMode()"> </div-->

						    <h3 class="title title--h3 sidebar__user-name"><?php $this->options->sidename() ?></h3>
							
							<div class="badge badge--gray"><?php $this->options->sidework() ?></div>
							
							<!-- Social -->
		                    <div class="social">
								<a class="social__link" data-toggle="tooltip" href="https://www.7li7li.cn/" target="_blank" title="主页"><i class="font-icon icon-page"></i></a>
								<a class="social__link" data-toggle="tooltip" href="https://blog.7li7li.cn/" target="_blank" title="博客"><i class="font-icon icon-blog"></i></a>
		                        <a class="social__link" data-toggle="tooltip" href="https://github.com/7li7li" target="_blank" title="GitHub"><i class="font-icon icon-github"></i></a>
		                        <a class="social__link" data-toggle="tooltip" href="https://www.7li7li.cn/qq/" target="_blank" title="QQ"><i class="font-icon icon-twitter"></i></a>
								<a class="social__link" data-toggle="tooltip" href="https://www.7li7li.cn/wx/" target="_blank" title="微信"><i class="font-icon icon-facebook"></i></a>
		                    </div>
						</div>
						
						<div class="sidebar__info box-inner box-inner--rounded">
		                    <ul class="contacts-block">		
								<!--li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="主页">
							        <i class="font-icon icon-home"></i><a href="https://www.7li7li.cn", target="_blank"><?php $this->options->sidehome() ?></a>
							    </li-->
								<li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="工作经验">
							        <i class="font-icon icon-work"></i><?php $this->options->sideworkyear() ?>
							    </li> 
					            <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="出生日期">
							        <i class="font-icon icon-calendar"></i><?php $this->options->sidetime() ?>
							    </li>
						        <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="居住地">
							        <i class="font-icon icon-location"></i><?php $this->options->sidediz() ?>
							    </li>
						        <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
							       <i class="font-icon icon-envelope"></i><?php $this->options->sidemail() ?>
							    </li>
						        <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="手机">
							        <i class="font-icon icon-phone"></i><?php $this->options->sidedh() ?>
							    </li>
						        <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="学校">
							        <i class="font-icon icon-school"></i><?php $this->options->sideschool() ?>
							    </li> 
					        </ul>
							
							<a class="btn btn--blue-gradient" href="http://localhost/doc/resume.pdf", download= "张晨光-U3D-7年.pdf"><i class="font-icon icon-download"></i> 下载PDF版简历</a>
						</div>
					</div>	
		        </aside>



			