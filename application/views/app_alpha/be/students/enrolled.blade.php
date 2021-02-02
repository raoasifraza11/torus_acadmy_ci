@extends('master')
@section('content')

    <!-- Start Page title and tab -->
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>Subject Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php $i=1; foreach ($courses as $course ){ ?>
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ ucfirst($course->name) }}</td>
                        <td>

							<span class="tag tag-success"> <?php if ($course->payment_status){  ?> Enrolled <?php }else{ ?> Pending <?php }?></span>
						</td>
                        <td>
                            <a href="{{ base_url('student/course/enrolled/proof/').$course->id }}"> <i class="fa fa-pencil"></i> Add Proof</a>
                        </td>
                    </tr>
					<?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
