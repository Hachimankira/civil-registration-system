<div class="container mx-auto mt-5">
    <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden mx-auto flex flex-col">
        <div class="bg-gray-200 text-center py-2">
            <div>
                <img src="/images/logo.png" class="w-6 h-6 float-left ml-4 mt-4" alt="logo">
            </div>
            <div>
                <img src="/images/nepal.png" class="w-6 h-6 float-right mr-4 mt-4" alt="Nepal Flag">
            </div>
            <div>
                <h4 class="text-lg font-semibold">Republic of Nepal</h4>
                <h6>{{ $cardtype }}</h6>
            </div>

        </div>
        <div class="p-4 flex-1 flex">
            <div class="w-3/4">
                <h5 class="text-xl font-semibold mb-2">{{ $name }}</h5>
                <p class="text-gray-600 text-sm">Date of Birth</p>
                <p class="text-gray-600 text-lg mb-2">{{ $dob }}</p>

                <div class="flex justify-between mr-5">
                    <div>
                        <p class="text-gray-600 text-sm ">Nationality</p>
                        <p class="text-gray-600 text-lg mb-2">{{ $nationality }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm ">Sex</p>
                        <p class="text-gray-600 text-lg ">{{ $sex }}</p>
                    </div>
                </div>
                <div class="flex justify-between mr-5">
                    <div>
                        <p class="text-gray-600 text-sm ">Date of Issue</p>
                        <p class="text-gray-600 text-lg mb-2">{{ $issueDate }}</p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm">Place of Issue</p>
                        <p class="text-gray-600 text-lg">{{ $issuePlace }}</p>
                    </div>
                </div>

            </div>
            <div class="w-1/4">
                <img src="/images/avatar/2.jpg" class="w-full" alt="ID Card Image">
                <img src="/images/signature.png" class="w-20" alt="Signature">
            </div>
        </div>
        <div class="bg-gray-200 p-2 text-sm">
            <p class=" text-lg text-center">{{ $cardno }}</p>
            <p class="text-md text-center">Expiry Date: {{ $expiryDate }}</p>
        </div>
    </div>
</div>
