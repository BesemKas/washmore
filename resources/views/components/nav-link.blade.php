@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-navlinkActive text-sm font-medium leading-5 text-navtext-light dark:text-navtext-dark focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-navtextInactive-light dark:text-navtextInactive-dark hover:text-gray-700 dark:hover:text-gray-300 hover:border-navlinkHover  focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-navlinkHover  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
