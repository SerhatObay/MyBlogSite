@extends('frontend.layouts.master')
@section('content')



    <div class="wrapper">
        <div class="content">

    <div class="container p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('f_end/img/blog-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="mb-3 text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                        <div class="d-flex text-white">
                            <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                            <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                        <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                    </div>
                </div>
                @foreach($posts as $post)
                    <div class="carousel-item">
                        <img class="w-100" src="{{asset($post->image_url)}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h2 class="mb-3 text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                            <div class="d-flex text-white">
                                <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                                <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                            </div>
                            <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Blog List Start -->
            @foreach($posts as $post)
                <div class="container bg-white pt-5">
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="{{asset($post->image_url)}}" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{$post->title}}</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> {{$post->created_at->diffForHumans()}}</small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> {{count($post->getComments)}} Yorum</small>

                            </div>
                            <p>
                                {{$post->description}}
                            </p>
                            <a href="" class="btn btn-lg btn-outline-dark mt-4">Devamını Oku</a>
                        </div>
                    </div>


                </div>


            @endforeach
            {{$posts->links('pagination::bootstrap-4')}}


    <!-- Blog List End -->


    <!-- Subscribe Start -->
    <div class="container py-5 px-4 bg-secondary text-center">
        <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
        <p class="text-white">Subscribe and get my latest article in your inbox</p>
        <form class="form-inline justify-content-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Subscribe End -->


    <!-- Blog List Start -->
    <div class="container bg-white pt-5">




    </div>
    <!-- Blog List End -->
        </div>
    </div>

@endsection
