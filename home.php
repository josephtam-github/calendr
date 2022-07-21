<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"></link>
    <link rel="stylesheet" href="./fontawesome/css/all.css"></link>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css"></link>
    <script src="https://kit.fontawesome.com/f71a44a4e4.js"crossorigin="anonymous"></script>
    <!--    FOR OFFLINE TESTING
    -->
    <title>Home | Calendr</title>
</head>
<body>
    <!--
        FOR MOBILE
    <nav>
        <div class="text-banner">Calend<span>r</span></div>
    </nav>
    -->
    <div class="row" style="height: 100vh">
        <nav class="col-md-1">
            <div class="d-md-flex flex-column h-100 justify-content-between align-items-center bg-light">
                <div class="d-md-flex flex-column align-items-center">
                    <div class="mt-md-5 text-center text-white fw-bolder bg-info rounded-pill p-2">JT   </div>
                    <i class="mt-md-5 fa-lg fas fa-home"></i>
                    <i class="mt-md-5 fa-lg fas fa-clock"></i>
                    <i class="mt-md-5 fa-lg fas fa-calendar"></i>
                    <i class="mt-md-5 fa-lg fas fa-bell"></i>
                </div>
                <div class="d-md-flex flex-column align-items-center">
                    <i class="mb-md-5 fa-lg fas fa-cog"></i>
                    <i class="mb-md-5 fa-lg fas fa-question-circle"></i>
                </div>
            </div>
        </nav>
        <main class="col-md-11">
            <div class="row h-100">
                <section class="dashboard col-6 d-flex flex-column justify-content-center">
                    <table class="table bg-light border-light rounded-3 text-center">
                        <thead>
                            <th colspan="3" id="calMonth">Month</th>
                            <th colspan="2" id="calYear">Year</th>
                            <th id="calLeft"><</th>
                            <th id="calRight">></th>
                        </thead>
                        <tr>
                            <td>MON</td>
                            <td>TUE</td>
                            <td>WED</td>
                            <td>THU</td>
                            <td>FRI</td>
                            <td>SAT</td>
                            <td>SUN</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </section>
                <section class="details col-6 d-flex flex-column justify-content-center">
                   <!-- 
                        <span class="flex-aligned">
                        <h2><i class="fas gray fa-bars"></i> Today </h2>
                        <i class="fas gray fa-plus float-end"> </i>
                    </span>
                    <span class="task flex-aligned">
                        <i class="far fa-lg gray fa-square"></i>
                        <textarea rows="1" type="text" name="item" id="1" placeholder="Add a task here" aria-placeholder="Add a Task to today here"></textarea>
                    </span>
                    <div class="hr"></div>
                    <span class="flex-aligned">
                        <h3>My To Do!</h3>
                        <h3 class="float-end">Due date</h3>
                    </span>
                    <span class="sub-task flex-aligned">
                        <i class="far fa-lg lightgray fa-square"></i>
                        <textarea rows="1" type="text" name="item" id="1" placeholder="Add a sub-task here" aria-placeholder="Add a sub-task here"></textarea>
                        <small class="float-end">Yesterday</small>
                    </span>
                    <div class="hr"></div>
                   -->
                </section>
            </div>
        </main>
    </div>
    <!--
        NOTE FEATURE
    <div class="note">
        <p>Good morning, let's plan our day!</p>
        <div class="list-board">
            <span>To-do List</span>
            <hr>
            <input type="text">
            <hr>
            <input type="text">
            <hr>
            <input type="text">
            <hr>
            <input type="text">
            <hr>
            <input type="text">
            <hr>
            <input type="text">
            <hr>
        </div>
    </div>
    -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>