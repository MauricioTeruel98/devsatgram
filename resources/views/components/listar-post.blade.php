<div>
    @if($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                    <div class="bg-gray-300 border-black rounded-xl pb-2">
                        <p class="font-bold text-sm py-2 px-3">&#64;{{ $post->user->username }} - {{ $post->created_at->diffForHumans() }}</p>
                        <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}"
                                alt="Imagen del post {{ $post->titulo }}">
                        </a>
                        <p class="mt-5 px-3 text-sm">
                            {{ $post->titulo }}
                        </p>
                    </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No hay posts, sigue a alguien</p>
    @endif
</div>