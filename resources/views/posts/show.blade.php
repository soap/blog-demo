<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Detail') }} / {{ $post->id }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="border-t border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="m-auto">Message</div><p> {{ $post->body }}</p>
                    </div>
                    <div class="flex items-center">
                          <div class="text-gray-900 hover:rounded-full border-2 rounded bg-green-400"> {{ $post->owner->name }} </div>
                          <div class="text-gray-600">{{ $post->created_at->diffForHumans(['options' => 0]) }}</div>
                      </div>
                    <div class="flex items-center justify-end mt-4">
                        <button class="'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="window.location='{{ URL::route("posts.index") }}'"> 
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>