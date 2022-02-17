<div id="create-post" class="card mt-2 mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="{{asset('storage/users-avatar/'.auth()->user()->avatar)}}" class="img-thumbnail">
                        </div>
                        <div class="ps-1 pe-1 pb-1 flex-grow-1">
                            <input id="input-post" type="text" class="form-control" placeholder="What's On Your Mind?{{auth()->user()->first_name}}" readonly>
                            <hr>
                            <div class="d-flex options">
                                <div class="icon">
                                    <img src="{{asset('assets/images/icons/image-gallery.png')}}"> Photos
                                </div>
                                <div class="icon">
                                    <img src="{{asset('assets/images/icons/location.png')}}"> Check-In
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Post Modal -->
<div id="postModal" class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="postscreen" class="" data-screen="1">
                <div class="d-flex">
                    <img src="{{asset('storage/users-avatar/'.auth()->user()->avatar)}}" class="img-thumbnail" width="40px">
                    <button id="privacy-btn" class="btn btn-sm btn-privacy">
                        <i class="fa fa-user"></i> Public
                    </button>
                </div>
                <div class="mt-3 mb-3">
                    <textarea class="post-message" placeholder="What's On Your Mind?{{auth()->user()->first_name}}" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <div id="image-box" class="text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="image-uploader-box">
                                    <div class="card-head text-end">
                                        <a id="remove-img-post" href="javascript:void()" class="btn btn-cirlce">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0)" class="img-picker">
                                        <i class="fas fa-upload"></i>
                                        <p>Upload Images</p>
                                        <p class="text-muted">Click OR Drag Drop</p>
                                        <div class="d-none">
                                            <input type="file" name="images">
                                        </div>
                                    </a>
                                    <div class="d-none">
                                        <input type="file" id="postImages" name="postImages" accept="image/*">
                                    </div>
                                </div>
                                <div id="postImagesCollection" class="row mt-2">
                                    <div class="img-box-container col-4">
                                        <div class="img-box">
                                            <input type="hidden" name="img[]" value="">
                                            <img src="{{asset('assets/images/bg.jpg')}}" class="w-100">
                                            <a href="javascript:void(0)" class="remove-btn">
                                                <span class="badge bg-danger">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex options">
                    <div class="icon">
                        <a id="photo-post" href="javascript:void(0)">
                            <img src="{{asset('assets/images/icons/image-gallery.png')}}"> Photos
                        </a>
                    </div>
                    <div class="icon">
                        <a id="check-post" href="javascript:void(0)">
                            <img src="{{asset('assets/images/icons/location.png')}}"> Check-In
                        </a>
                    </div>
                </div>
                <div class="mb-3 text-end">
                    <button class="btn btn-primary">Create Post</button>
                </div>
            </div>
            <div id="privacyscreen" class="screen-hide" data-screen="2">
                <div class="navigation mb-3">
                    <div class="d-flex">
                        <div class="goback me-2">
                            <a id="goBackToPostCreator" href="javascript:void(0)" class="btn">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="text fw-bold">
                            Change Privacy
                        </div>
                    </div>
                </div>
                <ul class="privacy-list">
                    <li class="list-item active">
                        <div class="d-flex">
                            <div class="radio me-2">
                                <input type="radio" name="privacy" value="public">
                            </div>
                            <div class="icon me-2">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="text">
                                <p class="heading">
                                    Public
                                </p>
                                <p class="description">
                                    Make it visible to everyone.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="d-flex">
                            <div class="radio me-2">
                                <input type="radio" name="privacy" value="friends">
                            </div>
                            <div class="icon me-2">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="text">
                                <p class="heading">
                                    Friends
                                </p>
                                <p class="description">
                                    Make it visible to friends.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="d-flex">
                            <div class="radio me-2">
                                <input type="radio" name="privacy" value="onlyme">
                            </div>
                            <div class="icon me-2">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="text">
                                <p class="heading">
                                    Only Me
                                </p>
                                <p class="description">
                                    Make it visible to none.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="check-inscreen" class="screen-hide" data-screen="3">
                Screen 3
            </div>
        </div>
      </div>
    </div>
  </div>