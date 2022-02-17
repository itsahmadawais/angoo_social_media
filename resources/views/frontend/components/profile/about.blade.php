<div class="container mb-3">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-body p-0">
                    <h5>About</h5>
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Overview</button>
                        <button class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Work and Education</button>
                        <button class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contact ans Basic Info</button>
                        <button class="nav-link text-start" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Details About You</button>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="toggle-form">
                        <a href="javascript:void(0)" class="toggle-btn">
                            <span class="circle-outline-btn">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span>Add a workplace</span>
                        </a>
                        <div class="toggle-div card mt-2 mb-2">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Position</label>
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label class="form-label">Started Year</label>
                                            <select class="form-control">
                                                <option value="2021">2021</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Ended Year</label>
                                            <select class="form-control">
                                                <option value="2021">2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="checkbox" id="currently-work-here" class="form-check-control">
                                        <label class="form-check-label" id="currently-work-here">Currently Work Here</label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Privacy</label>
                                            <select class="form-control">
                                                @foreach($privacy as $p)
                                                    <option value="{{$p->title}}">{{$p->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <ul class="workplace-list mt-3">
                        <li>
                            <div class="d-flex">
                                <div class="text-muted">
                                    icon
                                </div>
                                <div class="text-muted">
                                    <h6 class="pb-0">Web Application Developer at Techno Digg</h6>
                                    <p class="pt-0">21 March 2021 to present</p>
                                </div>
                                <div class="privacy">
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                </div>
              </div>
        </div>
    </div>
</div>