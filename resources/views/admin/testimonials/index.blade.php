@extends('admin.master')
@section('title', 'testimonials')
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keyWords.testimonials') }}</h2>
                    <div>
                        <x-action-button href="{{ route('admin.testimonials.create') }}" type='create'></x-action-button>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-alert-success></x-alert-success>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keyWords.name') }}</th>
                                    <th>{{ __('keyWords.position') }}</th>
                                    <th width="10%">{{ __('keyWords.image') }}</th>
                                    <th width="15%">{{ __('keyWords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testimonials) > 0)
                                    @foreach ($testimonials as $key => $testimonial)
                                        <tr>
                                            <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td>
                                                <img src="{{ asset("storage/testimonials/$testimonial->image ") }}" width="50px" alt="">
                                            </td>
                                            <td>
                                                <x-action-button href="{{ route('admin.testimonials.edit', $testimonial) }}" type='edit'></x-action-button>
                                                <x-action-button href="{{ route('admin.testimonials.show', $testimonial) }}" type='show'></x-action-button>
                                                <x-delete-button href="{{ route('admin.testimonials.destroy', ['testimonial' => $testimonial]) }}" id="{{ $testimonial->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $testimonials->render('pagination::bootstrap-5') }}
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
