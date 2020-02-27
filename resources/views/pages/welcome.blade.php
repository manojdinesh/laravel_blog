@extends('main')

@section('title', '| Home')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to My Blog</h1>
                    <p class="lead">Thank you for visiting. This is the test website built with laravel</p>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>
                
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>sidebar</h2>
            </div>
        </div>
@endsection
    