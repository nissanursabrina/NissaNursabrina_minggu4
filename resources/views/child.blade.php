@extends('layouts.app')
@section('title', 'Profil')
@section('sidebar')
@parent
<p>Sidebar halaman Profil.</p>
@endsection
@section('content')
{{$post}}
@endsection
