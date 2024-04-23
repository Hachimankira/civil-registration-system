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
                        <a href="{{ url('birth/'. $birth->id . '/edit')}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                        <a href="{{ url('/documents/' . $birth->id )}}" class="btn btn-sm btn-primary"><i class="la la-eye"></i></a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>