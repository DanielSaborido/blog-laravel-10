<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle artículo') }}
        </h2>
    </x-slot>

    <div class="container px-5 py-24 mx-auto flex flex-col">
        <div class="lg:w-4/6 mx-auto">
            <div class="rounded-lg overflow-hidden">
                <h1 class="text-3xl">{{ $article->title }}</h1>
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
                <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                    <span class="font-semibold title-font text-gray-400 underline">
                        {{ $article->category->name }}
                    </span>
                    <p class="leading-relaxed text-lg mb-4">{{ $article->content }}</p>
                    <a href="{{ route("articles.index") }}" class="text-indigo-500 inline-flex items-center">
                        {{ __("Volver") }}
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
