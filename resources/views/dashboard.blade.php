<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Score Counting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-2">
            <div class="grid grid-cols-6 p-4 bg-white rounded-3xl">
                <div class="col-span-1 flex items-center">
                    <form action="/minus-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team1">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button
                            type="submit"
                            class="text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="col-span-4 text-center">
                    <p class="text-3xl font-extrabol text-blue-700">Neak Dek Team</p>
                    <p class="text-9xl font-extrabol text-blue-700">{{ $team1Score }}</p>
                    <form action="/update-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team1">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <x-button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-4xl px-5 py-2.5 text-center"
                            type="submit"
                        >
                            Goal
                        </x-button>
                    </form>
                </div>
                <div class="col-span-1 flex items-center justify-end">
                    <form action="/update-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team1">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button
                            type="submit"
                            class="text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-2">
            <div class="grid grid-cols-6 p-4 bg-white rounded-3xl">
                <div class="col-span-1 flex items-center">
                    <form action="/minus-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team2">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button
                            type="submit"
                            class="text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="col-span-4 text-center">
                    <p class="text-3xl font-extrabol text-red-600">Opponent Team</p>
                    <p class="text-9xl font-extrabol text-red-600">{{ $team2Score }}</p>
                    <form action="/update-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team2">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <x-button
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-4xl px-5 py-2.5 text-center"
                            type="submit"
                        >
                            Goal
                        </x-button>
                    </form>
                </div>
                <div class="col-span-1 flex items-center justify-end">
                    <form action="/update-score" method="post">
                        @csrf
                        <input type="hidden" name="team" value="team2">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button
                            type="submit"
                            class="text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-button
        class="absolute bottom-0 left-0 m-4 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center"
        onclick="window.location='{{ route('reset_score', ['id' => $id]) }}'"
    >
        Reset
    </x-button> --}}
    <div class="flex justify-center m-2">
        <form action="/save-score-record" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <label for="date" class="text-white">Date:</label>
            <input type="date" name="date" value="{{ $date }}" required class="text-white bg-gray-600 hover:bg-gray-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center">
            <x-button
                class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                type="submit"
                onclick="return confirm('Confirm Save?')"
            >
                Save
            </x-button>
        </form>

    </div>
</x-app-layout>
