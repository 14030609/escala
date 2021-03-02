@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Paises CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"  title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($paises as $project)
            <tr>
                <td>{{ 'ds' }}</td>
                <td>{{ $project->paies }}</td>
                <td>
             
                </td>
            </tr>
        @endforeach
    </table>



@endsection