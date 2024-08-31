<div>
    @foreach ($posts as $post)
        <div class="mb-5">
            <h1 class="text-xl">{{ $post->title }}</h1>
            <p>{{ $post->author }}</p>
        </div>
    @endforeach
</div>
