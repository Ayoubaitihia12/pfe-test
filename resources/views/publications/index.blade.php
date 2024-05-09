@extends('layouts.sidebar')

@section('content')
<div>
    <div class="py-4 flex w-full justify-between mb-4">
        <h1 class="text-3xl font-bold">Publication</h1>

        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href="/membres/create" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add publication</a>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="p-4 rounded-md border border-gray-200 bg-white">
            <div class="flex justify-between">
                <h1 class="text-3xl fond-bold font-bold">titre</h1>
                <div class="flex items-center gap-2">
                    <a class="px-4 py-2 bg-green-400 text-white rounded-md" href="#">modi</a>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-md" >Sup</a>
                </div>
            </div>
            <p class="pt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cumque repellat
                consequatur praesentium ab temporibus asperiores ut cupiditate, expedita atque.
            </p>
        </div>
        <div class="p-4 rounded-md border border-gray-200 bg-white">
            <div class="flex justify-between">
                <h1 class="text-3xl fond-bold font-bold">titre</h1>
                <div class="flex items-center gap-2">
                    <a class="px-4 py-2 bg-green-400 text-white rounded-md" href="#">modi</a>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-md" >Sup</a>
                </div>
            </div>
            <p class="pt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cumque repellat
                consequatur praesentium ab temporibus asperiores ut cupiditate, expedita atque.
            </p>
        </div>
        <div class="p-4 rounded-md border border-gray-200 bg-white">
            <div class="flex justify-between">
                <h1 class="text-3xl fond-bold font-bold">titre</h1>
                <div class="flex items-center gap-2">
                    <a class="px-4 py-2 bg-green-400 text-white rounded-md" href="#">modi</a>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-md" >Sup</a>
                </div>
            </div>
            <p class="pt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cumque repellat
                consequatur praesentium ab temporibus asperiores ut cupiditate, expedita atque.
            </p>
        </div>
    </div>
</div>
@endsection