<!doctype html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
  <body>
    <h1>Student Details</h1>
     <form method = "POST" action="{{ route('regStore') }}">
      @csrf
       <table class = "form-group">
             <td>First Name:</td>
             <td><input class = "form-control" placeholder="Name" type = "text" name = "name">
             </td>
             <td>Second Name:</td>
             <td><input class = "form-control" placeholder="Name" type = "text" name = "name">
             </td>
          </tr>
          <tr>
             <td>DOB: </td>
              <td><input class = "form-control" placeholder="DOB" type = "date" name = "dob"></td>
             </td>
          </tr>
          <tr>
            <tr>
             <td>Father Name:</td>
             <td>
               <input class = "form-control" placeholder="Father Name" type = "text" name = "fname">
            <td>Mother Name:</td>
               <td><input class = "form-control" placeholder="Mother Name" type = "text" name = "mname">
               </td>
             </td>
          </tr>
          <tr>
             <td>Caste: </td>
             <td><input class = "form-control" placeholder="Caste" type = "text" name = "caste">
             </td>
             <td>Aadhar No:</td>
             <td><input class = "form-control" placeholder="Aadhar Number" type = "string" name = "aadhar">
             </td>
          </tr>
          <tr>
             <td>Phone:</td>
             <td><input class = "form-control" placeholder="Phone" type = "string" name = "phone">
             </td>
             <td>Gender:</td>
             <td>
                <input type = "radio" name = "gender" value = "Female">Female</input>
                <input type = "radio" name = "gender" value = "Male">Male</input>
                <input type = "radio" name = "gender" value = "Others">Others</input>
             </td>
          </tr>
          <tr>
             <td>Select Class:</td>
             <td>
                <select class = "form-control" name = "subject[ ]" size = "4" multiple>
                   <option value = "PreKG">PreKG</option>
                   <option value = "LKG">LKG</option>
                   <option value = "SKG">SKG</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                   <option value = "6">6</option>
                   <option value = "7">7</option>
                   <option value = "8">8</option>
                   <option value = "9">9</option>
                   <option value = "10">10</option>
                   <option value = "11">11</option>
                   <option value = "12">12</option>
              </select>
             </td>
          </tr>
          <tr>
             <td>
               <div style="margin-left:450px">
                 <button class = "btn btn-light">
                   Submit
                 </button>
               </div>
             </td>
          </tr>
       </table>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
