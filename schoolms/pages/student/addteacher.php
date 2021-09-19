<?php
include("sidebar.php");
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed">
    <div class="container">
        <div class="row">
            <div class="addteachertext">

                <h1>Add a Teacher</h1>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="block" data-fade="true">
                        <label for="my-input">First Name</label>

                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="block" data-fade="true">
                        <label for="my-input">Last Name</label>

                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="block" data-fade="true">

                        <label for="my-input">Age</label>
                        <input id="my-input" class="form-control" type="number" name="">
                    </div>
                    <div class="block" data-fade="true">

                        <label for="my-input">Gender</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="block" data-fade="true">
                        <label for="my-input">Teacher Level</label>

                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="block" data-fade="true">
                        <label for="my-input">Subject</label>

                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <br>
                    <div class="block" data-fade="true">

                        <input type="button" id="register" value="Register">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .addteachertext {
        margin-top: 150px;
        text-align: center;
    }

    .addteachertext h1 {
        text-align: center;
        margin-left: 20px;
    }

    #register:hover {
        transition: 0.5s ease-in-out;
        background-color: lightgreen;
    }

    input {
        /* margin: 20px 40px 20px 40px; */
        height: 50px;
        padding: 20px 50px 20px 50px;
        border-radius: 1cm;
        border: 0px solid;
    }
</style>

<script src="wakenbake.js"></script>