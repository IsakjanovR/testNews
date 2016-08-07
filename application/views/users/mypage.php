<div class="wrapper section-inner">
    <div class="content">
        <p>Пользователь <?php echo $userInf['username']; ?>
            в личном кабинеты вы можете публиковать новости
            <a href="http://localhost/testNews/news/create">Написать новость</a>
            а так же просматривать все новости которые были опубликованны вами</p>
<div class="posts">
        <?php foreach ($news_user as $news): ?>
            <div
                class="post post-38 type-post status-publish format-gallery has-post-thumbnail sticky hentry category-design tag-braun tag-dieter-rams post_format-post-format-gallery">
                <h2 class="post-title"><?php echo $news['title'] ?></h2>
                <div class="post-image">

                    <?php echo '<img width="400" height="200" src="/testNews/img/' . $news['image'] . '" alt="" >' ?>

                    <a class="sticky-tag">
                        <span class="fa fw fa-star"></span>
                    </a>

                </div> <!-- /post-image -->

                <div class="post-header">
                    <p class="post-meta">
                        <a href=""><?php echo $news['date'] ?></a></p>
                    <a href="<?php echo "news/" . $news['slug'] . "?id=" . $news['id']; ?>">View</a>
                </div> <!-- /post-header -->
            </div>
        <?php endforeach;?>
</div>
    </div>
</div>
