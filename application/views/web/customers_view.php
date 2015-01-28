<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php  echo $title;?></title>
        
        <!-- Begin Link bootstrap-->
         <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
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
            <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('web');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="<?php echo site_url('web/customers_view');?>"><i class="glyphicon glyphicon-user"></i> Customers</a></li>
                    </ul>
                 
                    <div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/search_customers');?>" method="post">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search Customers"/>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                             <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-out"></i> Logout</button>
                        </form>
                    </div>
                </div><!--/.nav-collapse -->
        </div>
     </div>
     <div class="container">
        <div class="row">
            <div class="mainbox col-md-4" style="margin-top: 5px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Login
                    </div>
                     <div style="padding-top:30px" class="panel-body" >
                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                <form class="form-horizontal" role="form" action="<?php echo site_url('web/cekLogin');?>" method="post">
                                     <?php //echo $message; ?>   
                                    <div style="margin-bottom: 15px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input id="login-username" type="text" class="form-control" name="identity" value="" placeholder="email"/> 
                                    </div>
                                    <div style="margin-bottom: 10px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="input-group">
                                              <div class="checkbox">
                                                <label>
                                                  <input id="login-remember" type="checkbox" name="remember" value="1"/> Remember me
                                                </label>
                                              </div>
                                    </div>
                                     <div style="margin-top:10px" class="form-group">
                                            <div class="col-sm-12 controls">
                                               <button type="submit" class="btn btn-info">
                                                Sign in</button>
                                                 <button type="reset" class="btn btn-default">
                                                Reset</button>
                                            </div>
                                        </div>
                                </form>
                             </div>
                            <div class="panel-fooer" style="background-color: #d9edf7;"></div>
                </div>
            </div>
            <div class="col-md-8">
               <legend><h2>Data Customers</h2></legend>
               <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Place Of Birth</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Date Created</th>
                        <th>Phone</th>
                    </thead>
                    <?php $no=0; foreach($query as $q): $no++;?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $q->code;?></td>
                        <td><?php echo $q->customersname;?></td>
                        <td><?php echo $q->places;?></td>
                        <td><?php echo $q->dateplace;?></td>
                        <td><?php echo $q->address;?></td>
                        <td><?php echo $q->datecreated;?></td>
                        <td><?php echo $q->Phone;?></td>
                    </tr>
                    <?php endforeach;?>
               </table>
            </div>
        </div>
     </div>
     
     
     <!-- begin footer -->
         <footer>
               <div class="container">
        		<div class="row">
        			<div class="col-lg-3">
        				<div class="widget">
        					<h5 class="widgetheading">Get in touch with us</h5>
        					<address>
        					<strong>Moderna company Inc</strong><br/>
        					 Modernbuilding suite V124, AB 01<br/>
        					 Someplace 16425 Earth </address>
        					<p>
        						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
        						<i class="icon-envelope-alt"></i> email@domainname.com
        					</p>
        				</div>
        			</div>
                    <div class="col-lg-3">
        				<div class="widget">
        					<h5 class="widgetheading">Pages</h5>
        					<ul class="link-list">
        						<li><a href="#">Press release</a></li>
        						<li><a href="#">Terms and conditions</a></li>
        						<li><a href="#">Privacy policy</a></li>
        						<li><a href="#">Career center</a></li>
        						<li><a href="#">Contact us</a></li>
        					</ul>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="widget">
        					<h5 class="widgetheading">Latest posts</h5>
        					<ul class="link-list">
        						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
        						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
        						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
        					</ul>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="widget">
        					<h5 class="widgetheading">Flickr photostream</h5>
        					<div class="flickr_badge">
        						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
        					</div>
        					<div class="clear">
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
	
            	<div id="sub-footer">
            		<div class="container">
            			<div class="row">
            				<div class="col-lg-6">
            					<div class="copyright">
            						<p>
            							<span>&copy; Rengganis Design 2014 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
            						</p>
            					</div>
            				</div>
            				<div class="col-lg-6">
            					<ul class="social-network">
            						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
            					</ul>
            				</div>
            			</div>
            		</div>
            	</div>
            </footer>
     
     <!-- end footer -->
     <!-- begin Include scripts javascript -->
         <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
         <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
     <!-- end Include scripts javascript -->
     
</body>    
</html>