@extends('admin.master')
@section('title', 'Services')
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keyWords.services') }}</h2>
                    <div>
                        <x-action-button href="{{ route('admin.services.create') }}" type='create'></x-action-button>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-alert-success></x-alert-success>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keyWords.title') }}</th>
                                    <th width="10%">{{ __('keyWords.icon') }}</th>
                                    <th width="15%">{{ __('keyWords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $serv)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $serv->title }}</td>
                                            <td>
                                                <i class="fe {{ $serv->icon }} fa-2x"></i>
                                            </td>
                                            <td>
                                                <x-action-button href="{{ route('admin.services.edit', $serv) }}" type='edit'></x-action-button>
                                                <x-action-button href="{{ route('admin.services.show', $serv) }}" type='show'></x-action-button>
                                                <x-delete-button href="{{ route('admin.services.destroy', ['service' => $serv]) }}" id="{{ $serv->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-5') }}
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
