<x-admin-layout>
    <!-- header from category -->
    <x-slot name="header">

        <h2 class="text-lg leading-6 font-medium text-gray-900">
            {{ __('Faqs') }}
        </h2>
        @if (Session::has('status'))
            {{ Session::get('status') }}

        @endif

        <div class="mt-3 sm:mt-0 sm:ml-4">
            <a href="{{ route('admin.faqs.create') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create new Faq
            </a>
        </div>

    </x-slot>
    <!-- end header -->
    <div class="container mx-auto px-4 sm:px-14">
        <div class="py-8">
            <div>

            </div>
            <div class="my-2 flex sm:flex-row flex-col">
                <div class="flex flex-row mb-1 sm:mb-0">
                    <h1 class="font-semibold">Faqs<i class="fa fa-download m-2"></i></h1>
                    <div class="relative ml-96">
                        <select
                            class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                            <option>Filter</option>
                            <option></option>
                            <option></option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="Search"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 m_7   text-left text-xs font-semibold text-gray-600 tracking-wider">##</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 m_7   text-left text-xs font-semibold text-gray-600 tracking-wider">
                                    Title
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 m_7   text-left text-xs font-semibold text-gray-600 tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($result as $faq)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $faq->id }}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <a href="{{ route('admin.faqs.edit', $faq->id) }}">{{ $faq->title }}</a>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white flex text-sm">
                                        <a class="p-2 rounded text-white bg-blue-600" href="{{ route('admin.faqs.edit', $faq->id) }}">edit</a>
                                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="post">
                                            @csrf @method('delete')
                                            <button  class="p-2 rounded text-white bg-red-600">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">
                                        No Data
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>
                    </table>

                </div>
                <div>
                    {{ $result->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
