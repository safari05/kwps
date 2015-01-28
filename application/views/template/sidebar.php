<div class="panel-group" id="accordions">
    <h3>Master</h3>
    <ul>
        <li><a href="<?php echo site_url('customers/index')?>">Employee</a></li>
        <li><a href="<?php echo site_url('customers/index')?>">Customers</a></li>
    </ul>
    <h3>Transaction</h3>
        <div>
            <ul>
                <li>Customers Saving</li>
                <li>Customers Loan</li>
            </ul>
        </div>
    <h3>Reports</h3>
        <div>
            <ul>
                <li>Customers</li>
                <li>Customers Saving</li>
                <li>Customers Loan</li>
            </ul>
        </div>
</div>


 <link href="<?php echo base_url('assets/css/jquery-ui.css');?>" rel="stylesheet"/>
<!-- Begin include jquery safari -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    
    <script>
       $( "#accordions" ).accordion();
              $( "#datepicker" ).datepicker({
            	inline: true
            });
            $( "#accordion" ).accordion();
              $( "#datepicker" ).datepicker({
            	inline: true
            });
    </script>
    <!-- end include jquer safari -->