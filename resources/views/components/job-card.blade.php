@props([
    "job",
])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3
            class="text-xl font-bold transition-colors duration-300 group-hover:text-blue-800"
        >
            {{ $job->title }}
        </h3>
        <p class="mt-4 text-sm">
            {{ $job->schedule }} - From {{ $job->salary }}
        </p>
    </div>
    <div class="mt-auto flex items-center justify-between">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>
