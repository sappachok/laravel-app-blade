<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs Edit') }}
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
                    <form method="post" action="{{ route('post.update', $post->id) }}" class="mt-6 space-y-6">                    
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ $post->title }}"/>
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div>
                        <x-input-label for="body" :value="__('Body')" />
                        <x-textarea id="body" name="body" class="mt-1 block w-full" rows="6">{{ $post->body }}</x-textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('body')" />
                    </div>                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>