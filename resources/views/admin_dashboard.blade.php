<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <!-- Quick Links -->
            <div class="row mt-3 col-lg-12">
                <h1 class=" h2 mt-3">Quick Links</h1>
                <div class="col-lg-12 mt-3">
                    <a href="/birth/create">
                        <button type="button" class="btn btn-primary">
                            Register Birth
                        </button>
                    </a>
                    <a href="/add">
                        <button type="button" class="btn btn-primary">
                            National ID Card Register
                        </button>
                    </a>
                    <a href="/vote">
                        <button type="button" class="btn btn-primary">
                            Voter Card Register
                        </button>
                    </a>
                    <a href="/birth/create">
                        <button type="button" class="btn btn-primary">
                            Death Register
                        </button>
                    </a>
                </div>
                <div class="col-lg-12 mt-3">
                    <a href="/birth">
                        <button type="button" class="btn btn-primary">
                            Birth Table
                        </button>
                    </a>
                    <a href="/idcard">
                        <button type="button" class="btn btn-primary">
                            National ID Card Table
                        </button>
                    </a>
                    <a href="/voter">
                        <button type="button" class="btn btn-primary">
                            Voter Card Table
                        </button>
                    </a>
                    <a href="/birth">
                        <button type="button" class="btn btn-primary">
                            Death Table
                        </button>
                    </a>
                </div>
            </div>
            <!-- Document Status Information -->
            <div>
                <h1 class="h2 mt-5">Documents Status Information</h1>
                <div class="row col-lg-12 mt-3">
                    <x-admin-card color='bg-primary' name='Submitted' :count='$count_submitted' increased='Increased by 60%' />
                    <x-admin-card color='bg-warning' name='Verified' :count='$count_verified' increased='Increased by 40%' />
                    <x-admin-card color='bg-success' name='Registered' :count='$count_registered' increased='Increased by 20%' />
                    <x-admin-card color='bg-danger' name='Rejected' :count='$count_rejected' increased='Increased by 10%' />
                </div>
            </div>
            <!--chart -->
            <div class="row">
                <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="card-title">Category Status Survey</h3>
                        </div>
                        <div class="card-body">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="card-title">Total Status Survey</h3>
                        </div>
                        <div class="card-body">
                            <div style="width: 80%; margin: auto;">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--tabs-->
            {{-- <div class="default-tab">
                <h1 class="h2 mt-5">All Table</h1>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#birth">Birth list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#idcard">National ID Card list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#voter">Voter List</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="birth" role="tabpanel">
                        <div class="pt-4">
                            <x-birth-table :births="$births" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="idcard">
                        <div class="pt-4">
                            <x-idcard-table :datas="$datas" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="voter">
                        <div class="pt-4">
                            <x-voter-table :datas="$datas" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="message">
                        <div class="pt-4">
                            <h4>This is message title</h4>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
            <!--Table-->
            {{-- <x-idcard-table :datas="$datas" /> --}}

            @push('custom-scripts')
                <script>
                    var ctx = document.getElementById('barChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: @json($chart_data['birth_chart_data']['labels']),
                            datasets: [{
                                    label: 'Birth',
                                    data: @json($chart_data['birth_chart_data']['data']),
                                    backgroundColor: 'rgba(255, 99, 132, 1)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'National ID',
                                    data: @json($chart_data['id_chart_data']['data']),
                                    backgroundColor: 'rgba(54, 162, 235, 1)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    //pie chart
                    var ctx = document.getElementById('pieChart').getContext('2d');

                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: @json($chart_data['pie_chart_data']['labels']),
                            datasets: [{
                                label: 'Data',
                                data: @json($chart_data['pie_chart_data']['data']),
                                backgroundColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                ],
                            }]
                        }
                    });
                </script>
            @endpush

    </x-slot>
</x-app-layout>
