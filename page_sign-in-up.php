<?php
session_start();
session_unset();
session_destroy();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="style-sign-in-up.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="part1">
        <div id="navigation-bar" class="text-center row">
            <div class="nav-left col-sm-6">
                Essay Speed Checker
            </div>
            <div class="nav-right col-sm-6 h2">
                <button id="sign-in-btn" class="nav-btns">SIGN IN</button>
                <button id="sign-up-btn" class="nav-btns">SIGN UP</button>
            </div>
        </div>

        <div id="intro-content-image" class="text-center row">
            <div class="col">
                <img src="images/image-1.gif" alt="">
            </div>
            <div class="col">
                <img src="images/image-2.gif" alt="">
            </div>
            <div class="col">
                <img src="images/image-3.gif" alt="">
            </div>
        </div>

        <div id="intro-content-text" class="text-center row ">
            <div class="esc-text col">
                <span class="esc-highlight">ESCAPE</span> ESSAY PAPER<br>WORK HELL
            </div>
            <div class="esc-text col">
                <span class="esc-highlight">SWIFTLY</span> FINISH<br>CHECKING ESSAYS
            </div>
            <div class="esc-text col">
                <span class="esc-highlight">COMMIT</span> YOUR HOURS TO<br>WHAT MATTERS
            </div>
        </div>
    </div>

    <div id="part2">
        <div id="darken">|</div>
    </div>

    <div id="part3">
        <div id="sign-in-card" class="front-card">
            <div class="card-title">
                <h1>SIGN IN</h1>
            </div>
            <div>
                <input id="login-email-input" type="text" size="50" placeholder="email" class="input-card"><br>
                <input id="login-password-input" type="password" size="50" id="" placeholder="password" class="input-card">
                <div class="row">
                    <div class="col-sm-6 h2">
                        <button id="exit-btn1" class="nav-btns">✖</button>
                    </div>
                    <div class="col-sm-6 h2">
                        <button id="log-in-btn" class="nav-btns">✓</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="sign-up-card" class="front-card">
            <div class="card-title">
                <h1>SIGN UP</h1>
            </div>
            <div>
                <input type="text" size="50" id="email-input" placeholder="email" class="input-card">
                <input type="text" size="50" id="username-input" placeholder="username" class="input-card">
                <input type="password" size="50" id="password-input" placeholder="password" class="input-card">
                <input type="password" size="50" id="cpassword-input" placeholder="confirm password" class="input-card">
                <input type="text" size="50" id="contact-number-input" placeholder="contact number ex: 0##########"
                    class="input-card"><br>
                <div class="row" id="role-selection">
                    <div class="col-sm-6">
                        <input type="radio" id="teacher-role-input" name="role-selected" value="teacher">
                        <label for="teacher">TEACHER</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" id="student-role-input" name="role-selected" value="student">
                        <label for="student">STUDENT</label>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <button id="exit-btn2" class="nav-btns h2">✖</button>
                    </div>
                    <div class="col-sm-6">
                        <button id="input-sign-up-btn" class="nav-btns h2" >✓</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="script_page_sign-in-up.js"></script>

</html>