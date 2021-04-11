
<!-- レイアウトファイルを宣言 ,layoutsをレイアウトとして使う-->
@extends('layouts.layouts')
<!-- layouts.blade.php内で定義されている@yield('title')に埋め込む -->
@section('title', 'Simple Board')

<!-- @section('content')からendsectionはyield('content')に埋め込まれる -->
   @section('content')
      @if (session('message'))
         {{ session('message')}}
         
      @endif


         <h1>投稿</h1>
         
         
   
         

         @foreach($posts as $post)
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">{{ $post->title}}</h5>
                  <p class="card-text">{{ $post->content}}</p>
               

                  <div class="d-flex" style="height: 36.4px;"> 
                     <a href="/posts/{{ $post->id }}" class="btn btn-outline-primary">Show</a>
                     <a href="/posts/{{$post->id}}/edit"class="btn btn-outline-praimariy">Edit</a>

                     <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"> 
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>

                     </form>
                  </div>
               </div>
            </div>
         @endforeach
      

      <a href="/posts/create">New post</a>
   @endsection
