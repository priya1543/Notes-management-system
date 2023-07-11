<!DOCTYPE html>
 <html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title> Notefy Feedback form </title>
        <h1 align="center"style="color: black; font-family: cursive;">
            <u>FEEDBACK FORM </u> </h1>
            <style>
            body
            { background-image: url('bgr.jpg');
                background-color: white;
                background-position: center;
  background-repeat: no-repeat;
  background-size: cover;}            
            #table{
                margin-bottom:0;
            }
             </style>
             </head>
             <body>
                <script>
                function validateForm() 
                {
                    var x = document.forms["myForm"]["name"].value;
                    var y = document.forms["myForm"]["email"].value;
           
                    if (x == "") {
                      alert("Name must be filled out");
                      return false;
                      

                    }
                    if (y == "") {
                      alert("Email must be filled out");
                      return false;
                  }
                  y=document.forms["myForm"]["contact"].value;
                  if (y==""){
                  alert("Contact number must be filled");
                  return false;
                  }
                  y=document.forms["myForm"]["year"].value;
                  if (y==""){
                  alert("Study Year must be filled");
                  return false;
                  }
                }
                </script>
                <div class="feed"> 
                    <div align="center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMfuwBBst6rdIm3Ymh3jrT1HF_EKNITXZR2w&usqp=CAU" alt="Feedback Image"></div>
                        <div> <p id="styleit">This feedback form has been created in order to get the user's reactions on our platform.
                            <br>Any suggestions are most welcomed and wewould definitely work on it to give our users a smooth functioning platform with a great user experience.</p>
                        </div> 
                        <form class="abc" align="center" name="myForm" onsubmit="return validateForm()" method="post" action="feedback.php" >
                            <table id="table" align="center" border="2">
                                <tr>
                                    <td> Name: </td>
                                    <td><input type="text" name="name" maxlength="20"> </td> </tr> 
                                    <tr> <td>Email:</td>
                                        <td> <input type="text"name="email" maxlength="40"></td></tr>
                                        <tr>
                                            <td>Contact No:</td> <td> <input type="numeric"name="contact"maxlength="10"></td></tr>
                                            <tr> <td>Study year:</td>
                                                <td><input type="number"name="year"></td></tr>
                                                <tr><td>Accessibility to the platform:</td><td>
                                                    <label class="radio-inline">
                                                        <input type="radio"name="accessibility" value="1">1</label>
                                                        <label class="radio-inline"><input type="radio"name="accessibility" value="2">2</label>
                                                        <label class="radio-inline"><input type="radio"name="accessibility" value="3">3</label>
                                                        <label class="radio-inline"><input type="radio"name="accessibility" value="4">4</label>
                                                        <label class="radio-inline"><input type="radio"name="accessibility"value="5" >5</label>
                                                    </td>
                                                </tr>
                                                <tr> 
                                                    <td>Features of the platform:</td><td>
                                                        <label class="radio-inline">
                                                            <input type="radio"name="features" value="1"  >1</label>
                                                            <label class="radio-inline">
                                                                <input type="radio"name="features" value="2" >2</label>
                                                                <label class="radio-inline">
                                                                    <input type="radio"name="features" value="3" >3</label>
                                                                    <label class="radio-inline"><input type="radio"name="features" value="4" >4</label>
                                                                    <label class="radio-inline"><input type="radio"name="features" value="5" >5</label>
                                                                </td>
                                                            </tr> <tr>
                                                                <td>Quality of the Content:</td>
                                                                <td> <label class="radio-inline">
                                                                    <input type="radio"name="quality" value="1" >1</label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio"name="quality" value="2" >2</label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio"name="quality" value="3" >3</label>
                                                                            <label class="radio-inline">
                                                                                <input type="radio"name="quality" value="4" >4</label>
                                                                                <label class="radio-inline"><input type="radio"name="quality" value="5" >5</label>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Any suggestions:</td> 
                                                                            <td> <input type="text"name="suggest"maxlength="50">
                                                                            </td>
                                                                        </tr>
                                                                    <tr > 
                                                                     <td colspan="2"  > <div class="btn">
                                                                        <button type="submit" id="feedback_btn" name="feedback_btn"> Submit </button>
                                                                    </div></td> 
                                                                    </tr>
                                                                    </table>
                                                                </form>
                                                            </div>
<?php
 echo "<div class='btn'>";
 echo "<button onclick='window.open(\"dashboard.php\");'>Back</button><br>";
 echo "</div>";
?>
                                                        </body>
                                                        
                                                        </html>

