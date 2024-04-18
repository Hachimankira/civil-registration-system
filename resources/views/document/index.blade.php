<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Documents') }}
        </h2>
        <div class="flex mt-4">
            <x-card
                cardtype='National Id card'
                name='{{ $birth->firstName }} {{ $birth->lastName }}'
                dob='{{ $birth->dateOfBirth }}'
                nationality='Nepali'
                issueDate='{{ $birth->created_at }}'
                issuePlace='Kathmand'
                sex='{{ $birth->gender }}'
                cardno='123456789'
                expiryDate='2030-01-01'>
            </x-card>
            <x-card
                cardtype='Driving Liscense'
                name='{{ $birth->firstName }} {{ $birth->lastName }}'
                dob='{{ $birth->dateOfBirth }}'
                nationality='Nepali'
                issueDate='{{ $birth->created_at }}'
                issuePlace='Kathmand'
                sex='{{ $birth->gender }}'
                cardno='123456789'
                expiryDate='2030-01-01'>
            </x-card>
        </div>

        <div class="flex mt-4">
            <x-card
                cardtype='Voter card'
                name='{{ $birth->firstName }} {{ $birth->lastName }}'
                dob='{{ $birth->dateOfBirth }}'
                nationality='Nepali'
                issueDate='{{ $birth->created_at }}'
                issuePlace='Kathmand'
                sex='{{ $birth->gender }}'
                cardno='123456789'
                expiryDate='2030-01-01'>
            </x-card>
            <x-card
                cardtype='Passport'
                name='{{ $birth->firstName }} {{ $birth->lastName }}'
                dob='{{ $birth->dateOfBirth }}'
                nationality='Nepali'
                issueDate='{{ $birth->created_at }}'
                issuePlace='Kathmand'
                sex='{{ $birth->gender }}'
                cardno='123456789'
                expiryDate='2030-01-01'>
            </x-card>
        </div>

    </x-slot>
</x-app-layout>
