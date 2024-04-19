<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            National ID Card
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h2">National ID Card Registration Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="/idcard/create" method="GET">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="birth-id">Please enter your birth ID:</label>
                                        <input class="form-control" type="text" id="birth-id" name="birth_id">
                                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                        {{-- <input type="submit" value="Submit"> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
