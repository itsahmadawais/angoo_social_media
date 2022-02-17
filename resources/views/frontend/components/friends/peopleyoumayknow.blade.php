<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>People You May Know</h4>
        </div>
        @foreach($possibleFriends as $p)
            <div class="col-md-2">
                <div class="add-friend-card card mt-1 mb-1">
                    <a href="javscript:void(0)">
                        <img src="{{asset('storage/users-avatar/avatar.png')}}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="javascript:void(0)" class="name">
                            <p class="m-0">{{$p->name}}</p>
                        </a>
                        <p class="text-muted m-0">2 mutual friends</p>
                        <div class="btn-block text-center mt-1">
                            <button class="send-friend-request-btn btn btn-primary" data-friend="{{$p->id}}">
                                <i class="fas fa-user-plus"></i> Add Friend
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@section('script')
    
@endsection