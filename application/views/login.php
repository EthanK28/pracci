<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">로그인</h4>
            </div>
            <form  action="<?=site_url('/auth/authentication?returnURL='.rawurlencode($returnURL))?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">아이디</label>
                        <input type="text " name="email" class="form-control" id="email" placeholder="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">비밀번호</label>
                        <input type="password" name="password" class="form-control" id="passwod" placeholder="Password">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn-primary btn" value="로그인"/>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->

