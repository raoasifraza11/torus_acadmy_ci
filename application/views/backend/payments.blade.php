@extends('backend.includes.base')
@section('title', 'Torus Academy - Payments')
@section('_pageTitle')


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Fees</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Torus Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fees</li>
            </ol>
        </div>
        <ul class="nav nav-tabs page-header-tab">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
            <li class="nav-item"><a class="nav-link" href="payments-add.html">Add Fees</a></li>
        </ul>
    </div>
</div>


@endsection

@section('content')


<div class="container-fluid">
    <div class="tab-content">
        <div class="tab-pane active" id="Fees-all">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                            <thead>
                                <tr>
                                    <th>Roll No.</th>
                                    <th>Student Name</th>
                                    <th>Fees Type</th>
                                    <th>Date</th>
                                    <th>Invoice No.</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>111</td>
                                    <td>Corrine Johnson</td>
                                    <td>Annual</td>
                                    <td>12 Jan 2018</td>
                                    <td>IN-4578</td>
                                    <td>cash</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>248$</td>
                                </tr>
                                <tr>
                                    <td>112</td>
                                    <td>Gladys Smith</td>
                                    <td>Tuition</td>
                                    <td>12 Feb 2018</td>
                                    <td>IN-3695</td>
                                    <td>cheque</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>124$</td>
                                </tr>
                                <tr>
                                    <td>113</td>
                                    <td>Alice Smith</td>
                                    <td>Annual</td>
                                    <td>24 Feb 2018</td>
                                    <td>IN-4679</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-red">unpaid</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>114</td>
                                    <td>Gladys Smith</td>
                                    <td>Tuition</td>
                                    <td>25 Feb 2018</td>
                                    <td>IN-2839</td>
                                    <td>cashn</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>112$</td>
                                </tr>
                                <tr>
                                    <td>115</td>
                                    <td>Corrine Johnson</td>
                                    <td>Transport</td>
                                    <td>12 March 2018</td>
                                    <td>IN-4916</td>
                                    <td>cheque</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>116</td>
                                    <td>Gladys Smith</td>
                                    <td>Tuition</td>
                                    <td>12 May 2018</td>
                                    <td>IN-7542</td>
                                    <td>cashn</td>
                                    <td><span class="tag tag-red">unpaid</span></td>
                                    <td>421$</td>
                                </tr>
                                <tr>
                                    <td>117</td>
                                    <td>Alice Smith</td>
                                    <td>Transport</td>
                                    <td>12 May 2018</td>
                                    <td>IN-8653</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>124$</td>
                                </tr>
                                <tr>
                                    <td>118</td>
                                    <td>Gladys Smith</td>
                                    <td>Library</td>
                                    <td>12 May 2018</td>
                                    <td>IN-4859</td>
                                    <td>cheque</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>485$</td>
                                </tr>
                                <tr>
                                    <td>119</td>
                                    <td>Alice Smith</td>
                                    <td>Annual</td>
                                    <td>12 Jun 2018</td>
                                    <td>IN-2648</td>
                                    <td>cheque</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>231$</td>
                                </tr>
                                <tr>
                                    <td>120</td>
                                    <td>Corrine Johnson</td>
                                    <td>Tuition</td>
                                    <td>21 Jun 2018</td>
                                    <td>IN-4875</td>
                                    <td>cashn</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>4856$</td>
                                </tr>
                                <tr>
                                    <td>121</td>
                                    <td>Gladys Smith</td>
                                    <td>Transport</td>
                                    <td>28 Jun 2018</td>
                                    <td>IN-7946</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-red">unpaid</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>Ken Smith</td>
                                    <td>Annual</td>
                                    <td>12 Jun 2018</td>
                                    <td>IN-9135</td>
                                    <td>cheque</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>Corrine Johnson</td>
                                    <td>Annual</td>
                                    <td>22 Jun 2018</td>
                                    <td>IN-5284</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>124</td>
                                    <td>Ken Smith</td>
                                    <td>Transport</td>
                                    <td>18 Aug 2018</td>
                                    <td>IN-4613</td>
                                    <td>cashn</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>254$</td>
                                </tr>
                                <tr>
                                    <td>125</td>
                                    <td>Emmett Johnson</td>
                                    <td>Annual</td>
                                    <td>13 Aug 2018</td>
                                    <td>IN-1826</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-red">unpaid</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>126</td>
                                    <td>Ken Smith</td>
                                    <td>Library</td>
                                    <td>17 Aug 2018</td>
                                    <td>IN-76149</td>
                                    <td>cashn</td>
                                    <td><span class="tag tag-green">paid</span></td>
                                    <td>340$</td>
                                </tr>
                                <tr>
                                    <td>127</td>
                                    <td>Emmett Johnson</td>
                                    <td>Annual</td>
                                    <td>4 Sept 2018</td>
                                    <td>IN-3794</td>
                                    <td>credit card</td>
                                    <td><span class="tag tag-orange">pending</span></td>
                                    <td>548$</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection