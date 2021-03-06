<div class="modal fade" id="modalEdit-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">   
            <div class="modal-body p-0">  
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header">
                        <div class="text-center mt-2 mb-3"><h3><i class="ni ni-briefcase-24 text-primary"></i> Category </h3></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Please fill the box with the name of category</small>
                        </div>
                        <form action="{{ route('frontend.product-categories.update','update')}}" method="POST">
                            {{csrf_field()}}
                            {{ method_field('PUT')}}   
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-spaceship"></i></span>
                                    </div>
                                    <input type="hidden" name="id" id="id">
                                    <input class="form-control" placeholder="Name" id="name" name="name" type="text">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>