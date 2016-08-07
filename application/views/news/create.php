<div class="wrapper section-inner">
    <div class="content">
        <br>

        <h1><?php echo $title; ?></h1>
        <br>
        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('news/create'); ?>
        <input class="title-news" type="text" name="title" required placeholder="Title">
        <br>
        <textarea class="text-news" name="text" cols="45" rows="6" required placeholder="Input text"> </textarea>
        <br>
        <input class="file-news" type="file" name="userfile">
        <br>
        <input class="button-news" type="submit" name="submit" value="Create NEWS">
        </form>
    </div>
</div>

