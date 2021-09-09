<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <a href="posts/{{ $post->id }}">
                    <h1>{{ $post->title }}</h1>
                </a>

                <p>
                    <a href="#">{{ $post->category->name}}</a>
                </p>

                <div>{{ $post->excerpt }}</div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
