<?php

session_start();
require 'config.php';


if (isset($_POST['submit'])) {
    $time        = $_POST['time'];
    $level     = $_POST['level'];


    $sql = "INSERT INTO `work_robot` (`time_w`,`level_w`)
	VALUES ('$time', '$level')";


    if ($conn->query($sql) === TRUE) {
        // header("Location:main#menu1.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <style>
        body {
            font-family: 'Pridi', serif;


        }

        .cd1 {
            background-color: w3-indigo;
        }

        #logout {
            margin-left: 750px;
        }



        #card1 {
            margin-left: 10px;
            margin-top: 50px;
            margin-right: 40px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <img src="img/physical-therapy.png" alt="logo" style="width:35px;">
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">การทำงาน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">ข้อมูลการใช้งาน</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="tab-pane active"><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card ">
                            <div class="card-body">
                                <div class="card bg w3-teal">
                                    <div class="card-body">
                                        <h5 style="font-family: 'Pridi', serif;"><img src="img/robot.png" alt="logo" width="35px"><b>&nbsp;&nbsp; หุ่นยนต์ช่วยกายภาพ</b></h5>
                                    </div>
                                </div>
                                <center><img src="img/555.jpg" style="width: 85%;" alt=""></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card ">
                            <div class="card-body">
                                <div class="card bg w3-sand">
                                    <div class="card-body">
                                        <h5 style="font-family: 'Pridi', serif;"><img src="img/calendar.png" alt="logo" width="35px"><b> วิธีการใช้หุ่นยนต์ช่วยกายภาพ</b></h5>
                                    </div>
                                </div>
                                <br>
                                <center><img src="img/111.png" style="width: 90%;" alt=""></center>
                            </div>
                        </div>
                        <br>
                        <div class="card ">
                            <div class="card-body">
                                <div class="card bg w3-teal">
                                    <div class="card-body">
                                        <h5 style="font-family: 'Pridi' , serif;"><img src="img/bar-graph.png" alt="logo" width="35px">
                                            ประโยชน์ของหุ่นยนต์ช่วยกายภาพ
                                        </h5>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card  bg w3-sand">
                                            <div class="card-body">
                                                <h5 style="font-family: 'Pridi' , serif;">1. ช่วยกระตุ้นการไหลเวียนโลหิต และผ่อนคลายกล้ามเนื้อบริเวณหลัง</h5>
                                                <center> <img src="img/blood.png" alt="" width="30%"></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card  bg w3-sand">
                                            <div class="card-body">
                                                <h5 style="font-family: 'Pridi' , serif;">2. ช่วยบรรเทาความตึงของกล้ามเนื้อ และความไม่สบายกายได้</h5>
                                                <center> <img src="img/strong.png" alt="" width="30%"></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card  bg w3-sand">
                                            <div class="card-body">
                                                <h5 style="font-family: 'Pridi',serif;">3. ช่วยผ่อนคลาย ปลดปล่อยความตึงเครียด</h5>
                                                <center> <img src="img/meditation.png" alt="" width="30%"></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div id="menu1" class="container-fluid tab-pane fade"><br>
                <div class="row">
                    <div class="col-sm-5">

                        <div class="card " id="card1">
                            <div class="card-body shadow-lg  bg-white rounded">
                                <h4 style="font-family: 'Pridi', serif"><img src="img/order-tracking.png" alt="logo" width="35px">&nbsp;&nbsp;<b>การสั่งการทำงาน</b> </h4>
                                <hr>
                                <br>
                               
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">ระยะเวลา</label>
                                                </div>
                                                <select class="custom-select" id="time" name="time">
                                                    <option hidden selected>โปรดเลือก...</option>
                                                    <option value="1">1 นาที</option>
                                                    <option value="2">2 นาที</option>
                                                    <option value="3">3 นาที</option>
                                                    <option value="4">4 นาที</option>
                                                    <option value="5">5 นาที</option>
                                                    <option value="6">6 นาที</option>
                                                    <option value="7">7 นาที</option>
                                                    <option value="8">8 นาที</option>
                                                    <option value="9">9 นาที</option>
                                                    <option value="10">10 นาที</option>
                                                    <option value="11">11 นาที</option>
                                                    <option value="12">12 นาที</option>
                                                    <option value="13">13 นาที</option>
                                                    <option value="14">14 นาที</option>
                                                    <option value="15">15 นาที</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">ระดับความเร็ว</label>
                                                </div>
                                                <select class="custom-select" id="level" name="level">
                                                    <option hidden selected>โปรดเลือก...</option>
                                                    <option value="1">ระดับ 1</option>
                                                    <option value="2">ระดับ 2</option>
                                                    <option value="3">ระดับ 3</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <br>
                                    <center>
                                        <button type="button" class="btn btn-outline-primary" style="width: 135px;" onclick="motorstart() ">ตกลง</button>
                                        <!-- <button type="submit" name="submit" class="btn btn-outline-primary" style="width: 135px;" onclick="motorstart() ">ตกลง</button> -->
                                        <button type="button" class="btn btn-outline-danger" style="width: 135px;" value="0" onclick="motorstop() " id="stop">หยุดการทำงาน</button>
                                    </center>
                              
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="card " id="card1">
                            <div class="card-body shadow-lg  bg-white rounded">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <h4 style="font-family: 'Pridi', serif;"><img src="img/clock.png" alt="logo" width="35px">&nbsp;<b> สถานะการใช้งาน</b></h4>
                                        <hr>
                                        <span id="countdown" class="timer"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <h3 style="font-family: 'Pridi', serif;"><img src="img/calendar22.png" alt="logo" width="40px"> สถิติการใช้งาน</h3>
                <p>บันทึกการใช้งานเครื่องหุ่นยนต์ช่วยกายภาพ.</p>
                <table class="table">
                    <thead>
                        <tr class="table w3-teal">
                            <th>วัน-เดือน-ปี</th>
                            <th>ระยะเวลา</th>
                            <th>ระดับความเร็ว</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>26-10-2020</td>
                            <td>10 </td>
                            <td> 1</td>

                        </tr>
                        <tr>
                            <td>26-10-2020</td>
                            <td>2 </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>28-10-2020</td>
                            <td>5</td>
                            <td>3</td>

                        </tr>
                        <tr>
                            <td>23-11-2020</td>
                            <td>2</td>
                            <td> 3</td>
                        </tr>
                        <tr>
                            <td>23-11-2020</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>24-11-2020</td>
                            <td>2</td>
                            <td> 3</td>
                        </tr>
                        <tr>
                            <td>24-11-2020</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>25-11-2020</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>25-11-2020</td>
                            <td>2</td>
                            <td> 3</td>
                        </tr>
                        <tr>
                            <td>25-11-2020</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    function motorstart() {
        var gg = document.getElementById("time").value;
        var gg1 = document.getElementById("level").value;

        console.log(JSON.stringify(gg));
        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:3000/api/motorstart/' + gg + '/' + gg1,
            success: function(response) {

                // if (result["status"] == 1) {
                //     toastr.info('เครื่องพร้อมทำงาน')
                // } else if (result["status"] == 0) {
                //     Swal.fire({
                //         icon: 'error',
                //         title: 'Oops...',
                //         text: 'ผิดพลาด',
                //     })
                // }
            }
        });

        var sum;
        sum = gg * 60;
        var seconds, upgradeTime;
        seconds = upgradeTime = sum;

        function timer() {
            var days = Math.floor(seconds / 24 / 60 / 60);
            var hoursLeft = Math.floor((seconds) - (days * 86400));
            var hours = Math.floor(hoursLeft / 3600);
            var minutesLeft = Math.floor((hoursLeft) - (hours * 3600));
            var minutes = Math.floor(minutesLeft / 60);
            var remainingSeconds = seconds % 60;
            // add a 0 in front of single digit seconds
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            // add a 0 in front of single digit minutes
            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            document.getElementById('countdown').innerHTML = /*days + ":" + hours + ":" + */
                minutes + ":" + remainingSeconds;

            if (seconds === 0) {
                clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = "Completed";
                //    reload page
            } else {
                seconds--;
            }
      

        }
        var countdownTimer = setInterval(timer, 1000);

    };


    
</script>

</html>