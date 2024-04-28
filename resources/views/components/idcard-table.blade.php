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
                    <th>Issued Date </th>
                    <th>Status</th>
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
                        <div class="basic-dropdown">
                            <div class="dropdown">
                                <button type="button" class="btn btn-{{ $data->status == 'registered' ? 'success' : ($data->status == 'rejected' ? 'danger' : ($data->status == 'verified' ? 'info' : 'primary')) }} dropdown-toggle" data-toggle="dropdown"> 
                                    {{ $data->status }}
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('idcard.status', ['id' => $data->id , 'status' => 'submitted']) }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="dropdown-item">Submitted</button>
                                    </form>
                                    <form action="{{ route('idcard.status', ['id' => $data->id , 'status' => 'verified']) }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="dropdown-item">Verified</button>
                                    </form>
                                    <form action="{{ route('idcard.status', ['id' => $data->id , 'status' => 'registered']) }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="dropdown-item">Registered</button>
                                    </form>
                                    <form action="{{ route('idcard.status', ['id' => $data->id , 'status' => 'rejected']) }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="dropdown-item">Rejected</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <td>
                        <a href="{{ url('idcard/'. $data->id . '/edit')}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                        <a href="{{ url('/documents/' . $data->birth_id)}}" class="btn btn-sm btn-primary"><i class="la la-eye"></i></a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>