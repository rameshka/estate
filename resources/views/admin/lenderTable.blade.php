@extends('layouts.masteradmin')

@section('title', 'Page Title')

@section('css')
    <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../css/login/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <h3 class="header" style="font-size:28px;font-weight:bold">Advisor List</h3>
                    <h7>Select ID from a row to continue editing </h7>
                    <!--DataTables example Row grouping-->
                    <div id="row-grouping" class="section">
                        <div class="row">
                            <div class="col s12 m8 l9">
                                <table id="data-table-row-grouping" class="display" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Registered By</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Registered By</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($result as $lender)
                                        <tr >
                                            <td> <a  href="{{ URL::route('editLender', $lender->getLenderID())}}">{!! $lender->getLenderID() !!}&emsp;</a> </td>
                                            <td> {!! $lender->getName() !!}&emsp;</td>
                                            <td> {!! $lender->getEmail() !!}&emsp;</td>
                                            <td> {!! $lender->getTelephone() !!}&emsp;</td>
                                            <td> {!! $lender->getCreatedBy() !!}&emsp;</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


@section('tablejs')
    <!--scrollbar-->
    <script type="text/javascript" src="../js/login/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../js/tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/tables/data-tables-script.js"></script>

@endsection
