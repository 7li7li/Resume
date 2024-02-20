<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

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
						<div class="pb-2">
		                    <h1 class="title title--h1 title__separate"><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array('category'  =>  _t('%s ')), '', ''); ?></h1>
					    </div>

						<!-- News -->
						<div class="news-grid pb-0">

						    <?php if ($this->have()): ?>
    	                    <?php while($this->next()): ?>
							<!-- Post -->
							<article class="news-item box">
							    <div class="news-item__image-wrap overlay overlay--45">
								    <div class="news-item__date"><?php $this->date('F j, Y'); ?></div>
									<a class="news-item__link" href="<?php $this->permalink() ?>"></a>
									<?php if ($this->fields->img): ?>
								    <img class="cover lazyload" src="<?php $this->fields->img(); ?>" alt="" />
									<?php else: ?>
                                    <img class="cover lazyload" src="<?php $this->options->themeUrl(); ?>images/thumbnail.png" alt="">
									<?php endif; ?>
								</div>
								<div class="news-item__caption">
								    <h2 class="title title--h4"><?php $this->title() ?></h2>
									<p><?php $this->excerpt(50, '...');?></p>
								</div>
							</article>
                            <?php endwhile; ?>
                            <?php endif; ?>
							
						</div>
					</div>
					
					<!-- Footer -->
					<footer class="footer"><?php if($this->options->footnav){$this->options->footnav();} ?></footer>
		        </div>
			</div>
		</div>	
    </main>

     <?php $this->need('footer.php'); ?>