@extends('layouts.app')
@section('content')

<?php
$blogs = App\Models\Blog::orderBy('created_at', 'desc')->get();
?>

<div class="container">
    <div class="row">
        <div class="col-md-9 mt-5">
            <div class="banner">
                <div class="banner-heading mb-3"">
                    <span>1 days ago</span>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                </div>
                <div class=" banner-image">
                    <img class="rounded" src="https://images.pexels.com/photos/47730/the-ball-stadion-football-the-pitch-47730.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="banner-paragraph mt-3">
                    <p>Nobis, doloremque minus atque numquam nisi fugit odit quia! Explicabo, laudantium
                        exercitationem consectetur sit est alias voluptates aspernatur suscipit optio, unde qui porro
                        eum nullaet vero laborum voluptatum ipsum.
                    </p>
                </div>
            </div>


            <div class="blog-post-section mt-5 border-top py-3">
                <div class="section-header d-flex align-items-center justify-content-between">
                    <h3>Blog posts</h4>
                        <form class="d-flex">
                            <input type="text" placeholder="Search for blogs" class="form-control">
                        </form>
                </div>

                <div class="blog-posts-wrapper mt-5 d-flex flex-column gap-5">


                    <div class="blogs-post">
                        @foreach ($blogs as $blog)

                        <div class="post-img">
                            <img class="rounded" src="{{ asset($blog->blog_image) }}" alt="">
                        </div>
                        <div class="post-desc mt-1">
                            <div class="user-desc d-flex gap-2 align-items-center">
                                <span class="profile-pic">
                                    <img src="https://img.freepik.com/free-photo/overheating-planet-earth-global-warming-campaign-mixed-media_53876-104835.jpg?w=1380&t=st=1677735448~exp=1677736048~hmac=3e4416c54b2aa8b63005aaf95ada9faf91d75564101cbc9cf0f45712b797c713" alt="">
                                </span>
                                <span>John doe</span>
                            </div>
                            <h4>{{ ($blog->blog_title) }}</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt voluptas eaque aliquam
                                quia facere unde provident tenetur ea quasi eum.
                            </p>
                            <span>1 days ago</span>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 position-relative">
            <div class="about-paragraph mt-5 pt-4 ps-md-3 ps-0">
                <h3>About</h3>
                <p class="border-bottom pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio delectus
                    reiciendis at ipsum nam
                    assumenda esse modi laboriosam maxime illo!</p>
            </div>
            <div class="popular-blogs-section sticky-top ps-md-3 ps-0">
                <h3 class="pt-3">Popular stories</h4>
                    <div class="popular-blogs-container d-flex flex-column gap-4 pt-4">
                        <div class="popular-posts" style="width: 100%;">
                            <h6>Blog title</h6>
                            <img src="https://images.pexels.com/photos/1884574/pexels-photo-1884574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top rounded" alt="...">
                            <span>1 days ago</span>
                        </div>

                        <div class="popular-posts" style="width: 100%;">
                            <h6>Blog title</h6>
                            <img src="https://images.pexels.com/photos/274422/pexels-photo-274422.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top rounded" alt="...">
                            <span>1 days ago</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection
