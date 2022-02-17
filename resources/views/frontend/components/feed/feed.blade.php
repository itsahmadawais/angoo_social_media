<main id="feed" class="content-page text-start">
    @include('frontend.components.feed.create')
    <div class="card feed-post">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <div class="profile-image">
                        <img src="{{asset('assets/images/icons/trophy.png')}}" class="avatar" loading="lazy"/>
                        <div class="online-status online">
                        </div>
                    </div>
                    <div class="profile-meta">
                        <p class="name">Angoo User</p>
                        <div class="d-flex time-and-privacy">
                            <p class="posted-date me-2">16 Min ago</p>
                            <p><i class="fa fa-globe"></i></p>
                        </div>
                    </div>
                    <div class="more-menu">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenubutton1" data-bs-toggle="dropdown" aria-expanded="false">
                              
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenubutton1">
                              <li>
                                  <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i> Delete</a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Change Privacy</a>
                              </li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="feed-text p-2">
                On a Lighter note.
            </div>
            <div class="text-center">
                <img src="{{asset('assets/images/bg.jpg')}}" class="img-fluid" loading="lazy" />
            </div>
            <div class="post-analytics p-2">
                <div class="row">
                    <div class="col">
                    <i class="fa fa-thumbs-up"></i> 132 Likes
                    </div>
                    <div class="col d-flex  flex-row-reverse">
                        <div class="comments">
                            6 Comments
                        </div>
                        <div class="shares me-3">
                            2 Shares
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            
            <div class="btn-group d-flex">
                <div class="reactions btn p-0">
                    <div class="reactions-emojis text-start">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="like" data-emoji="1">
                                    <i class="fa fa-thumbs-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="heart" data-emoji="2">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="reaction-btn btn btn-grey w-100"><i class="fa fa-thumbs-up"></i> Like</button>
                </div>
                <button class="btn btn-grey"><i class="fa fa-comment"></i> Comment</button>
                <button class="btn btn-grey"><i class="fa fa-share"></i> Share</button>
            </div>
            <div class="d-flex">
                <div class="avatar">
                    <img src="{{asset('storage/users-avatars/avatar.png')}}">
                </div>
                <div class="comment-input">
                    <input type="text" name="comment-text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body text-center">
            <i class="fas fa-rss-square"></i>
            No More Posts!
        </div>
    </div>
</main>