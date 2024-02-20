<!-- Gallery -->
						<div class="pb-0">
							<!-- Filter -->
                            <div class="select">
			                    <span class="placeholder">Select category</span>
			                    <ul class="filter">
			                        <li class="filter__item">Category</li>
									 <?php navtopinfo(); ?>   
				                    <li class="filter__item active" data-filter="*"><a class="filter__link active" href="https://resume.7li7li.cn/category/project/">项目展示</a></li>
				             
			                    </ul>
			                    <input type="hidden" name="changemetoo"/>
		                    </div>

							<!-- Content -->
							<div class="gallery-grid js-masonry js-filter-container">
							    <div class="gutter-sizer"></div>

								<?php $this->widget('Widget_Archive@index1', 'pageSize=6&type=category', 'mid=1')->to($categoryPosts); ?>
                                <?php while($categoryPosts->next()): ?>
							    <!-- Item 1 -->
							    <figure class="gallery-grid__item <?php $categoryPosts->fields->leix(); ?>">
								    <div class="gallery-grid__image-wrap">
                                        <img class="gallery-grid__image cover lazyload" src="<?php $categoryPosts->fields->img(); ?>" data-zoom alt="" />
									</div>
                                    <figcaption class="gallery-grid__caption">
									    <a href="<?php $categoryPosts->permalink() ?>"><h4 class="title gallery-grid__title"><?php $categoryPosts->title(); ?></h4></a>
										<span class="gallery-grid__category"><?php $categoryPosts->fields->leix(); ?></span>
									</figcaption>
                                </figure>
								<?php endwhile; ?>

								

			

							  
							</div>
						</div>