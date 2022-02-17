<div class="container mt-2 mb-2 p-4">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h4>Friends</h4>
                </div>
                @foreach($possibleFriends as $p)
                    <div class="col-md-4">
                        <div class="add-friend-card card mt-1 mb-1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="javscript:void(0)">
                                            <img src="{{asset('storage/users-avatar/avatar.png')}}" class="card-img-top" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="javascript:void(0)" class="name">
                                            <p class="m-0">{{$p->name}}</p>
                                        </a>
                                        <p class="text-muted m-0">2 mutual friends</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenubutton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenubutton1">
                                              <li>
                                                  <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i> Unfriend</a>
                                              </li>
                                              <li>
                                                  <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Block</a>
                                              </li>
                                            </ul>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@section('script')
    
@endsection