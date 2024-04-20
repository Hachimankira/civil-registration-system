<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('National ID Card Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h2">National ID Card Edit Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('idcard.update', $data->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <h2 class="h3">Personal Info</h2>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">First Name*</label>
                                                <input type="text" name="firstName" value="{{ $data->firstName }}" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="lastName" value="{{ $data->lastName }}" class="form-control"
                                                    placeholder="Montana" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option value="Male" {{ $data->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ $data->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date of birth*</label>
                                                <input type="text" name="dateOfBirth" value="{{ $data->dateOfBirth }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentAddress" value="{{ $data->permanentAddress }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Current Address*</label>
                                                <input type="text" name="currentAddress" value="{{ $data->currentAddress }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <hr class="my-4 border-black">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-light">Cancel</button>
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
