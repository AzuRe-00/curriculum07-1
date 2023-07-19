<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>
       <h1>Blog name</h1>
       <a href="/posts/create">create</a>
       <div class='posts'>
           @foreach($posts as $post)
               <div class='post'>
                   <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                   <p class='body'>{{ $post->body }}</p>
                   <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                   </form>
               </div>
           @endforeach
           <div>ログインユーザー：{{ Auth::user()->name }}</div>
       </div>
       <div class='paginate'>{{ $posts->links()}}</div>
       <script>
           function deletePost(id){
               'use strict'
               
               if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                   document.getElementByid('form_${id}').submit();
               }
           }
       </script>
</x-app-layout>
