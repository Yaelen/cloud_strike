<x-layout>
    <x-slot:heading>
        {{ $post->name }}
    </x-slot:heading>

    <div class="post-image">
        <img src="{{ asset('images/' . $post->photo) }}" alt="{{ $post->name }}" style="width: 100%; max-width: 500px;">
    </div>

    <p>By: {{ $post->by_user }}</p>
    <p>{{ $post->description }}</p>
    <p>Likes: {{ $post->likes }}</p>

    <a href="{{ route('posts.index') }}">Back to all posts</a>
</x-layout>
