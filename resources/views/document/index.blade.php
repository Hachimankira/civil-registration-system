<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Documents') }}
        </h2>
        <div class="row">
            <div class="col-xl-6 mb-6">
                <div class="col">
                    @isset($idcard)
                        <x-card cardtype='National Id card' name='{{ $idcard->firstName }} {{ $idcard->lastName }}'
                            dob='{{ $idcard->dateOfBirth }}' nationality='Nepali' issueDate='{{ $idcard->created_at }}'
                            issuePlace='{{ $idcard->issuedPlace }}' sex='{{ $idcard->gender }}' cardno='{{ $idcard->id }}'
                            expiryDate='2030-01-01'>
                        </x-card>
                    @endisset
                </div>
            </div>
            <div class="col-xl-6 mb-6">
                <div class="col">
                    @isset($idcard)
                        <x-card cardtype='National Id card' name='{{ $idcard->firstName }} {{ $idcard->lastName }}'
                            dob='{{ $idcard->dateOfBirth }}' nationality='Nepali' issueDate='{{ $idcard->created_at }}'
                            issuePlace='{{ $idcard->issuedPlace }}' sex='{{ $idcard->gender }}'
                            cardno='{{ $idcard->id }}' expiryDate='2030-01-01'>
                        </x-card>
                    @endisset
                </div>
            </div>
            <div class="col-xl-6 mb-6">
                <div class="col">
                    @isset($idcard)
                        <x-card cardtype='National Id card' name='{{ $idcard->firstName }} {{ $idcard->lastName }}'
                            dob='{{ $idcard->dateOfBirth }}' nationality='Nepali' issueDate='{{ $idcard->created_at }}'
                            issuePlace='{{ $idcard->issuedPlace }}' sex='{{ $idcard->gender }}'
                            cardno='{{ $idcard->id }}' expiryDate='2030-01-01'>
                        </x-card>
                    @endisset
                </div>
            </div>
            <div class="col-xl-6 mb-6">
                <div class="col">
                    @isset($idcard)
                        <x-card cardtype='National Id card' name='{{ $idcard->firstName }} {{ $idcard->lastName }}'
                            dob='{{ $idcard->dateOfBirth }}' nationality='Nepali' issueDate='{{ $idcard->created_at }}'
                            issuePlace='{{ $idcard->issuedPlace }}' sex='{{ $idcard->gender }}'
                            cardno='{{ $idcard->id }}' expiryDate='2030-01-01'>
                        </x-card>
                    @endisset
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
