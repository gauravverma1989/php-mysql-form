<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="db_config.php" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Mobile Number</label> <span id="userMobile-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userMobile" id="userMobile" />
            </div>
            <div class="input-row">
                <label>D.O.B</label> <span id="userDob-info"
                    class="info"></span><br /> <input type="date"
                    class="input-field" name="userDob" id="userDob" />
            </div>
            <div class="input-row">
                <label>Pin Code</label> <span id="userPin-info"
                    class="info"></span><br /> <input type="number"
                    class="input-field" name="userPin" id="userPin" />
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var userMobile = $("#userMobile").val();
            var userDob = $("#userDob").val();
            var userPin = $("#userPin").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userMobile == "") {
                $("#userMobile-info").html("Required.");
                $("#userMobile").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userMobile.match(/^([1-9]{1}[0-9]{9})?$/))
            {
                $("#userMobile-info").html("Invalid Mobile Number.");
                $("#userMobile").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userDob == "") {
                $("#userDob-info").html("Required.");
                $("#userMobile").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userPin == "") {
                $("#userPin-info").html("Required.");
                $("#userPin").css('border', '#e66262 1px solid');
                valid = false;
            }

            return valid;
        }
</script>
</body>
</html>