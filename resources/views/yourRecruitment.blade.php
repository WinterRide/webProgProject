<x-app-layout>
    <div class="mx-auto mt-20">
        <div class="bg-gray-500 flex w-full h-20 justify-center items-center">
            <a href="{{ route('addRecruitment.view') }}" class="bg-black rounded-lg p-3 text-white">+ Create New Recruitment</a>
        </div>
        <h1 class="text-3xl font-bold mt-10">On Going Recruitment</h1>
        <div class="space-y-4 w-full">
            @forelse ($ongoingRecruitments as $recruitment)
                <x-recruitment-card :recruitment="$recruitment" />
            @empty
                <p>No jobs found.</p>
            @endforelse
        </div>
        <h1 class="text-3xl font-bold mt-10">Recruitment History</h1>
        <div class="space-y-4 w-full">
            @forelse ($historyRecruitments as $recruitment)
                <x-recruitment-card :recruitment="$recruitment" />
            @empty
                <p>No jobs found.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
