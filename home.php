<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DASH-Meet</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="./style1.css">
        <script src="script2.js"></script>
    </head>
    <body>
        <section id="wrapper">
            <div class="p-4">
                <div class="welcome">
                    <div class="content rounded-3 p-3">
                        <h1 class="fs-3">DASH-Meet</h1>
                        <p class="mb-0">Where collaboration meets speed and speed meets collaboration</p>
                         <a href="logout.php"  class= "logoutbtn" > logout </a>
                    </div>
                </div>

                <section class="charts mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                                <h3 class="fs-6 mb-3">Polls</h3>

                                <div id="poll">
                                    <h3>Do you like PHP and AJAX so far?</h3>
                                    <form class="pollForm" action="index.html" method="post">

                                        <label for="Question1">Question 1:</label><br>
                                        <input type="text" id="fname" name="fname"><br>
                                        <label for="lname">Last name:</label><br>
                                        <input type="text" id="lname" name="lname"><br>

                                        Yes:  <input  type="radio" name="vote" value="0" onclick="show_poll();"><br>
                                        No:  <input  type="radio" name="vote" value="1" onclick="show_poll();"><br>
                                        <!--
                                        https://phppot.com/php/php-poll-script/
                                        https://codeshack.io/poll-voting-system-php-mysql/
                                        -->
                                    </form>
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="charts mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                            <h3 class="fs-6 mb-3">Task list</h3>
                            <div class="container">
                                <p><label for="new-task">Add Item</label><input id="new-task" type="text"><button>Add</button></p>
                                <h3>Todo</h3>
                                <ul id="incomplete-tasks">
                                    <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                                    <li class="editMode"><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                                </ul>
                                <h3>Completed</h3>
                                <ul id="completed-tasks">
                                    <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                                </ul>
                            </div>
                            <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="charts mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                                <h3 class="fs-6 mb-3">Task list</h3>
                                <div class="container">
                                    <h1>Take your Notes here</h1>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add a Note</h5>
                                            <div class="form-group">
                                                 <textarea class="form-control"
                                                     id="addTxt" rows="3">
                                                 </textarea>
                                            </div>
                                            <button class="btn btn-primary"
                                                 id="addBtn" style=
                                                 "background-color:green">
                                                 Add Note
                                            </button>
                                        </div>
                                    </div>
                                    <hr><h1>Your Notes</h1><hr>
                                    <div id="notes" class="row container-fluid"></div>
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="charts mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                                <h3 class="fs-6 mb-3">File Sharing</h3>
                                <div class="container">
                                  <!-- File Sharing Code Here-->
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </section>



            </div>
        </section>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script src="script.js"></script>
        <script src="script2.js"></script>
        <script src="gfg.js"></script>
    </body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
