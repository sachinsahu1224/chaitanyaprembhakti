<style type="text/css">
<style>
.comments-details button.btn.dropdown-toggle,
.comments-details .total-comments {
font-size: 18px;
font-weight: 500;
color: #5e5e5e;
}
.comments-details {
padding: 15px 15px;
}
.comments .comments .dropdown,
.comments .dropup {
position: relative;
}
.comments button {
background-color: transparent;
border: none;
}
.comments .comment-box {
width: 100%;
float: left;
height: 100%;
background-color: #FAFAFA;
padding: 10px 10px 10px;
margin-bottom: 15px;
border-radius: 5px;
border: 1px solid #ddd;
}
.comments .add-comment {
background-color: transparent;
border: none;
position: relative;
margin-bottom: 50px;
}
.comments .commenter-pic {
width: 50px;
height: 50px;
display: inline-block;
border-radius: 100%;
border: 2px solid #fff;
overflow: hidden;
background-color: #fff;
}
.comments .add-comment .commenter-name {
width: 100%;
padding-left: 75px;
position: absolute;
top: 20px;
left: 0px;
}
.comments .add-comment input {
border-top: 0px;
border-bottom: 1px solid #ccc;
border-left: 0px;
border-right: 0px;
outline: 0px;
box-shadow: none;
border-radius: 0;
width: 100%;
padding: 0;
font-weight: normal;
}
.comments .add-comment input:focus {
border-color: #03a9f4;
border-width: 2px;
}
.comments .add-comment button[type=submit] {
background-color: #03a9f4;
color: #fff;
margin-right: 0px;
}
.comments .add-comment button {
background-color: #f5f5f5;
margin: 10px 5px;
font-size: 14px;
text-transform: uppercase;
float: right;
}
.comments .commenter-name .comment-time {
font-weight: normal;
margin-left: 8px;
font-size: 15px;
}
.comments p.comment-txt {
font-size: 15px;
border-bottom: 1px solid #ddd;
padding: 0px 0px 15px;
}
.comments .commenter-name {
display: inline-block;
position: relative;
top: -20px;
left: 10px;
font-size: 16px;
font-weight: bold;
}
.comments .comment-meta {
font-size: 14px;
color: #333;
padding: 2px 5px 0px;
line-height: 20px;
float: right;
}
.comments .reply-box {
display: none;
}
.comments .replied {
background-color: #fff;
width: 95%;
float: right;
margin-top: 15px;
}
/*======Responsive CSS=======*/
@media (max-width: 767px){
.comments .commenter-name {
font-size: 13px;
top: -5px;
}
.comments .commenter-pic {
width: 40px;
height: 40px;
}
.comments .commenter-name a{
display: block;
}
.comments .commenter-name .comment-time{
display: block;
margin-left: 0px;
}
}
</style>
<section class="defult-page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box">
                    <h2>Blog</h2>
                    <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">Event</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
