@extends('layouts.masteradmin')

@section('title', 'Page Title')

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <h3 class="header" style="font-size:28px;font-weight:bold">Add Auction</h3>
                    <div class="divider"></div>

                    <!--Input fields-->
                    <form action='{{route('saveCity')}}' method="post">
                    <div id="input-fields">
                        <h4 class="header">Auction</h4>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" name="name" type="text" class="validate">
                                <label for="name">Auction name</label>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div id="input-fields">
                        <h4 class="header">Place</h4>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="place" type="text" class="validate" name="place" required>
                                <label for="first_name">Place</label>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div id="input-fields">
                        <h4 class="header">Time</h4>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="ID" type="text" class="validate" name="time" required>
                                <label for="first_name">Time</label>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>

                        <div class="row">
                            <h4 class="header">Date</h4>
                            <div class="input-field col s6">
                                <input id="sDate" type="date" class="datepicker">
                                <label for="sDate">Start Date</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="eDate" type="date" class="datepicker">
                                <label for="eDate">End Date</label>
                            </div>
                        </div>

                    <!--Icon Prefixes-->

                    <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit <i class="mdi-content-send right"></i> </button>
                        </div>
                    </div>
                    </form>
                </div>
@endsection