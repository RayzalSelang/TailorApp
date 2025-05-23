@extends('layouts.dashboard.index')
@section('title', 'Website Settings')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <x-breadcrumbs label="Website Settings" />

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <x-alert label="{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}" />
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('updateWebSettings') }}" method="POST">
                                @csrf
                                <x-input label="Nama Website" id="website_name" placeholder="Masukkan Nama Website"
                                    :value="$webset->website_name" />
                                <x-input label="URL Website" id="website_url" placeholder="Masukkan URL Website"
                                    :value="$webset->website_url" />
                                <x-select :label="'Tripay Mode'" :id="'tripay_mode'" :options="[
                                    'sandbox' => 'Sandbox',
                                    'production' => 'Production',
                                ]" :value="$webset->tripay_mode" />
                                <x-input label="Tripay Kode Merchant" id="tripay_kode"
                                    placeholder="Masukkan Tripay Kode Merchant" :value="$webset->tripay_kode" />
                                <x-input label="Tripay API Key" id="tripay_api" placeholder="Masukkan Tripay API Key"
                                    :value="$webset->tripay_api" />
                                <x-input label="Tripay Secret Key" id="tripay_private"
                                    placeholder="Masukkan Tripay Secret Key" :value="$webset->tripay_private" />
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
@endpush
