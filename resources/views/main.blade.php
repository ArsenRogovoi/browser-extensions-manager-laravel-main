<x-layout>
    <section class="container">
        <div class="md:flex md:justify-between md:items-center">
            <h1 class="text-2xl text-neutral-900 font-extrabold mt-8 mb-4 text-center dark:text-neutral-0">Extensions
                List
            </h1>
            {{-- filter menu start: --}}
            <ul class="flex justify-center gap-2 mb-6 md:mt-8 md:mb-4">
                <li>
                    <a @class([
                        'inline-block',
                        'border',
                        'rounded-4xl',
                        'px-4',
                        'py-1',
                        // classes when tab active
                        'border-red-700 bg-red-700 text-white hover:opacity-80 dark:font-semibold dark:text-neutral-800 
                        dark:border-neutral-800 dark:hover:opacity-100 focus-visible:outline-red-400 focus-visible:outline-2 
                        focus-visible:outline-offset-2' => $isActive === null,
                        // classes when tab inactive
                        'border-neutral-200 bg-neutral-0 hover:opacity-70 dark:bg-neutral-700 dark:border-neutral-600 
                        dark:hover:bg-neutral-600 dark:hover:text-neutral-0 dark:hover:opacity-90 focus-visible:outline-red-400 
                        focus-visible:outline-2 focus-visible:outline-offset-2' => $isActive !== null])
                        href="/">
                        All
                    </a>
                </li>
                <li>
                    <a @class([
                        'inline-block',
                        'border',
                        'rounded-4xl',
                        'px-4',
                        'py-1',
                        // classes when tab active
                        'border-red-700 bg-red-700 text-white hover:opacity-80 dark:font-semibold dark:text-neutral-800 
                        dark:border-neutral-800 dark:hover:opacity-100 focus-visible:outline-red-400 focus-visible:outline-2 
                        focus-visible:outline-offset-2' => $isActive === 'active',
                        // classes when tab inactive
                        'border-neutral-200 bg-neutral-0 hover:opacity-70 dark:bg-neutral-700 dark:border-neutral-600 
                        dark:hover:bg-neutral-600 dark:hover:text-neutral-0 dark:hover:opacity-90 focus-visible:outline-red-400 
                        focus-visible:outline-2 focus-visible:outline-offset-2' => $isActive !== 'active'])
                        href="/active">
                        Active
                    </a>
                </li>
                <li>
                    <a @class([
                        'inline-block',
                        'border',
                        'rounded-4xl',
                        'px-4',
                        'py-1',
                        // classes when tab active
                        'border-red-700 bg-red-700 text-white hover:opacity-80 dark:font-semibold dark:text-neutral-800 
                        dark:border-neutral-800 dark:hover:opacity-100 focus-visible:outline-red-400 focus-visible:outline-2 
                        focus-visible:outline-offset-2' => $isActive === 'inactive',
                        // classes when tab inactive
                        'border-neutral-200 bg-neutral-0 hover:opacity-70 dark:bg-neutral-700 dark:border-neutral-600 
                        dark:hover:bg-neutral-600 dark:hover:text-neutral-0 dark:hover:opacity-90 focus-visible:outline-red-400 
                        focus-visible:outline-2 focus-visible:outline-offset-2' => $isActive !== 'inactive'])
                        href="/inactive">
                        Inactive
                    </a>
                </li>
            </ul>
            {{-- filter menu end --}}
        </div>
        {{-- extensions grid start: --}}
        <div class="flex flex-col justify-center gap-2.5 mb-6 md:flex-row md:flex-wrap md:justify-start">
            @foreach ($extensions as $extension)
                {{-- extension card start: --}}
                <article
                    class="flex flex-col justify-between p-3 border border-neutral-300 rounded-2xl bg-neutral-0 
                    dark:bg-neutral-800 dark:border-neutral-600 md:w-[calc(50%-0.3125rem)] lg:w-[calc((100%-1.25rem)/3)]">
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
                            class="px-3 py-1 border border-neutral-300 rounded-4xl cursor-pointer text-sm text-neutral-900 font-semibold
                            bg-neutral-0 focus-visible:outline-red-400 focus-visible:outline-2 focus-visible:outline-offset-2
                            focus-visible:border-0 focus-visible:bg-neutral-100 hover:bg-red-700 hover:border-red-700 
                            hover:font-normal hover:text-neutral-0 dark:bg-neutral-700 dark:border-neutral-600 
                            dark:text-neutral-0  dark:focus-visible:bg-neutral-700 focus-visible:hover:bg-red-700 
                            dark:hover:text-neutral-900 dark:hover:font-semibold"
                            type="button">Remove</button>
                        {{-- enable/disable toggle switch --}}
                        <label class="relative w-8 h-4 cursor-pointer">
                            <input class="sr-only peer js-toggle-ext" type="checkbox" data-id="{{ $extension->id }}"
                                @checked($extension->is_active)>
                            <div
                                class="w-full h-full bg-neutral-300 rounded-full peer-checked:bg-red-700 
                                peer-focus-visible:outline-red-400 peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2
                                transition-colors duration-300 hover:peer-checked:bg-red-500 dark:bg-neutral-500">
                            </div>
                            <div
                                class="absolute left-0.5 top-1/2 w-3 h-3 bg-white rounded-full transition-transform duration-300 
                                peer-checked:translate-x-3.5 -translate-y-1/2">
                            </div>
                        </label>
                    </div>
                </article>
                {{-- extension card end --}}
            @endforeach
        </div>
        {{-- extensions grid end --}}
    </section>
</x-layout>
