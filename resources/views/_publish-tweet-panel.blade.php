<div class="card card-small">
    <div class="share-box-inner">
        <!-- profile picture end -->
        <div class="profile-thumb">
            <a href="#">
                <figure class="profile-thumb-middle">
                    <img src="{{asset("user/images/profile")}}/{{auth()->user()->profile_img}}" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <!-- share content box start -->
        <div class="share-content-box w-100">
            <form class="share-text-box">
                <textarea name="body" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                <button class="btn-share" type="submit">share</button>
            </form>
        </div>
        <!-- share content box end -->

        <!-- Modal start -->
        <div class="modal fade" id="textbox" aria-labelledby="textbox">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Share Your Mood</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{route('store_tweets')}}" class="share-text-box" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body custom-scroll">

                            <textarea name="body" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                        </div>
                        <div class="modal-footer">
                            <input type="file" name="image" class="post-share-btn" >
                            <button type="submit" class="post-share-btn">post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
</div>
