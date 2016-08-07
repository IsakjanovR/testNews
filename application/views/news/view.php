

<div class="wrapper section-inner">
    <div class="content">
        <div
            class="single post type-post status-publish format-gallery hentry category-lifestyle category-productivity category-work tag-gear tag-grovemade tag-stationary post_format-post-format-gallery">
            <div class="post-header">
                <h1 class="post-title"><a href=""><?php  echo  $news['title']; ?></a></h1>

                <div class="post-meta">
                    <span class="resp">Posted</span> <span class="post-meta-author">by
                        <a href=""><?php echo $users['username']?></a></span> <span
                        class="post-meta-date">on <a href=""><?php  echo $news['date']; ?></a></span>
                </div> <!-- /post-meta -->
            </div> <!-- /post-header -->

            <div class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative; height: 539px;">
                                <?php echo '<img class="attachment-post-image size-post-image" sizes="(max-width: 816px) 100vw, 816px" draggable="false" width="816" height="544" src="/testNews/img/' . $news['image'] . '" alt="" >' ?>
                </div>
                <br>
            </div>
            <div class="clear"></div>
            <div class="post-inner">
                <?php echo $news['text'];?>
                <div class="post-content">
                </div>
                <div class="clear"></div>



            </div> <!-- /post-inner -->

            <div class="clear"></div>

        </div> <!-- /post -->

        <div class="respond-container">
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title"><span class="fa fw fa-pencil"></span>Leave a Reply
                    <small><a rel="nofollow" id="cancel-comment-reply-link"
                              href="/themes/rowling/walnut-stationary-from-grovemade/#respond" style="display:none;">Cancel
                            reply</a></small>
                </h3>
                <form action="http://andersnoren.se/themes/rowling/wp-comments-post.php" method="post" id="commentform"
                      class="comment-form">
                    <p class="comment-form-comment">
                        <label for="comment">Comment<span class="required">*</span></label>
                        <textarea id="comment" name="comment" cols="45" rows="6" required=""></textarea>
                    </p>
                    <p class="comment-form-author">
                        <label for="author">Name<span class="required">*</span></label>
                        <input id="author" name="author" type="text" value="" size="30">
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Email<span class="required">*</span></label>
                        <input id="email" name="email" type="text" value="" size="30">
                    </p>
                    <p class="comment-form-url">
                        <label for="url">Website</label>
                        <input id="url" name="url" type="text" value="" size="30">
                    </p>
                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                                  value="Post Comment"> <input type="hidden" name="comment_post_ID"
                                                                               value="212" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                    <p style="display: none;"><input type="hidden" id="akismet_comment_nonce"
                                                     name="akismet_comment_nonce"
                                                     value="516c77df55"></p>
                    <p style="display: none;"></p>                <input type="hidden" id="ak_js" name="ak_js"
                                                                         value="1470503248025"></form>
            </div>
        </div>


    </div>
</div>
<?php //endforeach; ?>