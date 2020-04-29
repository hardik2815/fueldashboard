<?php include 'inc/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Share Certificate</h1>
            <br>
        </div>
        <div class="col-lg-12">
            <form method="post" action="">
                <div style="padding: 0 0 50px 0;">

                    <div class="form-group">
                        <label for="exampleInputCourse">Select Social Media</label>
                        <select class="form-control" id="course" name="course">
                            <option value="">Select</option>
                            <option value="fb">FACEBOOK</option>
                            <option value="linkedin">LINKEDIN</option>
                            <option value="tweet">TWEETER</option>
                        </select>
                    </div>


                    <!--
                    <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                        lang: en_US
                    </script>
                    <script type="IN/Share" data-url="<?php echo $fbpath; ?>"></script>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                    <div class="fb-share-button" data-href="<?php echo $fbpath; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $fbpath; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>


                    <div style="margin-top: -20px; margin-left:250px;">
                        <a href="http://twitter.com/share?text=Hello Guys, Successfully completed AI Training with FUEL&url=<?php echo $fbpath; ?>" class="twitter-share-button" data-show-count="false">Tweet</a>
                    </div>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    -->



                    <img src=" images/certificate/15878358211.jpg" alt="certificate" class="responsive" width="600" height="400">
                </div>
            </form>
            <br />
            <br />
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>