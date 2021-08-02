<x-layout>
<h1>My Blog Site</h1>

<br><br>
    <a href="/">Home</a>

	 <article>
        <h1>{{ $post->title }}</h1>
	 	<div>{!! $post->body !!}</div>
    </article>

    <a href="/posts">&larr;Go Back</a>

</x-layout>
