@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="well well-md col-md-offset-2 col-md-8" id="well1">
            <form role="form" class="form-horizontal" action="{{ url('/addHotel') }}" method="POST">

                <div class="form-group">
                    <label class="control-label col-md-3" for="propertyname">Name of property:</label>
                    <div class="col-md-6">
                        <input type="text" id="propertyname" class="form-control">
                    </div>
                </div>
                <!-- selects 1 of many -->
                <div class="form-group">
                    <label class="control-label col-md-3" for="sel1">Property Type:</label>
                    <div class="col-md-3" id="sel1">
                        <select class="form-control">
                            <option>Hotel</option>
                            <option>Lodge</option>
                            <option>Guest House</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="email">Service email:</label>
                    <div class="col-md-6">
                        <input type="email" id="email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="address">Address:</label>
                    <div class="col-md-6">
                        <input type="text" id="address" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="propertyname">City:</label>
                    <div class="col-md-6">
                        <input type="text" id="city" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="descrip">Summarized description</label>
                    <div class="col-md-6">
                        <textarea class="form-control" row="5" id="descrip"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="websit">Website (URL):</label>
                    <div class="col-md-6">
                        <input type="text" id="websit" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="contact">Phone:</label>
                    <div class="col-md-4">
                        <input type="text" id="contact" class="form-control" placeholder="+0211 -XXX XXX">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="sel2">Public rating:</label>
                    <div class="col-md-3" id="sel2">
                        <select class="form-control">
                            <option>not rated</option>
                            <option>1 star</option>
                            <option>2 stars</option>
                            <option>3 stars</option>
                            <option>4 stars</option>
                            <option>5 stars</option>
                        </select>
                    </div>
                </div>
                <div style="float: right;">
                    <a class="btn btn-link" href="{{ url('addHotel') }}">Add Hotel</a>
                    <button type="button" class="btn btn-md btn-primary">Cancel</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            </form> <!-- end of form -->

        </div> <!-- end of well -->

    </div>
@endsection


