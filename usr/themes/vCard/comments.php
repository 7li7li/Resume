<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>" class="comment-body">
        <div class="comment-author">
            <?php $comments->gravatar('40', ''); ?>
            <cite class="fn"><?php CommentAuthor($comments); ?></cite><span class="says"><?php _e('说道：'); ?></span>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
        </div>
        <?php $comments->content(); ?>
        <div class="reply">
            <span class="comment-reply-link"><?php $comments->reply(); ?></span>
        </div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>

<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
        <h3 id="response" class="comment-reply-title"><?php _e('发表评论'); ?></h3>
        <form id="new_comment_form" method="post" action="<?php $this->commentUrl() ?>" _lpchecked="1">

        <div class="new_comment"><textarea name="text" rows="3" class="textarea_box" style="height: auto;" placeholder="人生在世，难免会写点错别字，没事儿~"></textarea></div>

        <div class="comment_triggered" style="display: block;">
            <div class="input_body">

                <ul class="ident">
                    <li>
                        <input type="text" name="author" placeholder="昵称*" value="<?php $this->remember('author'); ?>">
                    </li>

                    <li>
                        <input type="mail" name="mail" placeholder="邮件*" value="<?php $this->remember('mail'); ?>">
                    </li>

                    <li>
                        <input type="text" name="url" placeholder="网址" value="<?php $this->remember('url'); ?>">
                    </li>
                </ul>

            <input type="submit" value="提交评论" class="comment_submit_button c_button btn">

            </div>
        </div>

        </form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
	<h4 class="comments-title"><span><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></span></h4>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('←','→','2','...'); ?>
    
    <?php endif; ?>

</div>