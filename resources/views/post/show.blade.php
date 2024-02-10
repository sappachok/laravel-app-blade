<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="mb-2">
                        <x-link href="{{ route('post.index') }}">Back</x-link>
                    </div>
                    <br>
                    <div>
                        <b>{{ $post->title }}</b>
                    </div>
                    <div>
                        {{ $post->body }}
                    </div>           
                    <br>         
                    <div class="flex items-center gap-4">
                        <x-link href="{{ route('post.edit', $post->id) }}">{{ __('Edit') }}</x-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>