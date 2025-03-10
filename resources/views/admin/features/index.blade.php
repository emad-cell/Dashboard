@extends('admin.master')
@section('title', 'features')
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keyWords.features') }}</h2>
                    <div>
                        <x-action-button href="{{ route('admin.features.create') }}" type='create'></x-action-button>
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
                                @if (count($features) > 0)
                                    @foreach ($features as $key => $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td>
                                                <i class="fe {{ $feature->icon }} fa-2x"></i>
                                            </td>
                                            <td>
                                                <x-action-button href="{{ route('admin.features.edit', $feature) }}" type='edit'></x-action-button>
                                                <x-action-button href="{{ route('admin.features.show', $feature) }}" type='show'></x-action-button>
                                                <x-delete-button href="{{ route('admin.features.destroy', ['feature' => $feature]) }}" id="{{ $feature->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $features->render('pagination::bootstrap-5') }}
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
