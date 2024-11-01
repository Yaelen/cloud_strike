<x-layout>
    <x-slot:heading>
        Create
    </x-slot:heading>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Post Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
</x-layout>
