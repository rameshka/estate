
@extends('layouts.masterseller')

@section('title', 'Page Title')


        @section('content')

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <form class="col s12">
                                <h4 class="header2">Inline form</h4>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">First Name</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="mdi-action-lock-outline prefix"></i>
                                        <input id="icon_password" type="password" class="validate">
                                        <label for="icon_password">Password</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-lock-open"></i> Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div  id="card-widgets" class="section">
        <div id="card-widgets" class="seaction">
            <div class="row">

                <div class="col s12 m4 l4">
                    <h4 class="header">Image Card</h4>
                    <div class="card">
                        <div class="card-image">
                            <a href="#">    <img src="images/sample-1.jpg" alt="sample image"></a>

                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am convenient because I require little</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <h4 class="header">Image Card</h4>
                    <div class="card">
                        <div class="card-image">
                            <a href="#">    <img src="images/sample-1.jpg" alt="sample image"></a>

                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am convenient because I require little</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <h4 class="header">Image Card</h4>
                    <div class="card">
                        <div class="card-image">
                            <a href="#">    <img src="images/sample-1.jpg" alt="sample image"></a>

                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am convenient because I require little</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card widgets end-->
    </div>
@endsection
<!-- END CONTENT -->