

<div class="wrapper section-inner">
    <div class="content">
        <div class="posts" >
        <?php foreach ($news as $news_item): ?>
            <div class="post post-38 type-post status-publish format-gallery has-post-thumbnail sticky hentry category-design tag-braun tag-dieter-rams post_format-post-format-gallery">
                <h2 class="post-title"><?php echo $news_item['title'] ?></h2>
                <div class="post-image">

                    <?php echo '<img width="400" height="200" src="/testNews/img/' . $news_item['image'] . '" alt="" >' ?>

                    <a class="sticky-tag">
                        <span class="fa fw fa-star"></span>
                    </a>

                </div> <!-- /post-image -->

                <div class="post-header">
                    <p class="post-meta">
                        <a href=""><?php echo $news_item['date'] ?></a></p>
                    <a href="<?php echo "news/" . $news_item['slug'] . "?id=" . $news_item['id']; ?>">View</a>
                </div> <!-- /post-header -->
            </div>

        <?php endforeach; ?>
    </div>
        </div>

    <div class="sidebar">

    </div>
</div>