
<!--add collapse -->
<div class="row d-flex p-3 ">
    <div class="col-sm-10 offset-sm-1 d-flex" style="height: 74vh; flex-direction: column">
        <div class="card">
            <div class="card-header">
                <div class="media row m-3">
                    <div class="col-8">
                        <h1 class="title">New Post</h1>
                    </div>

                    <div class="d-flex col-4 media-img justify-content-end">
                        <i class="d-inline"></i>
                        <img class="d-inline card-img float-right" style="max-width:75px" src="{{ asset('img/5081.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="card-body form-container">
                <div class="col p-4">
                    <form class="" action="/postCreate" method="post">
                        @csrf
                        <div class="input-group p-2">
                            <input class="form-control form-control-lg" type="text" name="title" placeholder="Title">
                        </div>
                        <div class="input-group p-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="postImage">add Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="postImage" aria-describedby="postImage">
                                <label class="custom-file-label" for="postImage">Choose file</label>
                            </div>
                        </div>
                        <div class="input-group p-2">
                            <input class="form-control" type="text" name="description" placeholder="Description">
                        </div>
                        <div class="input-group  p-2">
                            <textarea class="form-control" name="content" placeholder="please write somethingif you lik" rows="5"></textarea>
                        </div>
                        <button class="d-inline btn btn-primary float-right m-2" type="submit">
                            + add post
                        </button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>