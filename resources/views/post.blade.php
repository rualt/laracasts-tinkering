<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{$post->title}}</h1>
            <p>
                By <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->id }}">{{ $post->category->name}}</a>
            </p>
            <div><p>{!! $post->body !!}</p></div>
        </article>
        <h2><a href="/">Back</a></h2>
    </x-slot>
</x-layout>
