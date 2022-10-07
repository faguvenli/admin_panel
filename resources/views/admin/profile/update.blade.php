@extends('admin._layouts.master')

@section('title')
    Profil Düzenle
@endsection

@section('css')

@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.profile.show', $user->id) }}">Profil</a></li>
                    <li class="breadcrumb-item active">Düzenle</li>
                </ol>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($user, ['route' => ['admin.profile.update', $user->id], 'method' => 'PATCH'])!!}

                    {{ Form::textField('name', 'Adı') }}
                    {{ Form::textField('email', 'E-posta') }}
                    {{ Form::passwordField('password', 'Parola') }}

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

@endsection
@section('script-bottom')

@endsection
