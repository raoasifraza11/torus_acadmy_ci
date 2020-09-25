@extends('master')
@section('content')

    <!-- Start Page title and tab -->
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="content">
                <h1>You have subscribed CLASS NAME <a href="<?php echo base_url('courses'); ?>" class="float-right text-warning small">Request Change <i class="fa fa-pencil"></i></a></h1>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>Subject Name</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Chemistry</td>
                        <td><span class="tag tag-success">Enrolled</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Math</td>
                        <td><span class="tag tag-success">Enrolled</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Physic</td>
                        <td><span class="tag tag-success">Enrolled</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection