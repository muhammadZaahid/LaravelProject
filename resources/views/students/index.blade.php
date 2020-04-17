@extends('layout.main')

@section('title','Daftar Mahasiswa Baru')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Mahasiswa Baru</h1>
            
            <ul class="list-group">
            @foreach ($students as $students)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $students -> nama}}
            <a href="/students/{{$students -> id}}" class="badge bagde-info">details</a>
            </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection