<?php
session_start();
if(!$_SESSION['logged_in']){
   header("location: /");
//   die;
}
  ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Watch GFMC</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      .fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}
  </style>
 </head>
 <body>
     <div class="container-fluid">
  <!--<iframe width="100%" height="500" src="https://www.youtube.com/embed/PE5zDs07Wxo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
  <div class="row">
        <div class="col-md-12">
            <!--<iframe width="100%" height="400px" src="https://www.youtube.com/embed/Wu3EoPQo8zI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <!--<iframe width="100%" height="400px" src="https://www.youtube.com/embed/FkLKNfJ90j4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            
<!--<iframe width="100%" height="400px" src="https://www.youtube.com/embed/FkLKNfJ90j4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
        <!--    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/402547857" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>-->
        <!--</div>-->
        <!--<div class="col-md-3">-->
        <!--    <iframe src="https://vimeo.com/live-chat/402547857/" width="400" height="600" frameborder="0"></iframe>-->
        <!--</div>-->
        <!--<iframe width="100%" height="500" src="https://www.youtube.com/embed/EBtcKJABl-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
       <!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/T0evS_E8JFs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
      
       <!-- TEENS CONFERENCE -->
               <!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/RC0ent_xTjg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
       
<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/XGk6dZ_O5xg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!-- TEENS CONFERENCE-->
<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/ySelilk7jXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/ySelilk7jXA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/hudw257FQL8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--sunday service-->
<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/NuysSNeNais" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/rUYBptPVrM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/biA2I-uek0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/fWjbHwBrBlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/dmrHG4VNj3k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/8ACKTdq1UIU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<!--<iframe width="100%" height="400" src="https://www.youtube.com/embed/Y9sdIitArF8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

<iframe width="100%" height="400" src="https://www.youtube.com/embed/dw51E4hLPw4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
  </div>
  <div class="container">
      <br />
  <h2><a href="#">Have a testimony or a comment ?</a></h2>
  <br />
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
   <nav class="navbar fixed-bottom navbar-expand-sm navbar-danger bg-danger my-0 py-0">
  <a class="navbar-brand" href="https://gfmcph.com/report/">Are you watching alone ?</a>
</nav>
</html>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="9f67ce86-0794-46cd-a3d4-f85ce7cccbd2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
