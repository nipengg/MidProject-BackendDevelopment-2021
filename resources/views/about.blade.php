<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl" style="font-size: 18pt">
                        Vision
                    </div>
                    <br>
                    <hr>
                    <div class="mt-8 text-2xl">
                        Empowering everyone to open new doors
                        through programming
                    </div>

                    <div class="mt-6 text-gray-500">
                        We believe programming is a power that can change ourselves, our surroundings, and the world, regardless of age, gender, race, or position. We want everyone to have this wonderful power. And we want to open new doors of many lives alone.
                    </div>

                    <div class="mt-8 text-2xl" style="font-size: 18pt">
                        Mission
                    </div>
                    <br>
                    <hr>

                    <div class="mt-8 text-2xl">
                        Be the gate to the exciting world of programming.
                        Be the path to an independent coder.
                    </div>

                    <div class="mt-6 text-gray-500">
                        Learning to code gave us the power to create. It gave us confidence and opened new doors. We want to make this power accessible to anyone, and open up the possibilities for everyone.
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
