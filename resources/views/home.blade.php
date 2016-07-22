@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>What do you want to do today?</h3>

                    <!-- tab menu with options to various forms -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Nav tabs -->
                            <div class="card">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#add" aria-controls="add" role="tab" data-toggle="tab">Add your Property</a></li>
                                    <li role="presentation"><a href="#update" aria-controls="update" role="tab" data-toggle="tab">Update property</a></li>
                                    <li role="presentation"><a href="#delete" aria-controls="delete" role="tab" data-toggle="tab">Delete property</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="add">
                                       <p>Fill in a form to add your property details.</p>
                                       <p><a href="{{ URL::to('add Hotel') }}" class="btn btn-primary btn-large">Add Property!</a></p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="update">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="delete">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <link href="{{ URL::asset('stylesheets/home.css') }}">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
