<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <h2>Đăng bài viết</h2>
                <div class="x_title"></div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="admin/post/add">
                        <!-- <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post_tile">Tiêu đề bài
                                viết
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input type="text" id="post_tile" required="required" class="form-control" name="post_title">
                            </div>
                        </div> -->
                        <!-- <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post_short_content">Nội dung
                                tóm tắt
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                            <textarea id="post_short_content" class="form-control" required="required" style="resize: none;"></textarea>
                            </div>
                        </div> -->
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post_thumbnail">Ảnh đại
                                diện
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input id="post_thumbnail" type="file" required="required" name="upload_file">
                            </div>
                        </div>
                        <!-- <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post_content_editor">Nội dung
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-8">
                                <textarea id="post_content_editor" class="form-control" required="required" style="resize: none;"></textarea>
                            </div>
                        </div> -->
                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-9 col-sm-9 offset-md-3">
                                <button type="submit" name="submit" class="btn btn-success">Đăng bài viết</button>
                                <button type="button" class="btn btn-primary">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/admin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace("post_content_editor");
</script>