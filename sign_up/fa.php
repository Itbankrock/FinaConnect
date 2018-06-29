<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FinAConnect Sign up</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="fa_css.css">


</head>
<body>
<div class="container">
    <div class="row">
        <form class="col s12" action="../Login.php" method="post" id="reg-form">
            <h3>Financial Advisor
                <i class="fa fa-address-card prefix" style="font-size:50px"></i></h3>
            <center> <small><disabled style="color: darkgray">your first step to finding the more clients in need of your expertise</disabled></small></center>
                <div class="row">
                <div class="input-field col s4">
                    <input id="first_name" type="text" class="validate" required value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>" name="first_name" >
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s4">
                    <input id="middle_name" type="text" class="validate" required value="<?php if(isset($_POST['middle_name'])) echo $_POST['middle_name'];?>" name="middle_name" >
                    <label for="middle_name">Middle Name</label>
                </div>

                <div class="input-field col s4">
                    <input id="last_name" type="text" class="validate" required  value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>" name="last_name">
                    <label for="last_name">Last Name</label>
                </div>

                <div class="input-field col s2">
                    <input id="bldg" type="text" class="validate" required  value="<?php if(isset($_POST['bldg'])) echo $_POST['bldg'];?>" name="bldg">
                    <label for="bldg">Bldg. #</label>
                </div>

                <div class="input-field col s4">
                    <input id="street" type="text" class="validate" required value="<?php if(isset($_POST['street'])) echo $_POST['street'];?>" name="street">
                    <label for="street">Street</label>
                </div>
                <div class="input-field col s3">
                    <input id="city" type="text" class="validate" required value="<?php if(isset($_POST['city'])) echo $_POST['city'];?>" name="city">
                    <label for="city">City</label>
                </div>
                <div class="input-field col s3">
                    <input id="region" type="text" class="validate" required value="<?php if(isset($_POST['region'])) echo $_POST['region'];?>" name="region">
                    <label for="region">Region</label>
                </div>
                <div class="input-field col s6">

                    <input id="contact" type="text" class="validate" required value="<?php if(isset($_POST['contact'])) echo $_POST['contact'];?>" name="contact">
                    <label for="contact">Contact Number</label>
                </div>

                <div class="input-field col s6">
                    <select name ="memType">
                        <option value="Regular" selected="">Regular </option>
                        <option value="Associate">Associate </option>
                        <option value="Certified">Certified </option>
                    </select>
                    <label>Membership Type</label>
                </div>

            </div>
                <div class = "row">
                <div class = "file-field input-field col s6">
                    <div class = "btn" style="width: auto">
                        <span>BROWSE</span>
                        <input type = "file" multiple />
                    </div>
                    <div class = "file-path-wrapper">
                        <input class = "file-path validate" type = "text"
                               placeholder = "Upload RFP Certificate" />
                    </div>
                </div>

            
            </div>
            <div class ="row">
            <div class="input-field col s6">

                    <input id="email" type="email" class="validate" required name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                    <label for="email">Email</label>
            </div>
        </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate" minlength="6" required value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>" name="password">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s6">
                    <input id="c_password" type="password" class="validate" minlength="6" required>
                    <label for="c_password">Confirm Password</label>
                </div>
            </div>
                <div class="input-field col s12">
                    <center>
                    <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="submit2">Register
                    </button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>


<script>


    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.autocomplete');
        var instances = M.Autocomplete.init(elems, options);
    });


    // Or with jQuery

    $(document).ready(function(){
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'https://placehold.it/250x250'
            },
        });
    });

    $(document).ready(function() {
        $('select').material_select();
    });
</script>