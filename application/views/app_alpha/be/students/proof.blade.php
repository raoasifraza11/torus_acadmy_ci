@extends('master')
@section('content')

    <!-- Start Page title and tab -->
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="content">
                <h1>
                    Upload the voucher / proof picture here
                </h1>
                <form method="post" action="{{base_url("student/course/enrolled/uplaodproof")}}" enctype="multipart/form-data">
                    <input type="file" name="proof_file">
                    <input type="hidden" name="c_id" value="{{$course_id}}">
                    <button type="submit">Submit Proof</button>
                </form>
            </div>
        </div>
    </div>
@endsection
