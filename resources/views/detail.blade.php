@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
               
            </div>
            
               
                        <div class="panel panel-default">
                        <div class="panel-heading"> {{$post->body}}</div>
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
                             <form action="{{ url('comment')}}" method="post">
                         <div class="form-group">
                       <textarea name="body" class="form-control" id=""  rows="3"></textarea>
                     </div>
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="post_id" value="{{ $post->id }}">
                       <button type="submit" class="btn btn-primary">Add  New Comment</button>

                </form>
                       <small>Comments:</small> <br>
                         
                       <ul>
                       @foreach ($post->comments as $reply)
                       <div class="panel panel-default">
                        <div class="panel-heading">
                         <li>   {{$reply->body}} </li> <small><a href="#" class="replyl" id="reply">add reply</a></small>
                         <div class="reply">

                            <form action="{{ url('comment')}}" method="post">
                                <div class="form-group">
                            <textarea name="body" class="form-control" id=""  rows="3"></textarea>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="comment_id" value="{{ $reply->id }}">
                            <button type="submit" class="btn btn-primary">Add reply</button>

                            </form>

                         </div>
                        </div>
                        </div>
                      
                        
                            <ul>
                            @foreach($reply->replies as $rep)   
                             <li>  {{ $rep->body}} </li> 
                            @endforeach
                            </ul>
                      @endforeach
                      </ul>
                        </div>
                        </div>
               

            
        </div>
    </div>
</div>
@endsection
