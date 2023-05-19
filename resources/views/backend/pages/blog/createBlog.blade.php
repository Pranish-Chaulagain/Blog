@extends('backend.layout.master')
@section('content')

<div class="container-fluid mt-3 px-5">
    <a class="d-flex align-items-center gap-1 go-back text-primary mb-2" href="{{ URL::previous() }}">
        <i class="bi bi-arrow-left-short"></i>Back
    </a>
    <form action="/admin/blog/save" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="m-0">Create a blog</h3>
        <div class="container mt-5">
            <div class="blog-form-wrapper">
                <div class="blog-input-wrapper">
                    <div class="mb-3">
                        <label class="mb-2" for="">Blog title</label>
                        <input type="text" placeholder="Create a title" class="form-control" name="blog_title" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="">Description</label>
                        <textarea type="text" placeholder="Give a description" class="form-control" name="blog_description" rows="7" required></textarea>
                    </div>
                </div>
                <div class="blog-input-wrapper">
                    <div class="mb-3">
                        <label class="mb-2" for="">Blog image</label>
                        <div class="form-control image-uploader">
                            <img id="preview-image" src="" />
                            <label for="file-input"><i class="bi bi-image"></i>Click Here to upload image</label>
                            <input id="file-input" placeholder="Select a image" type="file" class="" name="blog_image" required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-dark" value="CREATE">
                </div>
            </div>

        </div>
    </form>
</div>

@endsection
