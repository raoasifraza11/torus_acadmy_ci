@extends('backend.includes.base')
@section('title', 'Torus Academy - App Compose')
@section('_css')

<link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="./assets/plugins/summernote/dist/summernote.css" />

<!-- Core css -->
<link rel="stylesheet" href="./assets/css/style.min.css" />

@endsection

@section('_pageTitle')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Compose</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">App</a></li>
                <li class="breadcrumb-item"><a href="app-email.html">Inbox</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compose</li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-body mail_compose">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="To">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="CC">
                        </div>
                    </form>
                    <div class="summernote">
                        Hello there,
                        <br />
                        <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                        <p>Please try <b>paste some texts</b> here</p>
                    </div>
                    <div class="mt-4 text-right">
                        <button type="button" class="btn btn-success">Send Message</button>
                        <button type="button" class="btn btn-outline-secondary">Draft</button>
                        <a href="app-email.html" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection