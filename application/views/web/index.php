<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php  echo $title;?></title>
        
        <!-- Begin Link bootstrap-->
         <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet"/>
         <link href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>" rel="stylesheet"/>
        <!-- End Link bootstrap-->
        
        <!-- Begin Link Created Safari-->
        <link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet"/>
        <!-- End Link Created Safari-->
    </head>
<body>
     <div class="navbar navbar-default">
        <div class="container">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url('web');?>">Parking</a>
           </div>
        </div>
     </div>
</body>    
</html>