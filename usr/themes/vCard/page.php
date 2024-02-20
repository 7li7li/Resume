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

                        <!-- Post -->
                        <div class="pb-3">
                            <header class="header-post">
                                
                                <h1 class="title title--h1"><?php $this->title(); ?></h1>
                            
                             <?php if ($this->fields->nbimg == 'able'):?>
							 <div class="header-post__image-wrap">
                                    <img class="cover lazyload" src="<?php $this->fields->img(); ?>" alt="" />
                             </div>
                             <?php endif; ?>
							</header>
                            <div class="caption-post">
                                <?php $this->content(); ?>
                            </div>
                          

                            <!--footer class="footer-post">
                                <a class="footer-post__share" href="http://facebook.com"><i class="font-icon icon-facebook"></i><span>Facebook</span></a>
                                <a class="footer-post__share" href="http://twitter.com"><i class="font-icon icon-twitter"></i><span>Twitter</span></a>
                                <a class="footer-post__share" href="http://linkedin.com"><i class="font-icon icon-linkedin2"></i><span>Linkedin</span></a>
                            </footer-->
                        </div>

                        <div class="box-inner box-inner--rounded box-coms">  

                            <!-- Comment form -->
                          

                            <?php $this->need('comments.php'); ?>



                        </div>
                    </div>

                    <!-- Footer -->
                    <footer class="footer"><?php if($this->options->footnav){$this->options->footnav();} ?></footer>
                </div>

            </div>
        </div>
    </main>

  <?php $this->need('footer.php'); ?>