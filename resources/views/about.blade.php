<x-app-layout>
    <x-slot name="header">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="px-4 py-8">
                <x-admin-card color='bg-primary' name='Submitted' :count='$birth' />

                    <h2 class="h1 text-center">Our Services</h2>
                    <x-features heading="Birth Registration"
                        description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place."
                        imgSrc="/images/logo.png" link="/birth/create" />
                    <x-feature-right heading="Nation ID card Registration"
                        description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place."
                        imgSrc="/images/logo.png" link="/add" />
                    <x-features heading="Voter card Registration"
                        description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place."
                        imgSrc="/images/logo.png" link="/vote" />
                    {{-- <x-feature-right heading="Passport Registration" description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place." imgSrc="/images/logo.png" link="/birth/create"/> --}}
                    <x-feature-right heading="Death Registration"
                        description="Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place."
                        imgSrc="/images/logo.png" link="/get_id" />
                </div>
                <div class="bg-white py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">Total Birth Registered</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    20</dd>
                            </div>
                            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">Total NID Issued</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    52</dd>
                            </div>
                            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                <dt class="text-base leading-7 text-gray-600">Total Voter Card Issued</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    65</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
