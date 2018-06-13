@extends('platform.layouts.app')

@section('title', 'Edit Profile')
@section('custom-css')

@endsection
@section('content')
    <div class="kt-pagetitle">
        <h5>Avatar Crop </h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="img-container">
                    <img id="image"  alt="Picture" src="{{$profile->avatar}}">
                </div>
            </div>
            <div class="form-layout-footer col-sm-12 col-xl-12 mg-t-30">
                <a class="btn btn-default mg-r-5 " href="{{ route('platform.edit.profile') }}" style="float: right"> Cancel</a>
                <button class="btn btn-default mg-r-5 " style="float: right" onclick="onSaveCrop()">Save</button>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        $(document.body).on('keydown', function (e) {

            if (!$image.data('cropper') || this.scrollTop > 300) {
                return;
            }

            switch (e.which) {
                case 37:
                    e.preventDefault();
                    $image.cropper('move', -1, 0);
                    break;

                case 38:
                    e.preventDefault();
                    $image.cropper('move', 0, -1);
                    break;

                case 39:
                    e.preventDefault();
                    $image.cropper('move', 1, 0);
                    break;

                case 40:
                    e.preventDefault();
                    $image.cropper('move', 0, 1);
                    break;
            }
        });

        var $image = $('#image');
        var options = {
            aspectRatio: 1 / 1,
            crop: function (e) {
            }
        };
        $image.cropper(options);

        function onSaveCrop(){
            $image.cropper('getCroppedCanvas').toBlob(function (blob) {
                var formData = new FormData();

                formData.append('file', blob);
                $.ajax({
                    url: '{{ route('platform.edit.profile.avatar') }}',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data)
                    {
                        if(data.result == 'success'){
                            window.location.href=' {{ route("platform.edit.profile") }}';
                        }
                    }
                });
            });
        }
    </script>
@endsection
