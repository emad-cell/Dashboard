@extends('admin.master')
@section('title', __('keyWords.edit_companies'))
@section('contant')
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div >
                <h2 class="h5 page-title">{{ __('keyWords.edit_companies') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.update', ['company' => $company]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="col-md-12">
                                    <label for="image">{{ __('keyWords.image') }}</label>
                                    <input type="file" placeholder="{{ __('keyWords.image') }}" name="image" class="form-control-file mb-2">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            {{-- <button type="submit" class="btn btn-primary">{{ __('keyWords.submit') }}</button> --}}
                            <x-submit-button></x-submit-button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
