@props(['post']) 
<article {{ $attributes->merge(['class' => 'prose p-4']) }}>

    <h1>

        <a class="no-underline" href="{{ $post->slug }}">

            {{ $post->title }}

        </a>

    </h1>


    <div class="mt-10 text-sm">

        {{ $post->author }} 

        <span>

            &#183;

        </span>

         {{ $post->date->diffForHumans() }}

    </div>

    </article>
