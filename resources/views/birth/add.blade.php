<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Birth Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="h2">Children Registration Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('birth.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <h2 class="h3">Child Info</h2>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">First Name*</label>
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="lastName" class="form-control"
                                                    placeholder="Montana" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <select class="form-control" name="gender">
                                                    <option value="gender">Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Birth Place</label>
                                                <select class="form-control" name="placeOfBirth">
                                                    <option value="placeOfBirth">Birth Place</option>
                                                    <option value="hospital">Hospital</option>
                                                    <option value="health_Post">Health Post</option>
                                                    <option value="home">Home</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth*</label>
                                                <input type="text" name="dateOfBirth" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">District*</label>
                                                <input type="text" name="district" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">City*</label>
                                                <input type="text" name="city" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Ward no*</label>
                                                <input type="number" name="ward_no" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Province no*</label>
                                                <input type="number" name="province_no" class="form-control"
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
                                                <input type="text" name="fatherFName" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="fatherLName" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentFAddress" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">National ID card no*</label>
                                                <input type="text" name="id_no1" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Occupation*</label>
                                                <input type="text" name="FOccupation" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Email Address*</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="emial1" placeholder="example@example.com.com"
                                                        required="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Phone Number*</label>
                                                <div class="input-group">
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="(+1)408-657-9007" required="">

                                                </div>
                                            </div>
                                        </div>

                                        <!--Mother Info-->
                                        <div class="col-lg-12 mb-12">
                                            <h2 class="h3">Mother Info</h2>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">First Name*</label>
                                                <input type="text" name="motherFName" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Last Name*</label>
                                                <input type="text" name="motherLName" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Permanent Address*</label>
                                                <input type="text" name="permanentMAddress" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">National ID card no*</label>
                                                <input type="text" name="id_no2" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Occupation*</label>
                                                <input type="text" name="MOccupation" class="form-control"
                                                    placeholder="Parsley" required="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                            <!--modal-->
                            <x-submit-modal />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('custom-scripts')
        <script>
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault();

                    var form = $(this);
                    var url = form.attr('action');

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // serializes the form's elements.
                        success: function(data) {
                            $('#submitModal').modal('show');
                        }
                    });
                });
            });
        </script>
    @endpush

</x-app-layout>
