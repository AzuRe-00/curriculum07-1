<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>
    <body class="antialiased">
       <h1 class='title'>
           {{ $post->title }}
       </h1>
       <div class='content'>
           <div class='content_post'>
               <h3>本文</h3>
               <p class='body'>{{ $post->body }}</p>
           </div>
       </div>
       <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
       <div class=edit>
           <a href="/posts/{{ $post->id }}/edit">edit</a>
       </div>
       <div class='fotter'>
           <a href="/">戻る</a>
       </div>
    </body>
</html>
</x-app-layout>