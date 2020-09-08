@extends('backend.includes.base')
@section('title', 'Torus Academy - Student Dashboard')
@section('_pageTitle')


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Student Dashboard</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Torus Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Student Dashboard</li>
            </ol>
        </div>
        <ul class="nav nav-tabs page-header-tab">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Courses-all">List View</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Courses-type">Course Type</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Courses-add">Add Course</a></li>
        </ul>
    </div>
</div>


@endsection

@section('content')



@endsection