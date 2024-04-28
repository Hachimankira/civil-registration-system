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
                            <x-birth-table :births="$births" />
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>