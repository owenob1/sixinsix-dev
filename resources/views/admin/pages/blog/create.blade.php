@extends('admin.layouts.app')

@section('title', 'Add Blog')

@section('content')
    <div class="kt-pagetitle">
        <h5>Add Blog</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout">
                    <h6 class="card-body-title">Create blog page</h6>

                    <div class="row mg-t-20">
                        <form action="{{ route('admin.blog.postCreate') }}" method="POST" enctype="multipart/form-data" id="createBlogForm">
                            {{csrf_field()}}
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label @if ($errors->has('title')) text-danger @endif">Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control @if ($errors->has('title')) is-invalid @endif" type="text" name="title" placeholder="Enter title" required value="{{old('title')}}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label">Tag: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="tag"  placeholder="Enter tag" required value="{{old('tag')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label @if ($errors->has('file')) text-danger @endif">Image: <span class="tx-danger">*</span></label>
                                    <input class="form-control @if ($errors->has('file')) is-invalid @endif" type="file" name="file" required>
                                    @if ($errors->has('file'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                    <input type="hidden" name="description_content" id="description_content"/>
                                </div>
                            </div>
                            <div class=" form-layout-footer col-lg-12 mg-t-20">
                                <a href="{{route('admin.blog')}}" class="btn btn btn-secondary pull-right">Cancel</a>
                                <button class="btn btn-default mg-r-5 pull-right" type="submit" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="{{ asset('platform_assets/js/tinymce/tinymce.min.js') }}"></script>

    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
    <script>
//        tinymce.init({
//            selector: '#description',
//            height : "400",
//            theme: 'modern',
//            plugins: 'image code print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker  imagetools   contextmenu colorpicker textpattern help',
//            toolbar1: 'undo redo | image code | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
//            image_advtab: true,
//            templates: [
//                { title: 'Test template 1', content: 'Test 1' },
//                { title: 'Test template 2', content: 'Test 2' }
//            ],
//            content_css: [
//                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
//                '//www.tinymce.com/css/codepen.min.css'
//            ],
//            init_instance_callback: function (editor) {
//                editor.on('Change', function (e) {
//                    tinymce.activeEditor.dom.setAttrib(tinymce.activeEditor.dom.select('table'), 'border', null);
//
//                });
//            }
//        });

        tinymce.init({
            selector: '#description',
            height : "500",
            plugins: 'image code print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker  imagetools   contextmenu colorpicker textpattern help',
            toolbar: 'undo redo | link image | code | | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            // enable title field in the Image dialog
            image_title: true,
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
            // images_upload_url: 'postAcceptor.php',
            // here we add custom filepicker only to Image dialog
            file_picker_types: 'image',
            // and here's our custom image picker
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                // Note: In modern browsers input[type="file"] is functional without
                // even adding it to the DOM, but that might not be the case in some older
                // or quirky browsers like IE, so you might want to add it to the DOM
                // just in case, and visually hide it. And do not forget do remove it
                // once you do not need it anymore.

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        // Note: Now we need to register the blob in TinyMCEs image blob
                        // registry. In the next release this part hopefully won't be
                        // necessary, as we are looking to handle it internally.
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // call the callback and populate the Title field with the file name
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }
        });
        $('#createBlogForm').submit(function() {
            // DO STUFF...
            var tinymceContent =  tinyMCE.get('description').getContent();
            var validContent = $('#description_ifr').contents().find('body').text();
            if(validContent.trim().length == 0){
                alert("Please insert description."); return false;
            }
            else {
                $("#description_content").val(tinymceContent);
                return true;
            }
        });
    </script>
@endsection