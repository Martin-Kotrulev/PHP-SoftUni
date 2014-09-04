<!DOCTYPE html>
<html>
<head>
    <title>CV generator </title>
    <style>
        input, label {
            margin: 5px;
        }

        input[type="submit"] {
            width: 200px;
            height: 50px;
            font-weight: bold;
            margin-top: 20px;
        }

        .wrapper {
            border: 1px solid black;
            margin-top: 10px;
            padding-bottom: 5px;
            padding-left: 5px;
            width: 525px;
        }

        #input {
            float: left;
        }

        table, td, th {
            border: 1px solid black;
        }

        #output {
            margin-left: 750px;
            border: 1px solid black;
        }

        #output > table {
            margin: 20px;
        }

        #output > h1 {
            margin: 20px;
        }
    </style>
</head>
<body>
<script>
    // START Add and Remove Computer Skills
    var nextId = 0;
    function addComputer() {
        nextId++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "comp" + nextId);
        inputDiv.innerHTML =
            "<input type='text' name='comp[]' /> " +
                '<select name="compLevel[]" >' +
                '<option value="Beginner">Beginner</option>' +
                '<option value="Programmer">Programmer</option>' +
                '<option value="Ninja">Ninja</option>' +
                '</select>' + "<br/>";
        document.getElementById('computer').appendChild(inputDiv);
    }
    function removeComputer() {
        var inputDiv = document.getElementById('computer').lastChild;
        if (inputDiv.id != "comp1") {
            document.getElementById('computer').removeChild(inputDiv);
        }
    }
    // END Add and Remove Computer Skills

    // START Add and Remove Other Skills
    var nextIdLng = 0;

    function addLng() {
        nextIdLng++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "lng" + nextIdLng);
        inputDiv.innerHTML =
            "<input type='text' name='lngText[]' /> " +
                '<select name="comprehensionLevel[]"">' +
                '<option value="default" disabled selected>-Comprehension-</option>' +
                '<option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>' +
                '<option value="advanced">Advaned</option>' +
                '</select>' +
                '<select name="readingLevel[]"">' +
                '<option value="default" disabled selected>-Reading-</option>' +
                '<option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>' +
                '<option value="advanced">Advaned</option>' +
                '</select>' +
                '<select name="writingLevel[]"">' +
                '<option value="default" disabled selected>-Writing-</option>' +
                '<option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>' +
                '<option value="advanced">Advaned</option>' +
                '</select>' + "<br/>";
        document.getElementById('lng').appendChild(inputDiv);
    }

    function removeLng() {
        var inputDiv = document.getElementById('lng').lastChild;
        if (inputDiv.id != "lng1") {
            document.getElementById('lng').removeChild(inputDiv);
        }
    }
    // END Add and Remove Other Skills
</script>
<div id="input">
    <form action="" method="post">
        <div class="wrapper">
            <h2>Personal Information</h2>
            <input type="text" placeholder="First Name" name="fName"/><br>
            <input type="text" placeholder="Last Name" name="lName"/><br>
            <input type="text" placeholder="Email" name="email"/><br>
            <input type="text" placeholder="Phone Number" name="phone"/><br>
            <label>Female <input type="radio" placeholder="Email" name="sex" value="Female"/></label>
            <label>Male <input type="radio" placeholder="Email" name="sex" value="Male"/></label><br>
            <label>Birth Date<br><input type="date" placeholder="dd/mm/yyyy" name="bDate"/></label><br>
            <label>Nationality<br>
                <select name="nation">
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Greek">Greek</option>
                    <option value="Indian">Indian</option>
                    <option value="USA">USA</option>
                </select>
            </label><br>
        </div>
        <div class="wrapper">
            <h2>Last Work Position</h2>
            <label>Company Name <input type="text" name="company"/></label><br>
            <label>From <input type="date" placeholder="dd/mm/yyyy" name="fromDate"/></label><br>
            <label>To <input type="date" placeholder="dd/mm/yyyy" name="toDate"/></label><br>
        </div>
        <div class="wrapper">
            <h2>Computer Skills</h2>
            <label>Programming Languages</label>

            <div id="computer">

            </div>
            <script>addComputer();</script>
            <input type="button" value="Remove Language" onclick="removeComputer()"/>
            <input type="button" value="Add Language" onclick="addComputer()"/>
        </div>
        <div class="wrapper">
            <h2>Other Skills</h2>
            <label>Languages</label>

            <div id="lng">

            </div>
            <script>addLng();</script>
            <input type="button" value="Remove Language" onclick="removeLng()"/>
            <input type="button" value="Add Language" onclick="addLng()"/><br>
            <label>Driver's License</label>
            <input type="checkbox" name="drive[]" value="B">B
            <input type="checkbox" name="drive[]" value="A">A
            <input type="checkbox" name="drive[]" value="C">C<br>
        </div>

        <input type="submit" value="Generate CV">
    </form>
