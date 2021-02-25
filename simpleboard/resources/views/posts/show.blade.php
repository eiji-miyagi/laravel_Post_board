@if(session('messege'))
{{ session('messeage')}}
@endif

{{ $post->title }}
{{ $post ->content }}
<a href="/posts/{{ post->id }}/edit">Edit</a>