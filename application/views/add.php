
<?php echo validation_errors(); ?>
<form method="post" action="/ci/index.php/topic/add" class="col-md-10">
    <div class="form-group">
        <input type="text" name="title" placeholder="제목" class="col-xs-12"/>
    </div>
    <div class="form-group">
        <textarea name="description" placeholder="본문" rows="15" class="col-xs-12"></textarea>
    </div>
    <input type="submit" class="btn btn-default"/>
</form>