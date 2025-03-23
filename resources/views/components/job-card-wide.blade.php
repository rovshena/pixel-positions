@props([
    "job",
])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex flex-1 flex-col">
        <a href="#" class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </a>
        <h3
            class="mt-3 text-xl font-bold transition-colors duration-300 group-hover:text-blue-800"
        >
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">
            {{ $job->schedule }} - From {{ $job->salary }}
        </p>
    </div>
    <div class="space-x-1">
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small" />
        @endforeach
    </div>
</x-panel>
