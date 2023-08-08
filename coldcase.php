<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>POLICE DEPARTMENT</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
    </head>
    <body>

    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>Crime Reporting</h3>
                    <strong>CCT</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                            Add Employees
                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_employees.php">
                            <i class="fa fa-table"></i>
                           All Employees
                        </a>
                    </li>
                    <li>
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Report Issues
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                            View Issues
                        </a>
                    </li>
                    <?php }?>
                       <?php
                    if ($_SESSION['permission'] == 1) {
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Add Users
                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            View Users
                        </a>
                    </li>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                    <?php }?>
                    
                    <li>
                        <a href="coldcase.php">
                            <i class="fa fa-th"></i>
                            Cold Cases
                        </a>
                    </li>
                    <?php ?>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    <img src="assets/image/banner.png" class="img-thumbnail">
                    </div>
         
                
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>
     <div class="row">
<div class="col-md-12">
    <div class="panel panel-default sammacmedia">
            <div class="panel-heading">COLD-CASES FILES</div>
        <div class="panel-body">
            <form method="post" action="settings.php" >
<div class="col-md-12">
    <div class="panel panel-default sammacmedia">
            <div class="panel-heading">COLD CASE ID:1521
              <div class="row form-group">
                <div class="col-lg-12">
                  <label>Dan “D.B.” Cooper became legend on the eve of Thanksgiving in 1971. Since that night, police have failed to find him dead or alive after he jumped from an airplane mid-flight.
                     Cooper instructed the flight attendant to return the note, wary of potentially incriminating evidence. Because of this, the exact wording of his note is unknown. Schaffner recalled that the handwritten ink note demanded $200,000 in cash and two sets of parachutes. Cooper wanted these items delivered on arrival at Seattle-Tacoma Airport, and claimed that if they didn’t comply with these demands, he would blow up the plane. Everyone who read the note agreed that it contained the phrase “no funny business”.
                  </label>
                </div>
              </div>
            </div>
     </div>
</div>
<div class="col-md-12">
 <div class="panel panel-default sammacmedia">
    <div class="panel-heading">COLD CASE ID:8546
            <div class="row form-group">
              <div class="col-lg-12">
                <label>Jack the Ripper was an infamous serial killer in the East End of London, in 1888. He killed prostitutes in the Whitechapel area of London.
                 It was believed that he was a man with some experience with butchery or medicine, based on his exacting brutalization of his victims’ bodies.
                 He killed five women for apparently no reason, then disappeared, never to kill again.
                 </label>
              </div>
              </div>
    </div>
</div>
</div>
<div class="col-md-12">
 <div class="panel panel-default sammacmedia">
    <div class="panel-heading">COLD CASE ID:7485
            <div class="row form-group">
              <div class="col-lg-12">
                <label> In late 1948, a couple found an immaculately dressed dead man on Australia’s Somerton Beach. Outside of these simple facts, any new evidence collected only seems to lead investigators in circles.
                The man’s stomach contained a lot of blood, suggesting he was poisoned. But there wasn’t the faintest amount of poison detected in the food or body. At the court inquest, the coroner thought the only answer could be one of two extremely rare untraceable poisons; of which the names he refused to say out loud.
                Police found another dead man in Australia with a copy of The Rubaiyat after the war. But according to both the publisher and libraries around the world, there were only five editions printed – and this man held the seventh edition. That makes this copy of the book just as unexplainable. Perhaps they weren’t books at all, but spy gear in disguise?
                 </label>
              </div>
              </div>
    </div>
</div>
</div>
</div>
</div>
<div class="line"></div>
    <footer>
        <p class="text-center">
            Crime Reporting Database &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved    
        </p>
    </footer>
    </div>
    </div>

            
        