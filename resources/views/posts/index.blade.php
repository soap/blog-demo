<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto border hover:border-separate">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Message</td>
                                <td>User</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="border border-collapse border-slate-800">
                                    <td class="border"> {{ $post->id }} </td>
                                    <td class="border"> {{ $post->body }} </td>
                                    <td class="border"> {{ $post->owner->name }} </td>
                                    <td class="border"> 
                                        View 
                                        Edit 
                                        <a href="{{ route('posts.delete', ['post' => $post]) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
