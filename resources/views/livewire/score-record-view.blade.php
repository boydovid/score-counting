<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-2">
        <div class="bg-gray-200 rounded-3xl overflow-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="p-2 text-center text-sm">{{ __('No') }}</th>
                        <th class="p-2 text-center text-sm">{{ __('Neak Dek') }}</th>
                        <th class="p-2 text-center text-sm">{{ __('Opponent') }}</th>
                        <th class="p-2 text-center text-sm">{{ __('Date') }}</th>
                        {{-- <th class="p-2 text-center text-sm">{{ __('User') }}</th> --}}
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($score_records as $data)
                        <tr class="text-gray-700">
                            <td class="p-2 text-center text-ms border">
                                {{ $loop->index + 1}}
                            </td>
                            <td class="p-2 text-center text-ms border <?php if ($data->team1Score > $data->team2Score) { echo 'text-white bg-blue-700'; } ?>">
                                {{ $data->team1Score }}
                            </td>
                            <td class="p-2 text-center text-ms border <?php if ($data->team1Score < $data->team2Score) { echo 'text-white bg-red-600'; } ?>">
                                {{ $data->team2Score }}
                            </td>
                            <td class="p-2 text-center text-ms border">
                                {{ $data->recordDate }}
                            </td>
                            {{-- <td class="p-2 text-center text-ms border">
                                {{ $data->user->name }}
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-4 mx-2">
    {{ $score_records->links() }}
</div>
