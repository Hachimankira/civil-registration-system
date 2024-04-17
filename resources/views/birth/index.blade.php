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
                            <h5 class="card-title">Basic Info</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('birth.store')}}" id="step-form-horizontal" class="step-form-horizontal"
                                method="POST"
                            >
                                @csrf
                                <div>
                                    <h4>Child Info</h4>
                                    <section>
                                        <h2 class="mb-4 font-bold underline">Child Info</h2>                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">First Name*</label>
                                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Last Name*</label>
                                                    <input type="text" name="lastName" class="form-control" placeholder="Montana" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <select class="form-control">
                                                        <option value="Gender">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">Birth Place</label>
                                                    <select class="form-control">
                                                        <option value="placeOfBirth">Birth Place</option>
                                                        <option value="Hospital">Hospital</option>
                                                        <option value="Health_Post">Health Post</option>
                                                        <option value="Home">Home</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Date of Birth*</label>
                                                    <input type="text" name="dateOfBirth" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">District*</label>
                                                    <input type="text" name="district" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">City*</label>
                                                    <input type="text" name="city" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Ward no*</label>
                                                    <input type="number" name="ward_no" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Province no*</label>
                                                    <input type="number" name="province_no" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Father Info</h4>
                                    <section>
                                        <h2 class="mb-4 font-bold underline">Father Info</h2> 

                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">First Name*</label>
                                                    <input type="text" name="fatherFName" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Last Name*</label>
                                                    <input type="text" name="fatherLName" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Permanent Address*</label>
                                                    <input type="text" name="permanentFAddress" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">National ID card no*</label>
                                                    <input type="text" name="id_no1" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Occupation*</label>
                                                    <input type="text" name="FOccupation" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address*</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="emial1" placeholder="example@example.com.com" required="">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number*</label>
                                                    <div class="input-group">
                                                        <input type="text" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Mother Info</h4>
                                    <section>
                                        <h2 class="mb-4 font-bold underline">Mother Info</h2>

                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">First Name*</label>
                                                    <input type="text" name="motherFName" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Last Name*</label>
                                                    <input type="text" name="motherLName" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Permanent Address*</label>
                                                    <input type="text" name="permanentMAddress" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">National ID card no*</label>
                                                    <input type="text" name="id_no2" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Occupation*</label>
                                                    <input type="text" name="MOccupation" class="form-control" placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>
