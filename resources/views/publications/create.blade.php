@extends('layouts.sidebar')

@section('content')

<div class="col-span-full">
    <form action="" class="flex flex-col gap-y-10">
        <div>
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Titre</label>
            <div class="mt-2">
                <input id="about" name="about" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            </div>
        </div>
        <div>
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Titre</label>
            <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>
        <button class="bg-green-500 py-2 rounded-xl text-md font-semibold text-white">Add publication</button>
    </form>
</div>


@endsection