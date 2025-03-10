@extends('admin.master')
@section('title', 'subscribers')
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keyWords.subscribers') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-alert-success></x-alert-success>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keyWords.name') }}</th>
                                    <th width="10%">{{ __('keyWords.email') }}</th>
                                    <th width="15%">{{ __('keyWords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->name }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>
                                                <x-delete-button href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}" id="{{ $subscriber->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $subscribers->render('pagination::bootstrap-5') }}
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
