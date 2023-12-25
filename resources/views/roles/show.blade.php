@extends('layouts.admin')
@section('admin_content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                        <div>
                            <h2>Show Role</h2>
                        </div>
                        <div>
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong><br/>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="badge badge-success">{{ $v->name }}</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
