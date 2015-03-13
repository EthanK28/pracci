<form class="col-md-10" method="post" action="/ci/index.php/topic/add">
    <?php echo validation_errors(); ?>
    제목 : <input type="text" name="title"/>
    본문 :
    <textarea name="description"></textarea>
    <input type="submit"/>
</form>
<script src="/ci/static/lib/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>