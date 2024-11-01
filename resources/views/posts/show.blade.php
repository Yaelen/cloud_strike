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

    @if(Auth::check() && Auth::user()->name == $post->by_user)
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?');">
                Delete Post
            </button>
        </form>
    @endif

    <a href="{{ route('posts.index') }}">Back to all posts</a>
</x-layout>
