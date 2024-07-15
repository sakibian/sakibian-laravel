<x-layouts>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-4 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']}} per year.
                </div>
            </a>
        @endforeach

        <div class="py-4">
            {{ $jobs->links() }}
        </div>
    </div>

</x-layouts>