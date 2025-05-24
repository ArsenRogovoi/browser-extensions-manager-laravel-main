<x-layout>
    <section class="container">
        <h1 class="text-2xl text-neutral-900 font-extrabold mt-8 mb-4 text-center dark:text-neutral-0">Extensions List
        </h1>
        {{-- filter menu start: --}}
        <ul class="flex justify-center gap-2 mb-6">
            <li
                class="border border-red-700 rounded-4xl px-4 py-1 bg-red-500 text-white dark:text-neutral-800 dark:border-neutral-800">
                All</li>
            <li
                class="border border-neutral-300 rounded-4xl px-4 py-1 bg-neutral-0 dark:bg-neutral-700 dark:border-neutral-600">
                Active</li>
            <li
                class="border border-neutral-300 rounded-4xl px-4 py-1 bg-neutral-0 dark:bg-neutral-700 dark:border-neutral-600">
                Inactive</li>
        </ul>
        {{-- filter menu end --}}
        {{-- extensions grid start: --}}
        <div class="flex flex-col justify-center gap-2.5 mb-6">
            @foreach ($extensions as $extension)
                <article
                    class="p-3 border border-neutral-300 rounded-2xl bg-neutral-0 dark:bg-neutral-700 dark:border-neutral-600">
                    <div class="flex items-start gap-3 mb-4">
                        <img src="{{ $extension->logo }}" alt="devlens logo">
                        <div>
                            <h2 class="mb-1 text-neutral-900 text-lg font-bold dark:text-neutral-0">
                                {{ $extension->name }}</h2>
                            <p class="text-neutral-600 text-sm/tight dark:text-neutral-300 sm:text-base/tight">
                                {{ $extension->description }}
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        {{-- delete extension button --}}
                        <button
                            class="border border-neutral-300 rounded-4xl text-sm text-neutral-900 font-semibold px-3 py-1 
                            bg-neutral-0 dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-0"
                            type="button">Remove</button>
                        {{-- enable/disable toggle switch --}}
                        <label class="relative w-8 h-4 cursor-pointer">
                            <input class="sr-only peer" type="checkbox" id="{{$extensions->id}}">
                            <div
                                class="w-full h-full bg-neutral-300 rounded-full ring-red-700 peer-checked:bg-red-700 
                                peer-checked:ring-neutral-900 transition-colors duration-300 peer-focus-visible:ring-2 
                                ">
                            </div>
                            <div
                                class="absolute left-0.5 top-0.5 w-3 h-3 bg-white rounded-full transition-transform duration-300 
                                peer-checked:translate-x-3.5">
                            </div>
                        </label>
                    </div>
                </article>
            @endforeach
        </div>
        {{-- extensions grid end --}}
    </section>
</x-layout>
