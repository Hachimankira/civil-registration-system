<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            National ID Card
        </h2>
    </x-slot>
    <form action="/idcard/create" method="GET">
        <label for="birth-id">Please enter your birth ID:</label>
        <input type="text" id="birth-id" name="birth_id">
        <input type="submit" value="Submit">
    </form>
</x-app-layout>
