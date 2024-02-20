 <div class="circle-menu">
						    <div class="hamburger">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
						</div>
						<div class="inner-menu">
						    <ul class="nav">
                                <li class="nav__item"><a class="active" href="<?php $this->options->siteUrl(); ?>">首页</a></li>
								<?php $this->widget('Widget_Metas_Category_List@options','ignore=21')->to($category); ?>
					            <?php while($category->next()): ?>
								<li class="nav__item"><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>
								<?php endwhile; ?>
								
								 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		                        <?php while($pages->next()): ?>
                               <li class="nav__item"> <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
								<?php endwhile; ?>
                            </ul>
						</div>
						