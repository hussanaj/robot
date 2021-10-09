<?php
header('Access-Control-Allow-Origin: *');
session_start();
require 'config.php';


$sql = "SELECT * FROM `work_robot` ORDER BY 'id_w' DESC";
$result = $conn->query($sql);
// echo("console.log("+print_r($result)+");");
// print_r($result);
// echo($result);



// if ($conn->query($sql) === TRUE) {
//     // header("Location:main#menu1.php");
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
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
    <script src="/assets/application-3f4ce5ba43587ff2c664d8328149599907aade9dd461e6eff614bf274cdad604.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>



    <script type="text/javascript" src="https://pubnub.github.io/eon/v/eon/1.0.0/eon.js"></script>
    <link type="text/css" rel="stylesheet" href="https://pubnub.github.io/eon/v/eon/1.0.0/eon.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
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

        .base-timer {
            position: relative;
            width: 300px;
            height: 300px;
        }

        .base-timer__svg {
            transform: scaleX(-1);
        }

        .base-timer__circle {
            fill: none;
            stroke: none;
        }

        .base-timer__path-elapsed {
            stroke-width: 7px;
            stroke: grey;
        }

        .base-timer__path-remaining {
            stroke-width: 7px;
            stroke-linecap: round;
            transform: rotate(90deg);
            transform-origin: center;
            transition: 1s linear all;
            fill-rule: nonzero;
            stroke: currentColor;
        }

        .base-timer__path-remaining.green {
            color: rgb(65, 184, 131);
        }

        .base-timer__path-remaining.orange {
            color: orange;
        }

        .base-timer__path-remaining.red {
            color: red;
        }

        .base-timer__label {
            position: absolute;
            width: 300px;
            height: 300px;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
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
                                <center><img src="img/nnnn.png" style="width: 85%;" alt=""></center>
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
                                <form method="post">
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
                                        <!-- <button type="submit" name = "submit" class="btn btn-outline-primary" style="width: 135px;" onclick="motorstart() ">ตกลง</button> -->
                                        <button type="button" class="btn btn-outline-danger" style="width: 135px;" value="0" onclick="motorstop() " id="stop">หยุดการทำงาน</button>
                                    </center>
                                </form>
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
                                        <div id="app"></div>
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

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>วัน-เดือน-ปี</th>
                            <th>ระยะเวลา</th>
                            <th>ระดับความเร็ว</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            //echo "id: " . $row["id_w"] . " - date: " . $row["date_w"] . "    " . $row["time_w"] . "  " . $row["level_w"] . "<br>";

                    ?>
                            
                                <tr>
                                    <td><?php echo  $row["date_w"] ?></td>
                                    <td><?php echo $row["time_w"] ?> </td>
                                    <td> <?php echo $row["level_w"] ?></td>
                                </tr>
                           
                    <?php
                        }
                    }
                    $conn->close();
                    ?>
                 </tbody>
                </table>



            </div>
        </div>
    </div>
</body>
<script>
    let timerInterval = null;

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
        $.ajax({
            type: "GET",
            url: 'http://128.199.103.49/robot12/savedatabase.php?time=' + gg + '&level=' + gg1,
            success: function(response) {
                console.log(response);
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
        var gg = document.getElementById("time").value;
        const TIME_LIMIT = gg * 60;
        const FULL_DASH_ARRAY = 283;
        const WARNING_THRESHOLD = TIME_LIMIT / 2;
        const ALERT_THRESHOLD = 10;

        const COLOR_CODES = {
            info: {
                color: "green"
            },
            warning: {
                color: "orange",
                threshold: WARNING_THRESHOLD
            },
            alert: {
                color: "red",
                threshold: ALERT_THRESHOLD
            }
        };


        let timePassed = 0;
        let timeLeft = TIME_LIMIT;
        let remainingPathColor = COLOR_CODES.info.color;

        document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

        startTimer();

        function onTimesUp() {
            clearInterval(timerInterval);
        }

        function startTimer() {
            timerInterval = setInterval(() => {
                timePassed = timePassed += 1;
                timeLeft = TIME_LIMIT - timePassed;
                document.getElementById("base-timer-label").innerHTML = formatTime(
                    timeLeft
                );
                setCircleDasharray();
                setRemainingPathColor(timeLeft);

                if (timeLeft === 0) {
                    onTimesUp();
                }
            }, 1000);
        }

        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;

            if (seconds < 10) {
                seconds = `0${seconds}`;
            }

            return `${minutes}:${seconds}`;
        }

        function setRemainingPathColor(timeLeft) {
            const {
                alert,
                warning,
                info
            } = COLOR_CODES;
            if (timeLeft <= alert.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(warning.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(alert.color);
            } else if (timeLeft <= warning.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(info.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(warning.color);
            }
        }

        function calculateTimeFraction() {
            const rawTimeFraction = timeLeft / TIME_LIMIT;
            return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
        }

        function setCircleDasharray() {
            const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
            document
                .getElementById("base-timer-path-remaining")
                .setAttribute("stroke-dasharray", circleDasharray);
        }

    };


    function motorstop() {
        var gg2 = document.getElementById("stop").value;



        console.log(JSON.stringify(gg2));
        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:2000/api/motorstop/' + gg2,
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
        clearInterval(timerInterval);
        document.getElementById("base-timer-label").innerHTML = "STOP";
        document.getElementById("base-timer-path-remaining").innerHTML = "STOP";



    };
    var myVar = setInterval(motorst, 1500);

    function motorst() {
        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:3000/api/motorstops',
            success: function(response) {
                // console.log(response['Datasw']);
                // console.log(response);
                if (response['Datasw'] == "stop") {
                    clearInterval(timerInterval);
                    document.getElementById("base-timer-label").innerHTML = "STOP";
                    document.getElementById("base-timer-path-remaining").innerHTML = "STOP";
                }

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
    }
</script>

</html>