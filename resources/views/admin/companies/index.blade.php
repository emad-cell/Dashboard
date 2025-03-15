@extends('admin.master')
@section('title', 'companies')
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keyWords.companies') }}</h2>
                    <div>
                        <x-action-button href="{{ route('admin.companies.create') }}" type='create'></x-action-button>
                        {{-- <x-upload-image></x-upload-image> --}}
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-alert-success></x-alert-success>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="20%">{{ __('keyWords.image_name') }}</th>
                                    <th width="50%">{{ __('keyWords.image') }}</th>
                                    <th width="15%">{{ __('keyWords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($companies) > 0)
                                    @foreach ($companies as $key => $company)
                                        <tr>
                                            <td>{{ $companies->firstItem() + $loop->index }}</td>
                                            <td>{{ $company->image }}</td>
                                            <td>
                                                <img src="{{ asset("storage/companies/$company->image ") }}" width="100px" alt="">
                                            </td>
                                            <td >
                                                <x-action-button href="{{ route('admin.companies.edit', $company) }}" type='edit'></x-action-button>
                                                <x-delete-button href="{{ route('admin.companies.destroy', ['company' => $company]) }}" id="{{ $company->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $companies->render('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script>
        function confirmDelete(id) {
            if (confirm('Are you shure you want to delete this recorde?')) {
                document.getElementById('form-' + id).submit();
            }
        }
    </script>
@endsection
