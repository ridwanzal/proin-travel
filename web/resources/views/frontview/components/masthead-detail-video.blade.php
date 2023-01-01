<section class="masthead__wrapper text-dark masthead__detail">
    <?php
    $bg = $background_image_name ?? 'bgd.png';
    ?>
    <div class="masthead__detail--video">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('videos/tangkaptuna.mp4') }}" type="video/mp4">
        </video>
        <div class="animate__animated animate__fadeIn">
            <div class="content"></div>
            <div class="content-text">
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <h4 class="mb-3 d-none d-lg-block">One fish at a time safest way to catch the fish</h4>
                            <h6 class="mb-3 d-lg-none d-block">One fish at a time safest way to catch the fish</h6>
                            <a href="https://www.youtube.com/watch?v=nu4-Ly1euI8" target="_blank"
                                class="btn btn-warning ps-4 pe-4">Watch <span class="ai-video"></span></a>
                            <div class="float-end d-block">
                                <small
                                    style="color:#ccc;font-size:12px !important; left: -10px; top:10px; position:relative;">Courtesy
                                    of youtube [@TOTOBEMANIAMOROTAI]</small>
                                </divc>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
