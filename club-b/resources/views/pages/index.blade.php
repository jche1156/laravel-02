<?php

use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

name('home');
middleware(['redirect-to-dashboard']);

?>

<x-layouts.marketing>

    @volt('home')
        <div class="relative flex flex-col items-center justify-center w-full h-auto overflow-hidden" x-cloak>
            <div class="flex items-center w-full max-w-6xl px-8 pt-12 pb-20 mx-auto">
                <div class="container relative max-w-4xl mx-auto mt-20 text-center sm:mt-24 lg:mt-32">
                    <h1 class="mt-5 text-4xl font-light leading-tight tracking-tight text-center dark:text-white text-slate-800 sm:text-5xl md:text-8xl">Cookies!</h1>
                    <p class="w-full max-w-2xl mx-auto mt-8 text-lg dark:text-white/60 text-slate-500">Thanks, opens source software!</p>
                    <div class="flex items-center justify-center w-full max-w-sm px-5 mx-auto mt-8 space-x-5">
                        <x-ui.button type="secondary" tag="a" href="https://github.com/thedevdojo/genesis" target="_blank">View the Docs</x-ui.button>
                        <x-ui.button type="primary" tag="a" href="https://github.com/jche1156/laravel-02" target="_blank">View Github Repo</x-ui.button>
                    </div>
                </div>
            </div>

        </div>
    @endvolt

</x-layouts.marketing>
