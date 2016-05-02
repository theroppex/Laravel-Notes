@extends('layouts.app')

<?php $counter = 0; ?>

@section('content')

@include('snips/notes')

<div id="add-note-modal" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Note</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <form class="col-md-12" method="post" action="/add-note">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="row">
                    <div class="input-field col-md-12">
                      <input type="text" name="title" class="materialize-textarea" required>
                      <label for="textarea1">Title</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col-md-12">
                      <textarea name="body" class="materialize-textarea" required></textarea>
                      <label for="body">Note</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field cold-md-12">
                        <button type="submit" class="btn btn-default waves-effect waves-light">Add</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>

  </div>
</div>

<a class="btn-floating btn-small waves-effect waves-light red floating-button" href="#" data-toggle="modal" data-target="#add-note-modal"><i class="material-icons">add</i></a>
@endsection
