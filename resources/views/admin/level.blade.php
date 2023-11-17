@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 text-center">
                <h4 style="opacity: 70%; display:flex;">Levels</h4>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-3 mb-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLevelModal">
                    Add Level
                </button>
            </div>
        </div>
        <div class="row">
            @foreach ($levels as $level)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h4 class="card-title text-center">{{ $level->name }}</h4>
                        </div>
                        <div class="card-footer">
                            <div class=" text-center mb-2">
                                <a href="{{ route('level.category', $level->id) }}" class="btn btn-success">Category</a>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editLevelModal" data-level-id="{{ $level->id }}"
                                    data-level-name="{{ $level->name }}">
                                    Edit
                                </button>
                                {{-- <a href="{{ route('level.edit', $level->id) }}" class="btn btn-info">Edit</a> --}}
                                <a href="{{ route('level.delete', $level->id) }}"
                                    onclick="confirm('You are about to delete a level')" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


    <!-- Bootstrap Modal for Adding a Level -->
    <div class="modal fade" id="addLevelModal" tabindex="-1" role="dialog" aria-labelledby="addLevelModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLevelModalLabel">Add Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('level.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <!-- Input field for level name -->
                        <div class="mb-3">
                            <label for="levelName" class="form-label">Level Name</label>
                            <input type="text" class="form-control" id="levelName" name="levelName" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Level</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Editing a Level -->
    <div class="modal fade" id="editLevelModal" tabindex="-1" role="dialog" aria-labelledby="editLevelModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLevelModalLabel">Edit Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('level.update') }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Use the correct HTTP method for updating --}}

                    <div class="modal-body">

                        <!-- Input field for level name -->
                        <div class="mb-3">
                            <label for="editLevelName" class="form-label">Level Name</label>
                            <input type="text" class="form-control" id="editLevelName" name="name" required>
                        </div>

                        <!-- Input field for content ID -->
                        <input type="hidden" id="editLevelId" name="level_id" value="">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- JavaScript for image preview -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editModal = document.getElementById('editLevelModal');

            // Attach click event to each edit button
            var editButtons = document.querySelectorAll('.btn-primary[data-toggle="modal"]');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var levelId = this.getAttribute('data-level-id');
                    var levelName = this.getAttribute('data-level-name');

                    // Set values in the modal
                    editModal.querySelector('#editLevelId').value = levelId;
                    editModal.querySelector('#editLevelName').value = levelName;
                });
            });
        });
    </script>
@endsection
