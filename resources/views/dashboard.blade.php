<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    {{-- <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>  --}}
                    <div class="px-4 py-5 my-5 text-center">
                        <img class="d-block mx-auto mb-4" src="/images/logo.png" alt="" width="250" height="250">
                        <h1 class="h1">Welcome to Citizen Registration System</h1>
                        <div class="col-lg-6 mx-auto">
                        <p class=" mb-4 lead">"Unlocking life's milestones effortlessly. Our Civil Registration System simplifies vital processes like birth and death registrations, passport issuance, and voter ID management. Seamlessly connect to your essential documents, ensuring your identity and rights are always secure."</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <x-primary-button link='/birth/create'>
                                Get Started
                            </x-primary-button>
                            {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> --}}
                        </div>
                        </div>
                    </div>


                    <div class="px-4 py-8">
                        <h2 class="h1 text-center">Our Services</h2>
                        <x-features heading="Birth Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/birth/create"/>
                        <x-feature-right heading="Nation ID card Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/add"/>
                        <x-features heading="Voter card Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/vote"/>
                        {{-- <x-feature-right heading="Passport Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/birth/create"/> --}}
                        <x-feature-right heading="Death Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/get_id"/>            
                    </div>
                    </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
