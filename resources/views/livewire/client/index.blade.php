<div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        @forelse($clients as $client)
            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="flex-1 min-w-0">
                    <a href="#" class="focus:outline-none flex justify-between items-center">
                        <div>
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900">
                                {{ $client->name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                {{ $client->phone_number }}
                            </p>
                        </div>
                        <div>
                            @if($client->status == 'active')
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                  Active
                                </span>
                            @elseif($client->status == 'closed')
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
                                  Closed
                                </span>
                            @else
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                  Potential
                                </span>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>No Clients Added</p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $clients->links() }}
    </div>
</div>
