<x-layout>
    <h1>My Blog Site</h1>
    @foreach ($posts as $post)
        <article>
            <h1><a href="post/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <div>{{ $post->excerpt }}</div>
        </article>
    @endforeach
</x-layout>





