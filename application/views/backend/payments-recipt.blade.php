@extends('backend.includes.base')
@section('title', 'Torus Academy - Payment Receipt')
@section('_pageTitle')


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Fees</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trous Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fees</li>
            </ol>
        </div>
        <ul class="nav nav-tabs page-header-tab">
            <li class="nav-item"><a class="nav-link" href="payments.html">List</a></li>
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-Receipt">Fees Receipt</a></li>
            <li class="nav-item"><a class="nav-link" href="payments-add.html">Add Fees</a></li>
        </ul>
    </div>
</div>


@endsection

@section('content')


<div class="container-fluid">
    <div class="tab-content">

        <div class="tab-pane active" id="Fees-Receipt">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">#AB0017</h3>
                    <div class="card-options">
                        <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print Invoice</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row my-8">
                        <div class="col-6">
                            <p class="h3">Company</p>
                            <address>
                                Street Address<br>
                                State, City<br>
                                Region, Postal Code<br>
                                ltd@example.com
                            </address>
                        </div>
                        <div class="col-6 text-right">
                            <p class="h3">Client</p>
                            <address>
                                Street Address<br>
                                State, City<br>
                                Region, Postal Code<br>
                                ctr@example.com
                            </address>
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <th class="text-center width35"></th>
                                    <th>Product</th>
                                    <th class="text-center" style="width: 1%">Qnt</th>
                                    <th class="text-right" style="width: 1%">Unit</th>
                                    <th class="text-right" style="width: 1%">Amount</th>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <p class="font600 mb-1">Logo Creation</p>
                                        <div class="text-muted">Logo and business cards design</div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$1.800,00</td>
                                    <td class="text-right">$1.800,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                        <p class="font600 mb-1">Online Store Design &amp; Development</p>
                                        <div class="text-muted">Design/Development for all popular modern browsers</div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$20.000,00</td>
                                    <td class="text-right">$20.000,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>
                                        <p class="font600 mb-1">App Design</p>
                                        <div class="text-muted">Promotional mobile application</div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$3.200,00</td>
                                    <td class="text-right">$3.200,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="font600 text-right">Subtotal</td>
                                    <td class="text-right">$25.000,00</td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="4" class="font600 text-right">Vat Rate</td>
                                    <td class="text-right">20%</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="font600 text-right">Vat Due</td>
                                    <td class="text-right">$5.000,00</td>
                                </tr>
                                <tr class="bg-green text-light">
                                    <td colspan="4" class="font700 text-right">Total Due</td>
                                    <td class="font700 text-right">$30.000,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection