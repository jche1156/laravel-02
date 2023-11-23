<?php

use function Laravel\Folio\{middleware, name};
//use function Livewire\Volt\{state};

name('dashboard');
middleware(['auth', 'verified']);

?>

<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @volt('dashboard')
        <div class="h-full py-8">
            <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
                
                <div class="relative min-h-[500px] w-full h-full">
                    <!-- <x-ui.placeholder /> -->
                    <div class="column px-8">
                        <x-ui.radio />
                        <div class="px-3">
                            <p class="my-4">Any Extras?</p>
                            <div class="column-1 space-y-1">
                                <x-ui.checkbox label="Croissant" id="croissant" name="croissant" />
                                <x-ui.checkbox label="Donut" id="donut" name="donut" />
                                <x-ui.checkbox label="Sandwich" id="sandwich" name="sandwich" />
                            </div>
                        </div>

                        <x-ui.calendar/>
                        <div class="mt-4 w-fit">
                            <x-ui.button type="primary">Schedule</x-ui.button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endvolt
</x-layouts.app>