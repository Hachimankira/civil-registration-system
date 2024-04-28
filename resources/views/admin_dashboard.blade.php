<x-app-layout>
    <x-slot name="header">
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
        </div>

        <!-- Document Status Information -->
        <div>
            <h1 class="h2 mt-5">Documents Status Information</h1>
            <div class="row col-lg-12 mt-3">
            <x-admin-card 
                color='bg-primary' 
                name='Submitted' 
                :count='$count_submitted' 
                increased='Increased by 60%' 
            />
            <x-admin-card 
                color='bg-warning' 
                name='Verified' 
                :count='$count_verified' 
                increased='Increased by 40%' 
            />
            <x-admin-card 
                color='bg-success' 
                name='Registered' 
                :count='$count_registered'
                increased='Increased by 20%' 
            />
            <x-admin-card 
                color='bg-danger' 
                name='Rejected' 
                :count='$count_rejected'
                increased='Increased by 10%' 
            />
            </div>              
        </div>
            
        
        <!--tabs-->
        <div class="default-tab">
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
                {{-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#message">Message</a>
                </li> --}}
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
                        <h4>This is contact title</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                        </p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="message">
                    <div class="pt-4">
                        <h4>This is message title</h4>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                        </p>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                        </p>
                    </div>
                </div>
            </div>
        <!--Table-->
        {{-- <x-idcard-table :datas="$datas" /> --}}

    </x-slot>
</x-app-layout>
