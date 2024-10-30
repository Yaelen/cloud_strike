<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>
    <p>Clear the sky</p>
    <h1>All Posts</h1>

    <br>

    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->name }}</h2>
                <p>By: {{ $post->by_user }}</p>

                <div class="post-image">
                    <img src="{{ asset('images/' . $post->photo) }}" alt="{{ $post->name }}" style="width: 100%; max-width: 300px;">
                </div>

                <p>{{ $post->description }}</p>
                <p>Likes: {{ $post->likes }}</p>
            </div>
            <hr>
        @endforeach
    </div>
</x-layout>
