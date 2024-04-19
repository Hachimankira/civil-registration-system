<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('National ID card') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
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
                                <h4 class="h2">National Id card </h4>
                                <a href="{{route('idcard.create')}}" class="btn btn-primary">+ Add new</a>
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
                                                <th>Permanent Address</th>
                                                <th>Current Address</th>
                                                <th>Issued Place</th>
                                                <td>Issued Date </td>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datas as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->firstName }} {{$data->lastName}}</td>
                                                <td>{{ $data->gender }}</td>
                                                <td>{{ $data->dateOfBirth }}</td>
                                                <td>{{ $data->permanentAddress }} </td>
                                                <td>{{ $data->currentAddress }} </td>
                                                <td>{{ $data->issuedPlace }} </td>
                                                <td>{{ $data->created_at }} </td>
                                                <td>
                                                    <a href="{{ url('idcard/'. $data->id . '/edit')}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
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