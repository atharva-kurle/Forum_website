<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo base_url(); ?>" class="brand-logo center">Forum</a>
      </div>
    </nav>
  </div>
  
    <h4 class="topic_head center">Topics <a href="<?php echo base_url('add-post'); ?>" class="btn-floating btn-medium waves-effect waves-light red right"><i class="material-icons">add</i></a></h4>

   
    
    
    
    <div class="row topic_wrap">
      
      <div class="col m10 topic_body">

        <?php
        if($t_rows>0)
        {
          for($i=0; $i<$t_rows; $i++){
            
            if($topics[$i]['category'] == 1)
            {
              $topics[$i]['category'] = "Career";
            }
            else if($topics[$i]['category'] == 2)
            {
              $topics[$i]['category'] = "University";
            }
            else if($topics[$i]['category'] == 3)
            {
              $topics[$i]['category'] = "Course";
            }
            else if($topics[$i]['category'] == 4)
            {
              $topics[$i]['category'] = "Jobs";
            }
            else if($topics[$i]['category'] == 5)
            {
              $topics[$i]['category'] = "Internship";
            }
            
            ?>


        <!-- topics start here -->
        <div class="row" style="border-bottom: 1px solid #eee;">
            <div class="col m12">

              
              <img class="topic_image" src="<?php echo base_url(); ?>css/download1.png" style="padding-top:10px;" height="50" width="50" alt="">
          <span class="topic_name"><strong><?php echo $topics[$i]['name'];?></strong></span><strong class="topic_time"> 2nd Jan <?php echo $topics[$i]['category']; ?><br> <?php echo $topics[$i]['qualification']; ?></strong><br><br> <strong> <?php echo $topics[$i]['topic']; ?> </strong><br>
          <br>
      <div  style="margin-bottom: 10px;">
        <button class="waves-effect waves-light btn-small" style="font-size: 15px;" href=""><i class="material-icons" style="font-size: 15px;">thumb_up</i></button>
        <button class="waves-effect waves-light btn-small" style="font-size: 15px;" href=""><i class="material-icons" style="font-size: 15px;">thumb_down</i></button>
        <button class="waves-effect waves-light btn-small" id="<?php echo $topics[$i]['t_id']?>" style="font-size: 15px;"><i class="material-icons" style="color-white; font-size: 15px;">message</i></button>
        <button id="t<?php echo $topics[$i]['t_id']; ?>" class="btn-floating btn-large waves-effect waves-light red" style="margin-left: 70%; display:none;">Hide
    <i class="material-icons right">hide</i>
  </button>
        
      </div>
      </div>
    </div>
    <!-- topics end -->
    



    <!-- replies -->

    <div class="row <?php echo $topics[$i]['t_id'];?>" style="border-bottom: 1px solid #eee; background-color: #f8f8f8; display:none;"> <!--  display:none; -->
      <div class="col m9">
      <?php echo form_open(); ?>
        <input type="hidden" value="<?php echo $topics[$i]['t_id']; ?>" name="t_id" />
        <input type="text" placeholder="Add a comment" name="reply" />
      </div>
      <div class="col m3">
            <button class="btn waves-effect waves-light" style="margin-top: 10.456;" type="submit" name="action">Add Comment
  </button>
      </div>
      <?php echo form_close(); ?>
      

       <?php for($j=0;$j<$r_rows; $j++){
         if($replies[$j]['t_id'] == $topics[$i]['t_id'])
         { ?>
         <div class="col m12">
         
         <img class="topic_image" src="<?php echo base_url(); ?>css/download1.png" style="padding-top:10px;" height="30" width="30" alt="">
              <strong>User Name</strong>
              <strong style="font-size: 12px;color: #918989;">5nd Jan</strong>
      </div>
      <div class="col m12">
      <span style="font-size: 15px;color: #918989;">Qualification of user</span>
      </div>
          <div class="col m12"><?php echo $replies[$j]['reply']; ?></div>

          <div class="col m12" style="border-bottom: 1px solid #eee;">
       <button class="waves-effect waves-light" style="font-size: 15px; background-color: #26a69a;border: none;padding-top: 4px;padding-bottom: 4px;margin-bottom: 5px;"><i class="material-icons" style="font-size: 15px; color:white;">thumb_up</i></button>
        <button class="waves-effect waves-light" style="font-size: 15px; background-color: #26a69a;border: none;padding-top: 4px;padding-bottom: 4px;margin-bottom: 5px;" ><i class="material-icons" style="font-size: 15px; color:white;">thumb_down</i></button>
        <button class="waves-effect waves-light" style="font-size: 15px; background-color: #26a69a;border: none;padding-top: 4px;padding-bottom: 4px;margin-bottom: 5px;"><i id="r<?php echo $replies[$j]['r_id']; ?>" class="material-icons" style="color:white; font-size: 15px;">message</i></button>
       
      </div>
      <?php echo form_open('reply-reply'); ?>
          <div class="row r<?php echo $replies[$j]['r_id']; ?>" style="display: none;">
          <div class="col m9">
        <input type="hidden" value="<?php echo $replies[$j]['r_id']; ?>" name="r_id" />
        <input type="text" placeholder="Add a comment" name="reply_to_reply" />
      </div>
      <div class="col m3">
      <button class="btn waves-effect waves-light" style="margin-top: 10.456;" type="submit" name="action">Reply
  </button>
      </div>
      <?php echo form_close(); ?>

      <?php for($k=0; $k<$rr_rows; $k++){
        if($r_to_r[$k]['r_id'] == $replies[$j]['r_id']){
        ?>
      <div class="col m12" style="background:#eee;margin-left: 4%;">
      <img class="topic_image" src="<?php echo base_url(); ?>css/download1.png" style="padding-top:10px;" height="25" width="25" alt="">
              <strong>User Name</strong>
              <strong style="font-size: 12px;color: #918989;">5nd Jan</strong>
              <div class="col m12"><?php echo $r_to_r[$k]['reply_to_reply']; ?></div>
      </div>
      <?php }
      } ?>
          </div>

          <script>

$(document).ready(function(){
  $("#r<?php echo $replies[$j]['r_id']; ?>").click(function(){
    $(".r<?php echo $replies[$j]['r_id']; ?>").show();
  });
});


</script>
          
         <?php }
         ?>
      
      <?php }?>
      
      

<script>

$(document).ready(function(){
  $("#<?php echo $topics[$i]['t_id']; ?>").click(function(){
    $(".<?php echo $topics[$i]['t_id'];?>").show();
    $("#t<?php echo $topics[$i]['t_id'];?>").show();
  });
});


$(document).ready(function(){
  $("#t<?php echo $topics[$i]['t_id']; ?>").click(function(){
    $(".<?php echo $topics[$i]['t_id'];?>").hide();
    $("#t<?php echo $topics[$i]['t_id'];?>").hide();
  });
});


</script>
      
</div>
            
      <?php
    }}
  else{
    echo "no topics";
  }?>
            
     
      
    </div>
    
            











<!-- side-categories start -->
<div class="col m2">
    <div class="category_col center">
       <strong>ReadMe</strong><p><strong><small>Main focus is back-end and not the front-end design!</small></strong><br> This project is based on Forum concept. Topics and replies related to a perticular topic is inserted and fetched.</p><br>
       <strong>Technologies used</strong>: HTML/CSS/Materialize<br>PHP - CodeIgniter <br> PhpMyAdmin DB
    </div>
    
</div>
    </div>
        <!-- side-categories end -->


</body>
</html>