<form class="col-md-10" method="post" action="/ci/index.php/topic/add">
    <?php echo validation_errors(); ?>
    제목 : <input type="text" name="title"/>
    본문 :
    <textarea name="description"></textarea>
    <div class="form-control">
    <input type="submit"/>
    </div>
</form>
<script src="/ci/static/lib/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description', {
    	filebrowserUploadUrl: '/ci/index.php/topic/upload_receive_from_ck'
    });
</script>