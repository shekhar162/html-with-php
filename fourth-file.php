<!Doctype html>
    <head>
        <title>Web application</title>
        <meta charset = "UTF-8"/>
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <meta name = "author" content = "Web application"/>
        <meta name = "keyword" content = "Web, application"/>
        <meta name = "description" content = "Web application for mordern application"/>
    </head>
    <style type="text/css">
        td{
            border:1px solid red;
        }
    </style>
    <script type="text/javascript">
        var abg = "abg";
        abg[1] = "x";
        console.log(abg.length);
        console.log(abg[1]);
    </script>
    <body>
        <?php
            if(isset($_POST)){
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
            };
        ?>
        <form name = "registration" method = "post" action ="">
            <h1>Your Id</h1>
            <div>
                <label name = "lblMyName" for = "myName"> Your Name </label>
                <input type= "text" name = "myName" class="textInputBox" id = "myName" placeholder="Jon" value="Jordon"/>
            </div>
            
            <div>
                <label name = "lblGender" for = "gender">Gender</label> 
                <input type = "radio" name = "gender" class="radioInputBox" id= "genderMale" value="male" checked>Male
                <input type = "radio" name = "gender" class="radioInputBox" id= "genderFemale" value="female">Female
            </div>

            <div>
                <label name = "lblGender" for = "address">Address</label> 
                <input type = "checkbox" name = "address[]" class="checkInputBox" id= "homeAdd" value="Home address is col!">Home address
                <input type = "checkbox" name = "address[]" class="checkInputBox" id= "offAdd" value="Office add is coll!">Office address
            </div>
            

            <div>
                <label name = "lblMyName" for = "lang"> Your Name </label>
                <select name = "lang[]" class="lang" id = "lang" multiple>
                    <option value= "hindi">hindi</option>
                    <option value= "english">english</option>
                    <option value= "marath">marath</option>
                </select>
            </div>

            <div>
                <label name = "lblProfesion" for = "lang"> Your Name </label>
                <select name = "profesion" class="profesion" id = "profesion">
                    <option value= "doctor">doctor</option>
                    <option value= "engineer">engineer</option>
                    <option value= "farmer">farmer</option>
                </select>
            </div>

            <input type="submit" name="btnSub" value="Add"/>
        </form>

        <table>
            <tr>
                <td colspan = "2">Name</td>
            </tr>
            <tr>
                <td rowspan = "2">Age</td>
                <td>30</td>
            </tr>
            <tr>
               
                <td>33</td>
            </tr>
        </table>

    
    </body>
</html>