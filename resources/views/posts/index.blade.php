<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>
    <p>Clear the sky</p>
    <h1>All Posts</h1>
    <x-nav-link href="{{ route('posts.create') }}" :active="request()->is('$posts.create')">create</x-nav-link>
    <br>

    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <div class="post-image">
                    <img src="{{ asset('images/' . $post->photo) }}" alt="{{ $post->name }}" style="width: 100%; max-width: 300px;">
                </div>

                <h2>{{ $post->name }}</h2>
                <p>By: {{ $post->by_user }}</p>
                <p>{{ $post->description }}</p>
                <p>Likes: {{ $post->likes }}</p>
            </div>
            <h2><a href="{{ route('posts.show', $post->id) }}">show</a></h2>
            <hr>
        @endforeach
    </div>
</x-layout>
