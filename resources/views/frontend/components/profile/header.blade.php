<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="about-user" class="card p-0 border-0">
                    <div class="card-body">
                        @php
                            $image = asset('assets/images/bg.jpg');
                            if($user->cover_photo!==null){
                                $image = asset('storage/cover_photos/'.$user->cover_photo);
                            }
                        @endphp
                        <div class="cover-photo text-end" style="background-image: url('{{$image}}'); width:100%;">
                            {{-- Edit User Profile Button --}}
                            @if(auth()->user()->id==$user->id)
                                <button id="cover-photo-btn" class="btn btn-outline-white">Edit Cover Photo</button>
                                <div class="d-none">
                                    <form id="cover-photo-form" action="{{url('user/cover_photo')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" id="cover_photo" name="cover_photo" accept="image/*">
                                    </form>
                                </div>
                            @endif
                        </div>
                        <div class="user-meta text-center">
                            <div class="avatar">
                                <img src="{{asset('storage/users-avatar/'.$user->avatar)}}">
                                {{-- Edit User Profile Picture Button --}}
                                @if(auth()->user()->id==$user->id)
                                    <div class="edit">
                                        <a id="update-avatar-btn" class="btn edit-btn" href="javascript:void(0);">
                                            <i class="fas fa-camera"></i>
                                        </a>
                                        <div class="d-none">
                                            <form id="update-avatar-form" action="{{url('user/avatar_photo')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" id="avatar" name="avatar" accept="image/*">
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <h1>{{$user->name}}</h1>
                            <p>{{$user->about}}</p>
                            @if(auth()->user()->id==$user->id)
                            <div class="edit">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit <i class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                            @endif
                        </div>
                        <hr>
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="{{url($user->username)}}">Posts</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('about/'.$user->username)}}">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('friends/'.$user->username)}}">Friends</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('friends/request')}}">Friends Request</a>
                            </li>
                            @if(auth()->user()->id!==$user->id)
                            <li class="nav-item">
                              <a class="btn btn-primary">
                                  <i class="fa fa-user-plus"></i> Add Friend
                              </a>
                            </li>
                            @endif
                          </ul>
                          <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Change Description Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change About</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('user/description')}}" method="POST">
                <div class="mb-3">
                    <label class="form-label text-muted">Write about yourself (100 Characters)</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Write about yoruself"></textarea>
                    <div class="text-end">
                        <p>200 Characters</p>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>