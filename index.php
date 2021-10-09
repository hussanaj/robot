 <!DOCTYPE html>
<html>

<head>
    <title>หุ่นยนต์กายภาพขา</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
</head>
<style>
    body {
        font-family: 'Pridi', serif;

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

<body>
    <div class="row">

        <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg w3-teal">
                <a class="navbar-brand" href="main.php">

                    <img src="img/physical-therapy.png" alt="logo" style="width:35px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="main.php">หน้าหลัก <span class="sr-only">(current)</span></a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                การทำงาน
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="index.php">สั่งการทำงาน</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <form action="" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-10">

                    <div class="card " id="card1">
                        <div class="card-body shadow-lg  bg-white rounded ">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



                                    <!-- <div class="form-group">
                                        <input name="amount" id="time"  type="number" class="form-control" placeholder="เวลา(นาที)">
                                    </div> -->

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">ระยะเวลา</label>
                                        </div>
                                        <select class="custom-select" id="time" name="time">
                                            <option hidden selected>โปรดเลือก...</option>
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

                                    <div class="input-group mb-3">
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
                                    <!-- <div class="form-group">
                                        <input name="date" id="level" type="number" class="form-control" placeholder="ระดับความเร็ว(1-2-3)">

                                    </div> -->

                                    <button type="button" class="btn btn-outline-primary" onclick="motorstart() ">ตกลง</button>
                                    <!-- <button type="reset" class="btn btn-outline-primary">รีเซ็ต</button> -->
                                    <button type="button" class="btn btn-outline-danger" value ="0" onclick="motorstop() " id="stop">หยุดการทำงาน</button>
                                    

                                </div>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-sm-1">
                </div>

            </div>

            <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-10">

                    <div class="card " id="card1">
                        <div class="card-body shadow-lg  bg-white rounded">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <!-- <button type="button" class="btn btn-outline-primary" onclick="motorstart()">ตกลง</button>
                                    <button type="button" class="btn btn-outline-primary">รีเซ็ต</button> -->
                                    <h4 style="font-family: 'Pridi', serif;"><b> สถานะการใช้งาน</b></h4>

                                    <div id="app"></div>
                                </div>


                            </div>
                        </div>


                    </div>
                    <div class="col-sm-1">

                    </div>

                </div>

        </form>
    </div>


</body>
<script>
    function motorstart() {
        var gg = document.getElementById("time").value;
        var gg1 = document.getElementById("level").value;
       
        console.log(JSON.stringify(gg));
        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:3000/api/motorstart/' + gg + '/' + gg1 ,
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
        let timerInterval = null;
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
            url: 'http://127.0.0.1:2000/api/motorstop/' + gg2  ,
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
    };
</script>

</html>