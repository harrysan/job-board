<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary) }}
        </div>
    </div>

    <div class="flex items-center justify-between mb-4 text-sm text-slate-500">
        <div class="flex items-center space-x-4">
            <div>{{ $job->employer->company_name }}</div>
            <div>{{ $job->location }}</div>
            @if ($job->deleted_at)
                <span class="text-red-500 text-cs">Deleted </span>
            @endif
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                    {{ Str::ucfirst($job->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>

    {{ $slot }}
</x-card>
