@extends('backend.layout.master')

@section('content')
    <?php
    $blogs = App\Models\Blog::orderBy('created_at', 'desc')->get();
    $i = 1;
    ?>

    <div class="container-fluid mt-3 px-5">
        <a class="d-flex align-items-center gap-1 go-back text-primary mb-2" href="{{ URL::previous() }}">
            <i class="bi bi-arrow-left-short"></i>Back
        </a>
        <div class="heading d-flex align-items-center justify-content-between">
            <h3 class="m-0">Blog table</h3>
            <a href="/admin/blog/create" class="btn btn-dark d-flex align-items-center gap-2">
                <i class="bi bi-plus-lg text-white"></i>Create new entry
            </a>
        </div>
        <div class="mt-5 px-5 blog-table-container">
            <table>
                <thead class="thead-dark py-2">
                    <tr>
                        <th class="id-container">SN</th>
                        <th>TITLE</th>
                        <th>IMG</th>
                        <th>DESCRIPTION</th>
                        <th>CREATEDAT</th>
                        <th>UPDATEDAT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="id-container">{{ $i++ }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>
                                <img src="{{ asset($blog->blog_image) }}" alt="" />
                            </td>
                            <td>{{ $blog->blog_description }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>{{ $blog->updated_at }}</td>
                            <td>
                                <span>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="{{ route('blog.destroy', $blog->id) }}" class="">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
