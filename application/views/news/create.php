<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('news/create'); ?>
<label for="title">TITLE</label>
<input type="text" name="title" required>
<br>
<label for="text">TEXT</label>
<textarea name="text" required></textarea>
<br>
<input type="file" name="userfile">
<br>
<input type="submit" name="submit" value="Create NEWS">
</form>

