<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard.') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-semibold mb-4 text-center">Data Buku</h1>
                    <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 mx-auto">
                        <thead>
                            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700">
                    <th class="px-4 py-2 font-semibold text-left">Title</th>
                    <th class="px-4 py-2 font-semibold text-left">Author</th>
                    <th class="px-4 py-2 font-semibold text-left">Year</th>

                </tr>
            </thead>
                        </thead>
                        <tbody>
                            @foreach ($book as $sarana)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->title }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->author }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->year }}</td>
                                    
                              
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
