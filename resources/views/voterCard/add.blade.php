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
                            <h1 class="h2">Voter Card Registration Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('voter.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <h2 class="h3">Personal Info</h2>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">First Name*</label>
                                                <input type="text" name="firstName" value="{{ $birth->firstName }}" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="lastName" value="{{ $birth->lastName }}" class="form-control"
                                                    placeholder="Montana" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="text-label">Birth Id*</label>
                                                    <input type="text" name="birth_id" value="{{ $birth->id ?? '' }}" class="form-control"
                                                        placeholder="111111" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option value="Male" {{ $birth->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ $birth->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth*</label>
                                                <input type="text" name="dateOfBirth" value="{{ $birth->dateOfBirth }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentAddress" value="{{ $birth->ward_no }} , {{ $birth->city }} , {{ $birth->district }}" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <hr class="my-4 border-black">
                                        <!--Father Info-->
                                        <div class="col-lg-12 mb-12">
                                            <h2 class="h3">Father Info</h2>
                                        </div>

                                        
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">First Name*</label>
                                                <input type="text" name="fatherFName" value="{{ $birth->fatherFName }}" class="form-control"
                                                    placeholder="Parsley" required="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="fatherLName" value="{{ $birth->fatherLName }}" class="form-control"
                                                    placeholder="Parsley" required="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentFAddress" value="{{ $birth->permanentFAddress }}" class="form-control"
                                                    placeholder="Parsley" required="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">National ID card no*</label>
                                                <input type="text" name="id_no1" value="{{ $birth->id_no1 }}" class="form-control"
                                                    required="" readonly>
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
