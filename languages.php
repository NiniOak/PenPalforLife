<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penpals for Life</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Profile Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Derrick Sheppard</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Derrick Sheppard <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--Anita's changes -->
            <!--Changes here include changing the nams of the menu bar on the side -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href=""><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Friends</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-table"></i> Messages</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-edit"></i> Notifications</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-desktop"></i> Settings</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!--Anita's changes -->
                <!--Changes here include adding the User's profile image and Information' -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                               <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="col-md-4">
                                    <img src="images/p_image.png"  alt="profile picture" id="profileimage">
                                </div>
                            </div>
                            <!-- profile Image -->
                             <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">Change Image <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                            </div>
                            <!-- Profile Information-->
                                <div class="col-md-8">
                                    <a href="character_select.php"><img src="images/user.png" class="name"
                                                onmouseover="this.src='images/hover_user.png';"
                                                onmouseout="this.src='images/user.png';"></a>
                                        <div class="name" style="margin-left: 60px;">
                                            <h3>Derek Sheppard</h3>
                                        </div>
                                        <br>
                                      <a href="languages.php"><img src="images/speech.png" class="languages"
                                                  onmouseover="this.src='images/hover_speech.png';"
                                                  onmouseout="this.src='images/speech.png';"></a>
                                           <div class="name" style="margin-left: 60px;">
                                                <h3>English, French, Arabic</h3>
                                            </div>
                                            <br>
                                     <a href="preferences.php"><img src="images/edit.png" class="preferences"
                                                onmouseover="this.src='images/hover_edit.png';"
                                                onmouseout="this.src='images/edit.png';"></a>
                                           <div class="name" style="margin-left: 60px;">
                                                <h3>Skiing, Cycling, Gymnastics</h3>
                                            </div>
                                            <br>
                                </div>
                                    <a href="changepassword.html"><button type="button" class="btn btn-danger">Change Password</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Languages updated successfully</strong>
                    </div>
                </div>
                
        <!-- dropdown list of languages -->
        <div class="form-group">
             <label>Select Languages</label>
                 <form method="POST" action="index.php">
                   <select multiple class="form-control" name="languages[]" multiple="multiple" tabindex="1">
                        <option value="Arabic">Arabic</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Danish">Danish</option>
                        <option value="Dutch">Dutch</option>
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="Greek">Greek</option>
                        <option value="Hungarian">Hungarian</option>
                        <option value="Italian">Italian</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Korean">Korean</option>
                        <option value="Lithuanian">Lithuanian</option>
                        <option value="Persian">Persian</option>
                        <option value="Polish">Polish</option>
                        <option value="Portuguese">Portuguese </option>
                        <option value="Russian">Russian</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Swedish">Swedish</option>
                        <option value="Turkish">Turkish</option>
                        <option value="Vietnamese">Vietnamese</option>
                    </select>
                    <input type="submit" name="submit"/>
                </form>
        </div> 

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
