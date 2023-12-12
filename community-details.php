<style type="text/css">
    .needfortextarea {
        width: 100%;
        height: 200px;
        background: #ffffff;
        border: 1px solid #e1e1e1;
        margin-bottom: 10px;
        resize: none;
        padding: 10px;
    }

    .needforbutton {
        border: 0;
        line-height: 36px;
        background: #222222;
        font-weight: 500;
    }

    .needforbutton:hover {
        background: #79a206;
    }

    .swal2-icon {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: .5em auto .5em;
        border: 0.25em solid transparent;
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .swal2-title {
        position: relative;
        max-width: 100%;
        margin: 0 0 0em;
        padding: 0;
        color: #595959;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
    }

    .swal2-actions {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin: 20px auto 0;
        padding: 0;
    }

    .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #2778c4;
        color: #fff;
        font-size: 1em;
        padding: 8px 30px;
    }
</style>

<?php if(isset($_GET['post_id'])){ ?>
    <input type="hidden" value="<?php echo $_GET['post_id']; ?>" id="txtpostID">
<?php } else{ ?> 
    <input type="hidden" value="" id="txtpostID">
<?php } ?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>COMMUNITY DETAILS</h3>
                    <ul>
                        <li><a href="index.php?url=home">home</a></li>
                        <li>Community Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog body area start-->
<div class="blog_details" style="margin-top: 30px;">
    <div class="container">
        <div class="row" style="justify-content:center">

            <div class="col-lg-9 col-md-12">
                <!--blog grid area start-->
                <div class="blog_wrapper blog_wrapper_details">

                    <article class="single_post" id="displayallcommunitypost" style="margin-bottom: 50px;">
                        
                    </article>

                    <div class="comments_box" style="margin-bottom: 50px;">
                        <h3><span id="txtnumberofcomments"></span> Comments </h3>
                        <div id="displayallcommunitycomments">
                        </div>
                    </div>

                    <?php if(empty($_SESSION['user_id'])) { ?>

                    <?php } else { ?>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <div class="row">
                                <div class="col-12">
                                    <label for="txtpostcomment">Comment </label>
                                    <textarea class="needfortextarea" id="txtpostcomment"></textarea>
                                </div>
                            </div>
                            <button class="button needforbutton" onclick="savepostcomments()">Post Comment</button>
                        </div>
                    <?php } ?>

                </div>
                <!--post grid area start-->
            </div>
            
        </div>
    </div>
</div>
<!--post section area end-->

<script type="text/javascript">
    $(function() {
        $("#community").addClass('active');
        fncdsplyallcommunitypost();
        fncdsplyallcommunitycomments();
    })

    function fncdsplyallcommunitypost(){
        var textpostID = $("#txtpostID").val();
        $.ajax({
            type: 'POST',
            url: 'community-details_class.php',
            data: 'textpostID=' + textpostID + '&form=fncdsplyallcommunitypost',
            success: function(data){
                $("#displayallcommunitypost").html(data);
            }
        });    
    }

    function fncdsplyallcommunitycomments(){
        var textpostID = $("#txtpostID").val();
        $.ajax({
            type: 'POST',
            url: 'community-details_class.php',
            data: 'textpostID=' + textpostID + '&form=fncdsplyallcommunitycomments',
            success: function(data){
                var show = data.split("|");
                $("#displayallcommunitycomments").html(show[0]);
                $("#txtnumberofcomments").text(show[1]);
            }
        });    
    }

    function savepostcomments(){
        var textpostID = $("#txtpostID").val();
        var textpostcomment = $("#txtpostcomment").val();

        if(textpostID == ""){
            Swal.fire(
              'ALERT',
              'Cannot submit your post.',
              'warning'
            )
        } else{
            if(textpostcomment == ""){
                Swal.fire(
                  'ALERT',
                  'Please enter a comment.',
                  'warning'
                )
            } else{
                $(".loadload").show();
                $.ajax({
                    type: 'POST',
                    url: 'community-details_class.php',
                    data: 'textpostID=' + textpostID + '&textpostcomment=' + textpostcomment + '&form=savepostcomments',
                    success: function(data){
                        setTimeout(function(){
                            $(".loadload").hide();

                            fncdsplyallcommunitycomments();
                            $("#txtpostcomment").val("");
                        },500);
                    }
                });   
            }
        }
    }
</script>