@extends('admin._layouts.master')

@section('title')
    Kullanıcı Ekle
@endsection

@section('css')
    <link href="{{ asset('admin_assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Kullanıcı</a></li>
                    <li class="breadcrumb-item active">Ekle</li>
                </ol>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.users.store'])!!}

                    <div class="mb-3">
                        <label for="role">Yetki</label>
                        <select
                            class="form-control select2 {{ $errors->has('role') ? 'is-invalid' : '' }}"
                            name="role" id="role" required>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ (old("role") == $role->id ? "selected":null) }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('role'))
                            <div class="invalid-feedback">
                                {{ $errors->first('role') }}
                            </div>
                        @endif
                    </div>

                    {!! Form::textField('name', 'Adı') !!}
                    {!! Form::textField('email', 'E-posta') !!}
                    {!! Form::passwordField('password', 'Parola') !!}

                    <div class="alt_button_holder">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('admin_assets/libs/select2/select2.min.js') }}"></script>
@endsection
@section('script-bottom')


@endsection