</div>

<div id="output">
    <?php
    if (isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['sex']) && isset($_POST['bDate']) && isset($_POST['nation'])) {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sex = $_POST['sex'];
        $bDate = $_POST['bDate'];
        $nation = $_POST['nation'];

        $company = $_POST['company'];
        $from = $_POST['fromDate'];
        $to = $_POST['toDate'];

        $comp = $_POST['comp'];
        $compL = $_POST['compLevel'];

        $lng = $_POST['lngText'];
        $cLevel = $_POST['comprehensionLevel'];
        $readLevel = $_POST['readingLevel'];
        $writeLevel = $_POST['writingLevel'];
        $drive = $_POST['drive'];

        $result = "";

        if (preg_match('/^[A-Za-z]+/', $fName) && preg_match('/^[A-Za-z]+/', $lName) && preg_match('/^[A-Za-z0-9]+/', $company) && strlen($fName) <= 20 && strlen($fName) >= 2 && strlen($lName) <= 20 && strlen($lName) >= 2 && strlen($company) <= 20 && strlen($company) >= 2 && preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email) && preg_match('/^[0-9\+\-\s]+/', $phone)) {
            $result .= "<h1>CV</h1><br>";
            $result .= "<table><th colspan='2'>Personal Information </th> <tr><td>First Name</td> <td>$fName</td></tr>  <tr><td>Last Name</td> <td>$lName</td></tr>  <tr><td>Email</td> <td>$email</td></tr>  <tr><td>Phone Number</td> <td>$phone</td></tr>  <tr><td>Gender</td> <td>$sex</td></tr>				 <tr><td>Birth Date</td> <td>$bDate</td></tr> <tr><td>Nationality</td> <td>$nation</td></tr></table>";

            $result .= "<table><th colspan='2'>Last Work Position</th><tr><td>Company Name</td><td>$company</td></tr><tr><td>From</td><td>$from</td></tr><tr><td>To</td><td>$to</td></tr></table>";

            $result .= "<table><th colspan='2'>Computer Skills</th><tr><td>Programming Languages</td><td><table><tr><th>Language</th><th>Skill Level</th></tr>";

            for ($i = 0; $i < count($comp); $i++) {
                $result .= "<tr><td>" . $comp[$i] . "</td><td>" . $compL[$i] . "</td></tr>";
            }

            $result .= "</table></td></tr></table>";

            $result .= "<table><th colspan='2'>Other Skills</th><tr><td>Languages</td><td><table><tr><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>";

            for ($i = 0; $i < count($lng); $i++) {
                $result .= "<tr><td>" . $lng[$i] . "</td><td>" . $cLevel[$i] . "</td><td>" . $readLevel[$i] . "</td><td>" . $writeLevel[$i] . "</td></tr>";
            }
            $result .= "</table></td></tr>";

            $result .= "<tr><td>Driver's license</td><td>";

            for ($i = 0; $i < count($drive); $i++) {
                if ($i == count($drive) - 1) {
                    $result .= $drive[$i];
                } else {
                    $result .= $drive[$i] . ", ";
                }
            }

            echo $result;
        } else {
            echo "Please enter a valid information to generate your CV";
        }

    }
    ?>
</div>
</body>
</html>
