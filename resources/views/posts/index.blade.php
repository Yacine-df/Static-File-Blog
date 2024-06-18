<x-app-layout>

    <div class="space-y-12">


        @foreach ($posts as $post)
            <x-article-item class="hover:bg-gray-200 transition-all delay-100 rounded-lg" :post="$post">

            </x-article-item>
        @endforeach

        <div>

            {{ $posts->links() }}

        </div>

    </div>

</x-app-layout>
