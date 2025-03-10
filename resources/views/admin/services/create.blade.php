@extends('admin.master')
@section('title',__('keyWords.add_new_services'))
@section('contant')
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div >
                    <h2 class="h5 page-title">{{ __('keyWords.add_new_services') }}</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group mb-3">
                                            <label for="title">{{ __('keyWords.title') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.title') }}" name="title" class="form-control">
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-5">
                                        <label for="title">{{ __('keyWords.icon') }}</label>
                                        <div class="form-control" >
                                            <div class="form-group mb-3">

                                            <input type="radio" value="fe-edit" name="icon" >
                                            <label class="mr-4"><i class="fe fe-edit"></i></label>

                                            <input type="radio" value="fe-home" name="icon" >
                                            <label class="mr-4"><i class="fe fe-home"></i></label>

                                            <input type="radio" value="fe-trash" name="icon">
                                            <label class="mr-4"><i class="fe fe-trash"></i></label>

                                            <input type="radio" value="fe-facebook" name="icon">
                                            <label class="mr-4"><i class="fe fe-facebook"></i></label>

                                            <input type="radio" value="fe-alert-circle" name="icon">
                                            <label class="mr-4"><i class="fe fe-alert-circle"></i></label>

                                            <input type="radio" value="fe-database" name="icon">
                                            <label class=""><i class="fe fe-database"></i></label>


                                            </div>
                                        </div>
                                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                    </div> <!-- /.col -->
                                    {{-- <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="icon">{{ __('keyWords.icon') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.icon') }}" name="icon" class="form-control">
                                            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                        </div>
                                    </div> <!-- /.col --> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="description">{{ __('keyWords.description') }}</label>
                                            <textarea type="text" placeholder="{{ __('keyWords.description') }}" name="description" class="form-control"></textarea>
                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <x-submit-button></x-submit-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection
