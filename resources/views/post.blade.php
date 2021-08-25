<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{$post->title}}</h1>
            <div>{!! $post->body !!}</div>
        </article>
        <h2><a href="/">Back</a></h2>
    </x-slot>
</x-layout>
