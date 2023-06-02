<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div class="continer mt-5  ms- ">

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Create user
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="m-2">
             <input type="text" name="" id="USER_NAME" placeholder="Enter User Name ..." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="m-2">
             <input type="email" name="" id="EMAIL" placeholder="Enter the Email ..." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="m-2">
             <input type="text" name="" id="PASSWORD" placeholder="Enter the password ..." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" onkeyup="chengFun()">
        </div>
        <div class="m-2">   
             <input type="text" name="" id="ADDRESS" placeholder="Enter the Address ..." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="m-2">   
            dob: <input type="date" name="" id="DOB" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
            <div class="m-2">   
            <select name="COUNTRY_ID" id="COUNTRY_ID" class="form-select" aria-label="Default select example">
                <option value="">Select country</option>
            </select>
        </div>
        <div class="m-2">   
            <select name="STATE_ID" id="STATE_ID" class="form-select" aria-label="Default select example">
                <option value="">Select State</option>
            </select>
        </div>
        <div class="m-2">   
            <select name="CITY_ID" id="CITY_ID" class="form-select" aria-label="Default select example">
                <option value="">Select City</option>
            </select>
        </div>

        <div class="m-2">
             <input type="text" name="" id="Mobile" placeholder="Enter the Mobile ..." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" maxlength="10">
        </div>
         <div class="m-2">
             <input type="FILE" name="" id="IMAGE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="insertFunc()">Insert</button>
      </div>
    </div>
  </div>
</div>
    </div>

    <div class="conatiner">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        STUDENT_NAME : <input type="text" id="STUDENT_NAME" value="">
                        <br><br>
                        ENROLLMENT_NO : <input type="text" id="ENROLLMENT_NO" value="">
                        <br>
                        Male <input type="radio" name="gender" id="Male" value="Male">
                        FeMale <input type="radio" name="gender" id="Female" value="Female">
                        <br>
                        DOB : <input type="date" id="DOB" value="">
                        <input type="hidden" id="STUDENT_ID" value="">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="updateFunction()" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container m-5" id="myTable">

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script>
function chengFun(){
        $("#PASSWORD").attr("type","password");

}
        function insertFunc(){
            userName = $("#USER_NAME").val().trim();
            userEmail = $("#EMAIL").val().trim();
            userAddress = $("#ADDRESS").val().trim();
             userDOB = $("#DOB").val();
             userMobile = $("#Mobile").val();
            userPatter = /^[a-zA-Z ]+$/; //reguler expresion
            if (userName.match(userPatter) == null ) {
               alert("Please enter valide user");
               return false;
            }
            emailPattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          mobilePattern =  /^(\+\d{1,3}[- ]?)?\d{10}$/;

            if (userEmail.match(emailPattern) == null ) {
               alert("Please enter valide Email");
               return false;
            }
            if (userAddress == "") {
                alert("Please enter address");
            }
             if (userDOB == "") {
                alert("Please select date of birth");
            }
            if (userMobile.match(mobilePattern) == null ) {
               alert("Please enter valide Mobile");
               return false;
            }
            console.log(userAddress);

           


        }
        $(document).ready(() => {
            viewFunction();

        });


        function viewFunction() {


            $.ajax({
                type: 'post',
                url: 'back.php',
                data: {
                    "name": "view"
                },
                success: function(result) {

                    data = JSON.parse(result); //json to array object in javascript
                    table = ` <table class="table table-success table-striped">
                        <tr class="table-primary">
                        <td class="table-primary">STUDENT_ID</td>
                        <td class="table-secondary">ENROLLMENT_NO</td>
                        <td class="table-success">STUDENT_NAME</td>
                        <td class="table-danger">GENDER</td>
                        <td class="table-warning">DOB</td>
                        <td class="table-warning">Action</td>

                    </tr>`;
                    for (let i = 0; i < data.length; i++) {

                        table += `<tr class="table-primary">
                        <td class="table-primary">${data[i].STUDENT_ID}.</td>
                        <td class="table-secondary">${data[i].ENROLLMENT_NO}</td>
                        <td class="table-success">${data[i].STUDENT_NAME}</td>
                        <td class="table-danger">${data[i].GENDER}</td>
                        <td class="table-warning">${data[i].DOB}</td>
                        <td class="table-warning"> <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" onClick="editFunction(${data[i].STUDENT_ID})">Edit</button>  <button type="button" class="btn btn-danger" onClick="deleteFunction(${data[i].STUDENT_ID})">Delete</button> </td>
                    </tr>`;


                    }
                    table += `</table>`;

                    $('#myTable').html(table);
                    return false;

                }


            })
        }

        function editFunction(id) {
            $.ajax({
                type: 'post',
                url: 'back.php',
                data: {
                    "name": "edit",
                    "id": id
                },
                success: function(result) {
                    data = JSON.parse(result); //json to array object in javascript
                    $('#STUDENT_NAME').val(data.STUDENT_NAME);
                    $('#ENROLLMENT_NO').val(data.ENROLLMENT_NO);
                    if (data.GENDER == 'Male') {
                        $('#Male').prop('checked', true);

                    } else if ((data.GENDER == 'Female')) {
                        $('#Female').prop('checked', true);
                    }
                    $('#DOB').val(data.DOB);
                    $('#STUDENT_ID').val(data.STUDENT_ID);



                }
            });

        }

        function updateFunction() {
            STUDENT_NAME = $('#STUDENT_NAME').val();
            ENROLLMENT_NO = $('#ENROLLMENT_NO').val();
            if ($('#Male').is(":checked")) {
                gender = $('#Male').val();

            } else if ($('#Female').is(":checked")) {
                gender = $('#Female').val();
            }
            DOB = $('#DOB').val();
            STUDENT_ID = $('#STUDENT_ID').val();

            Studentdata = {
                "STUDENT_NAME": STUDENT_NAME,
                "ENROLLMENT_NO": ENROLLMENT_NO,
                "gender": gender,
                "DOB": DOB,
                "STUDENT_ID": STUDENT_ID
            }

            $.ajax({
                type: 'post',
                url: 'back.php',
                data: {
                    "name": "update",
                    "student": Studentdata
                },
                success: function(result) {
                    data = JSON.parse(result); // create json to array or object  JSON.parse
                    // JSON.stringify() javascript make json
                    alert(data.msg);
                    viewFunction();

                }
            });


        }
    </script>
</body>

</html>