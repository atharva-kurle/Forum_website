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
        <a href="<?php echo base_url(); ?>" class="brand-logo center">Forums</a>
      </div>
    </nav>
  </div>
  
    <h4 class="topic_head center"> Post topic <a href="<?php echo base_url(); ?>" class="btn-floating btn-medium waves-effect waves-light red left"><i class="material-icons">arrow_back</i></a></h4>
    <?php echo form_open('add-post'); ?>
    <div class="row add_wrap">
    
        <div class="col m12 add_body" style="padding-bottom: 20px;  padding-top: 20px;">  
        <select class="browser-default" name="category">
        <option value="0" disabled selected>Choose Category</option>
        <option value="1">Career</option>
        <option value="2">University</option>
        <option value="3">Course</option>
        <option value="4">Jobs</option>
        <option value="5">Internship</option>
      </select>
        </div>
    <div class="col m6 add_body" style="padding-bottom: 20px;">  
    <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div class="col m6 add_body" style="padding-bottom: 20px;">  
    <input type="text" placeholder="Enter your qualification" name="qualification">
    </div>
    <div class="col m12 add_body" style="padding-bottom: 20px;">  
    <textarea name="topic" placeholder="Enter your topic description"  id="textarea1" class="materialize-textarea"></textarea>
    </div>
    <div class="col m12 add_body center" style="padding-bottom: 25px;">
    <button class="btn waves-effect waves-light" type="submit">POST</button>
    </div>
</div>
<?php echo form_close(); ?>
</div>
</body>
</html>