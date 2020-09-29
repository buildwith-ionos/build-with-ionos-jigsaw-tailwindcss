@extends('_layouts.master')

@section('content')

<main class="main">
    <h1 class="font-light text-3xl text-black">Jigsaw + Tailwind CSS Starter for Build With Ionos</h1>
    <p class="text-gray-600 mt-4">
        A starter kit for using <a href="https://tailwindcss.com/">Tailwind CSS</a> with
        <a href="http://jigsaw.tighten.co/">Jigsaw</a>
    </p>
    <p>
        <a
            class="self-center md:self-start pb-8 md:pb-0"
            href="https://buildwith.ionos.com/setup?repo=https://buildwith.ionos.com/setup?repo=https%3A%2F%2Fgithub.com%2Fbuildwith-ionos%2Fbuild-with-ionos-jigsaw-tailwindcss"
            rel="noopener"
            target="_blank"
        >
            <button
                class="text-white font-bold rounded-full bg-black inline-flex items-center shadow-lg focus:outline-none px-8 my-6 py-4"
            >
                <svg
                    class="fill-current text-white w-4 h-4 mr-2"
                    role="img"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                         xlink:href="/icons.svg#icon-ship"
                    />
                </svg>
                <span>Ship to IONOS</span>
            </button>
        </a>
    </p>
</main>

@endsection
