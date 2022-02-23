<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ url('enroll', $item->id) }}">
                        @csrf
                        <div class="mt-8 text-2xl">
                            {{ $item->course_name }}
                        </div>

                        <div class="mt-6 text-gray-500">
                            {{ $item->desc }}
                        </div>
                        <br>
                        @if (sizeof($enroll) == 0)
                        <x-jet-button>
                            {{ __('Enroll Course') }}
                        </x-jet-button>
                        @else
                        <button type='submit' class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition' disabled>
                            {{ __('Course Enrolled') }}
                        </button>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
