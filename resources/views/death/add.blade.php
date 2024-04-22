<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voter Card Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h2">Death Registration Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('death.store') }}" method="POST">
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
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="text-label">Birth Id*</label>
                                                    <input type="text" name="birth_id" value="{{ $data->id }}" class="form-control"
                                                        placeholder="111111" required="">
                                                </div>
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
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentAddress" value="{{ $data->ward_no }} , {{ $data->city }} , {{ $data->district }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth*</label>
                                                <input type="text" name="dateOfBirth" value="{{ $data->dateOfBirth }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date of Death*</label>
                                                <input type="text" name="dateOfDeath" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Cause of death</label>
                                                <select class="form-control" name="cause">
                                                    <option value="natural">Natural Cause</option>
                                                    <option value="accident">Accident</option>
                                                    <option value="medical">Medical Issue</option>
                                                    <option value="disaster">Natural Disaster</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
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
    {{-- <script>
        var birthId = prompt("Please enter your birth ID:");
        if (birthId != null) {
            // Use AJAX to retrieve the birth record and fill the form
            $.get('/birth/' + birthId, function(data) {
                $('input[name="firstName"]').val(data.firstName);
                $('input[name="lastName"]').val(data.lastName);
                $('select[name="gender"]').val(data.gender);
                $('input[name="dateOfBirth"]').val(data.dateOfBirth);
                $('input[name="permanentAddress"]').val(data.permanentAddress);
                $('input[name="fatherFName"]').val(data.fatherFName);
                $('input[name="fatherLName"]').val(data.fatherLName);
                $('input[name="permanentFAddress"]').val(data.permanentFAddress);
                $('input[name="id_no1"]').val(data.id_no1);
                // Fill other fields...
            });
        }
    </script> --}}
</x-app-layout>