foreach ($single_blog as $row) {
?>
<section class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="details-col">
                    <img src="<?php echo base_url().$row['images'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="details-col">
                    <ul>
                        <li>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Post name :</strong><?php echo $row['post_name'] ;?>
                        </li>
                        <li>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> Post Date :</strong> <?php echo date("d-M-y", strtotime($row['date']));  ?>
                        </li>
                        <li>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> Author :</strong> Admin
                        </li>
                        
                        
                        
                        <!--  <li>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Project Ranking :</strong>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        </li> -->
                        <!--  <li>
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Live Demo :</strong> <a href="#">www.YourSite.com</a>
                        </li> -->
                    </ul>
                    <p><?php echo $row['short_descrption'] ;?></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="details-col">
                    <h3>Description</h3>
                    <p><?php echo $row['description'];?></p>
                </div>
            </div>
            <hr/>
            <!--qution-->
            <div class="col-md-12">
                <div class="details-col">
                    <h3>Ask a Question</h3><hr/>
                </div>
                <div class="comments">
                    <?php foreach ($question as $value) {
                    # code...


                    ?>

                    <div class="comment-box">
                        <span class="commenter-pic">
                            <img src="https://images.macrumors.com/t/XjzsIpBxeGphVqiWDqCzjDgY4Ck=/800x0/article-new/2019/04/guest-user-250x250.jpg" class="img-fluid">
                        </span>
                        <span class="commenter-name">
                            <a href="#">Guest <?php echo $value['id'];?></a>
                        </span>
                        <p class="comment-txt more"><?php echo $value['question'];?></p>
                        <div class="comment-meta">
                            
                            <button class="comment-reply reply-popup"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</button>
                        </div>

                          
                      

                        <div class="comment-box replied">
                        <span class="commenter-pic">
                            <img src="https://images.macrumors.com/t/XjzsIpBxeGphVqiWDqCzjDgY4Ck=/800x0/article-new/2019/04/guest-user-250x250.jpg" class="img-fluid">
                        </span>
                        
                        <p class="comment-txt more">Suspendisse massa enim, condimentum sit amet maximus quis, pulvinar sit amet ante. Fusce eleifend dui mi, blandit vehicula orci iaculis ac.</p>
                       
                    </div>
                 
                        <form method="post" action="<?php echo base_url();?>Front/Reply">
                            <div class="comment-box add-comment reply-box" style="display: none;">
                                <span class="commenter-pic">
                                    <img src="https://images.macrumors.com/t/XjzsIpBxeGphVqiWDqCzjDgY4Ck=/800x0/article-new/2019/04/guest-user-250x250.jpg" class="img-fluid">
                                </span>
                                <span class="commenter-name">
                                    <input type="text" placeholder="Add a public reply" name="AddComment">
                                    <input type="hidden" name="postid" value="<?php echo $row['id'];?> ">
                                    <input type="hidden" name="qustionid" value="<?php echo $value['id'];?> ">
                                    <button type="submit" class="btn btn-default">Reply</button>
                                    <button type="cancel" class="btn btn-default reply-popup">Cancel</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <?php
                    }?>
                 
                </div>
            </div>
            <!--qustion-->
            <div class="col-md-12">
                <div class="details-col">
                    <h3>Ask a Question</h3><hr/>
                    <?php
                    if ($this->session->flashdata('Sucess')) {
                    ?>
                    <div class="col-sm-12">
                        
                        <div class="alert alert-success alert-dismissable fade in col-sm-8">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('Sucess'); ?>.
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <?php
                    }
                    if ($this->session->flashdata('error')) {
                    ?>
                    <div class="col-sm-12">
                        
                        <div class="alert alert-success alert-dismissable fade in col-sm-8">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>error!</strong> <?php echo $this->session->flashdata('error'); ?>.
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="row contact-form-row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="contact-col">
                                    <form  method="post" action="<?php echo base_url();?>Front/addCommit">
                                        <input type="hidden" name="postid" value="<?php echo $row['id'];?>">
                                        
                                        
                                        <div class="col-md-12">
                                            <div class="contact-textarea">
                                                <textarea class="form-control" rows="4" placeholder="Enter Your Question" id="message"  required="" name="qus"></textarea>
                                                <button class="btn btn-default my-btn text-center" type="submit" value="Submit Form">Send Message</button>
                                            </div>
                                        </div>
                                        <div id="form-messages"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <!-- <div class="contact-col">
                                <img src="http://images.all-free-download.com/images/graphiclarge/peacock_feather_313016.jpg" alt="">
                            </div> -->
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// Reply box popup JS
$(document).ready(function(){
$('.reply-popup').click(function (e) {
//alert(e.target.className);
//$(".reply-box",this).toggle();
$('.reply-box').toggle();
});
// $( ".reply-popup",).on( "click", function() {
//  $(".reply-box").toggle();
// });
});
</script>