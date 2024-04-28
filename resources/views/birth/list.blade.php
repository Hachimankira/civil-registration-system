<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Birth Registration') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endif
                            <div class="card-header">
                                <h4 class="h2">All Birth Registered </h4>
                                <a href="{{route('birth.create')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Birth Place</th>
                                                <th>Address</th>
                                                <th>Father Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($births as $birth)
                                            <tr>
                                                <td>{{ $birth->id }}</td>
                                                <td>{{ $birth->firstName }} {{$birth->lastName}}</td>
                                                <td>{{ $birth->gender }}</td>
                                                <td>{{ $birth->dateOfBirth }}</td>
                                                <td>{{ $birth->placeOfBirth }}</td>
                                                <td>{{ $birth->ward_no }} , {{ $birth->city }} , {{ $birth->district }} </td>
                                                <td>{{ $birth->fatherFName }} {{ $birth->fatherLName }}</td>
                                                <td>
                                                    <div class="basic-dropdown">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-{{ $birth->status == 'registered' ? 'success' : ($birth->status == 'rejected' ? 'danger' : ($birth->status == 'verified' ? 'info' : 'primary')) }} dropdown-toggle" data-toggle="dropdown">                                                                {{ $birth->status }}
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <form action="{{ route('birth.status', ['id' => $birth->id , 'status' => 'submitted']) }}" method="POST" >
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item">Submitted</button>
                                                                </form>
                                                                <form action="{{ route('birth.status', ['id' => $birth->id , 'status' => 'verified']) }}" method="POST" >
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item">Verified</button>
                                                                </form>
                                                                <form action="{{ route('birth.status', ['id' => $birth->id , 'status' => 'registered']) }}" method="POST" >
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item">Registered</button>
                                                                </form>
                                                                <form action="{{ route('birth.status', ['id' => $birth->id , 'status' => 'rejected']) }}" method="POST" >
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item">Rejected</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <td>
                                                <td>
                                                    <a href="{{ url('birth/'. $birth->id . '/edit')}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="{{ url('/documents/' . $birth->id )}}" class="btn btn-sm btn-primary"><i class="la la-eye"></i></a>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>