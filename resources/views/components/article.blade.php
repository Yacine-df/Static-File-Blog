@props(['post'])

<article {{ $attributes->merge(['class' => 'prose p-4']) }}>

    <h1>

        <a class="no-underline" href="{{ $post->slug }}">

            {{ $post->title }}

        </a>

    </h1>


    <div class="py-4">

        {{ $post->contents }}

    </div>


    <div class="mt-10 text-sm">

        {{ $post->author }} 

        <span>

            &#183;

        </span>

         {{ $post->date->diffForHumans() }}

    </div>

    @if (count($post->tags))

        <ul class="not-prose mt-4 flex items-center space-x-2">

            @foreach ($post->tags as $tag)

                <li class="text-sm font-medium">

                    <a href=""
                        class="text-blue-300 hover:text-blue-500 transition-colors delay-75 border rounded-xl px-3 py-1">

                        {{ Str::title($tag) }}

                    </a>

                </li>

            @endforeach
        </ul>

    @endif

</article>
