<!DOCTYPE html>
<html lang="en">

<head>
    <title>หุ่นยนต์กายภาพ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">

    <script src="cdn/js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://js-agent.newrelic.com/nr-1169.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="cdn/js/jquery.dataTables.min.js"></script>
  <script src="cdn/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/application-3f4ce5ba43587ff2c664d8328149599907aade9dd461e6eff614bf274cdad604.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  <script type="text/javascript" src="https://pubnub.github.io/eon/v/eon/1.0.0/eon.js"></script>
  <link type="text/css" rel="stylesheet" href="https://pubnub.github.io/eon/v/eon/1.0.0/eon.css" />

    <style>
        body {
            font-family: 'Pridi', serif;

        }


        #card1 {
            margin-left: 10px;
            margin-top: 50px;
            margin-right: 40px;
        }
       #logout{
        margin-left: 750px;
       }
    </style>
</head>

<body>

    <div class="row">

        <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-info" >
                <a class="navbar-brand" href="main.php">
                    
                <img src="logo.png" alt="logo" style="width:35px;" >
                </a>
                
                <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="main.php">หน้าหลัก <span class="sr-only">(current)</span></a>
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            การทำงาน
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               
                                <a class="dropdown-item" href="index.php">สั่งการทำงาน</a>
                               
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ข้อมูลการใช้งาน
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="data.php">สถิติการใช้งาน</a>
                                
                               
                            </div>
                        </li>
                        
                        <!-- <li class="nav-item active">
                            <a class="navbar-brand " href="main.php">
                            <img src="logout1.png" alt="logo" style=" margin-left: 750px" > </a>
                        </li> -->
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">

            <div class="card " id="card1">
                <div class="card-body shadow-lg  bg-white rounded ">
                    
                <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">

        <div id="chart"></div>
        
       <h5>ข้อมูลการใช้งาน
        </h5>

      </div>
      <div class="col-lg-3"></div>
    </div>
                </div>
            </div>


        </div>
        <div class="col-sm-1">

        </div>

    </div>

    </div>

    











</body>


</html>