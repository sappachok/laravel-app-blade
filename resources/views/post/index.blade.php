<script language="javascript">
    function deleteItem(id) {
        
        if(window.confirm('Are you sure want to delete ?')) {

            window.location="post/" + id + "/delete";
        }
    }
</script> 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="mb-2">
                        <x-link href="{{ route('post.create') }}">Add Post</x-link>
                    </div>
                    <br>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Edit
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($posts as $post)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap text-center">
                                            {{ $post->id }}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                                        </td>

                                        <td class="px-6 py-4 text-center">
                                            <x-link href="{{ route('post.edit', $post->id) }}">Edit</x-link>
                                        </td>
                                        <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                        <td class="px-6 py-4 text-center">
                                            @csrf
                                            @method('delete')
                                                <x-danger-button>
                                                    Delete
                                                </x-danger-button>                                            
                                        </td>                     
                                        </form>                  
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <p class="text-warning">No blog Posts available</p>
                                    </tr>
                                @endforelse                                    
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>   