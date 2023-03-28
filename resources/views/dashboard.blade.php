<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Score Counting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-6 p-4 bg-white border-b border-gray-200">
                    <div class="col-span-1 flex items-center">
                        <form action="/dashboard/minus-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team1">
                            <button
                                type="submit"
                                class="text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="col-span-4 text-center">
                        <p class="text-4xl font-extrabol text-blue-700">Team 1</p>
                        <p class="text-9xl font-extrabol text-blue-700">{{ $team1Score }}</p>
                        <form action="/dashboard/update-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team1">
                            <x-button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-4xl px-5 py-2.5 text-center"
                                type="submit"
                            >
                                Goal
                            </x-button>
                        </form>
                    </div>
                    <div class="col-span-1 flex items-center justify-end">
                        <form action="/dashboard/update-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team1">
                            <button
                                type="submit"
                                class="text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grid grid-cols-6 p-4 bg-white border-b border-gray-200">
                    <div class="col-span-1 flex items-center">
                        <form action="/dashboard/minus-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team2">
                            <button
                                type="submit"
                                class="text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="col-span-4 text-center">
                        <p class="text-4xl font-extrabol text-red-600">Team 2</p>
                        <p class="text-9xl font-extrabol text-red-600">{{ $team2Score }}</p>
                        <form action="/dashboard/update-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team2">
                            <x-button
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-4xl px-5 py-2.5 text-center"
                                type="submit"
                            >
                                Goal
                            </x-button>
                        </form>
                    </div>
                    <div class="col-span-1 flex items-center justify-end">
                        <form action="/dashboard/update-score" method="post">
                            @csrf
                            <input type="hidden" name="team" value="team2">
                            <button
                                type="submit"
                                class="text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <x-button
            class="absolute bottom-0 left-0 m-4 text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center"
            onclick="window.location='{{ route('reset_score') }}'"
        >
            Reset
        </x-button>
        {{-- <x-button
            class="absolute bottom-0 right-0 m-4 text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center"
            onclick="window.location='{{ route('reset_score') }}'"
        >
            Save Image
        </x-button> --}}
    </div>
</x-app-layout>
