<!DOCTYPE>
<html lang="en">
    <head>
            <title>System KSPS | <?php echo $title;?></title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet"/>
            
             <!-- style default by safari -->
            <link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet"/>
            <link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet"/>
            <link href="<?php echo base_url('assets/css/jquery-ui.css');?>" rel="stylesheet"/>
            <!-- Style default by safari -->
            
            
    </head>
<body>
    <?php echo $_header;?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php echo $_sidebar;?>        
            </div>
            <div class="col-md-9">
                <?php echo $_content;?>
            </div>
        </div>
    </div>
    <?php  echo $_footer;?>
    
    
    <!-- Begin include jquery safari -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    
    <script>
       $( "#accordion" ).accordion();
              $( "#datepicker" ).datepicker({
            	inline: true
            });
    </script>
    <!-- end include jquer safari -->
</body>
</html>