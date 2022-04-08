<x-layout>
    <x-slot:title>Page1</x-slot:title>
    <x-slot:header>{{asset('storage/crowdwide.jpeg')}}</x-slot:header>
    <x-categories></x-categories>
    <hr style="margin-left: 4rem; margin-right: 4rem;">
    <x-trending></x-trending>
    <div class="bg-gray-300 py-6">

        <div class="grid grid-cols-1 place-content-center">
            <img src="{{asset('storage/concerts.jpeg')}}" alt="alt" class="mx-auto">

            <div class="mx-auto mt-8 mb-8">
                <button
                    class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-full drop-shadow-lg">
                    Learn More
                </button>
            </div>

        </div>
    </div>
</x-layout>

