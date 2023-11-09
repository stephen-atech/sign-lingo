@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Content Page</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 mb-3">
                <button type="button" class="btn btn-dark" onclick="history.back()">
                    Back
                </button>
            </div>
            <div class="col-md-3 mb-3 ms-auto">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addContentModal">
                    Add Content
                </button>
            </div>
       
            
        </div>
        
        <div class="row row-space">
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <style>
                .row-space {
                    margin-right: 50px;
                    padding-left: 80px;
                    justify-content: space-between;

                }
            </style>

            
          
            
            
        </div>

    </div>
       <!-- Bootstrap Modal for Adding a Level -->
       <div class="modal fade" id="addContentModal" tabindex="-1" role="dialog" aria-labelledby="addContentModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="addContentModalLabel">Add Content</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="#" method="POST">
                   @csrf
                   <div class="modal-body">
                     <!-- Input field for image -->
                     <div class="mb-3">
                        <label for="levelImage" class="form-label">Level Image</label> <br>
                         <!-- Image previewer -->
                         <img id="imagePreview" class="img-fluid mt-2" style="max-height: 200px;" alt="Image Preview">
                        <input type="file" class="form-control" id="levelImage" name="levelImage" accept="image/*">
                       
                    </div>


                    <!-- Input field for level name -->
                    <div class="mb-3">
                        <label for="levelName" class="form-label">Level Name</label>
                        <input type="text" class="form-control" id="levelName" name="levelName" required>
                    </div>
                
                   
                    <!-- Input field for description -->
                    <div class="mb-3">
                        <label for="levelDescription" class="form-label">Level Description</label>
                        <textarea class="form-control" id="levelDescription" name="levelDescription" rows="4"></textarea>
                    </div>
                
                    <!-- Input field for level owner name -->
                    <div class="mb-3">
                        
                        <input type="hidden" class="form-control" id="ownerName" name="ownerName">
                    </div>
                </div>
                
                <!-- JavaScript for image preview -->
                <script>
                    document.getElementById('levelImage').addEventListener('change', function (event) {
                        let preview = document.getElementById('imagePreview');
                        let file = event.target.files[0];
                        let reader = new FileReader();
                
                        reader.onload = function () {
                            preview.src = reader.result;
                        };
                
                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });
                </script>
                
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary">Save Level</button>
                   </div>
               </form>

           </div>
       </div>
   </div>
@endsection
