@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#text">Text</a></li>
  <li><a data-toggle="tab" href="#image">Image Post</a></li>
  <li><a data-toggle="tab" href="#video">Video Post</a></li>
</ul>

            <div class="panel panel-default">
                <div class="panel-heading">Add new Post</div>


            <div class="tab-content">
            <div id="text" class="tab-pane fade in active">
                  @include('text')
            </div>
            <div id="image" class="tab-pane fade">
                  @include('image')

            </div>
            <div id="video" class="tab-pane fade">
                  @include('video')

            </div>
            </div>
            </div>
            
                   @foreach($posts as $post)
                        <div class="panel panel-default">
                        <div class="panel-heading"> <a href="{{url('posts/'.$post->id)}}"> {{$post->body}}</a> </div>
                        @if($post->media_type == 'image')
                           <img class="img-responsive" src="{{url('/uploads/')}}/{{$post->media_path}}" >
                        @endif

                        @if($post->media_type == 'video')
                             <video width="320" height="240" controls>
                            <source src="{{url('/uploads/')}}/{{$post->media_path}}" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                        @endif

                            <br>
                       <small>Comments:</small> {{$post->CommentCount()}}
                        </div>
                    @endforeach
            
        </div>
    </div>
</div>
@endsection
