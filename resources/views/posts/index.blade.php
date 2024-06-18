<x-app-layout>

    <div class="space-y-12">


        @foreach ($posts as $post)


            <x-article :post="$post"></x-article>


        @endforeach


    </div>

</x-app-layout>
