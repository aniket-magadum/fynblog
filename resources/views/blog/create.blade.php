<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-center items-center">
                <form class="w-full max-w-lg p-8" action="{{ route('blog.store') }}" method="post">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-title">
                                Title
                            </label>
                            <input name="title"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-title" type="text" placeholder="Jane">
                            @error('title')
                            <p class="text-red-400 m-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-category">
                                Category
                            </label>
                            <select id="grid-category" name="category_id"
                                class="block mb-3 appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-red-400 m-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Content
                            </label>
                            <textarea
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border 
                                border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                rows="10" name="content"></textarea>
                            @error('content')
                            <p class="text-red-400 m-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full px-3 flex justify-center">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 mt-5 px-4 rounded">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
