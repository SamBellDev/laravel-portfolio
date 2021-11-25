<x-layout>
    <article>
        <h2>
            {{ $post->title }}
        </h2>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/blog">Go back</a>
</x-layout>
