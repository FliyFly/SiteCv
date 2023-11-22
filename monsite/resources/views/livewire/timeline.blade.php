<div x-data="{ shown: false }" x-intersect="shown = true">
    <div class="grid grid-cols-1 md:grid-cols-4 bg-cyan-950">
        <div class="relative p-5 md:col-end-4 md:col-start-2">
            <i x-show="shown" x-transition class="mb-5 fa-solid fa-timeline fa-beat-fade fa-5x" style="color: #2dd4bf; animation-iteration-count: 1;"></i>
            <p class="mb-5 text-2xl text-white">Formation & expérience</p>
            <div class="relative border-l border-l-white">
                @foreach($points as $point)
                <div class="w-2 h-2 mr-2 bg-teal-400 rounded-full"></div>
                    <div class="relative pb-6 pl-5">
                        <span class="block mb-2 text-xs text-white">{{ $point['text1'] }}</span>
                        <span class="block text-sm text-teal-400">{{ $point['text2'] }}</span>
                        <span class="block text-sm text-gray-500">{{ $point['text3'] }}</span>
                        <span class="block text-sm text-white">{{ $point['text4'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
