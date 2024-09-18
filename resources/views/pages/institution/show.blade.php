@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building">Show Institution</span>
        </h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                   <td>Institution</td>
                   <td>{{ $institution->name }}</td>
               </tr>
               <tr>
                  <td>Created at</td>
                  <td>{{ Carbon\Carbon::parse($institution->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
               </tr>
               <tr>
                  <td>Update at</td>
                  <td>{{ Carbon\Carbon::parse($institution->updated_at)->isoformat('DD MMMM Y HH:mm') }}</td>
               </tr>
               <td>
                <a href="{{ route('admin.institution.index') }}" class="btn btn-outline-secondary btn-sm me-1">
                  <span class="bi bi-arrow-left">Kembali</span>
                </a>
               </td>
            </table>
            </div>
        </div>
@endsection