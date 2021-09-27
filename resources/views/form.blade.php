<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
    <body>
    <div class="container">
    <h1>Admission form</h1>
        <form action="{{route('kyc.form.submit')}}" method="POST">
        @csrf
        <div  class="form">
            <div class="form group col-md-4">
                <lable for="account_no">Account no:</lable><br>
                <input type="number" name="account_no" id="account_no" class="form-control" placeholder="account_no"><br></br>
        
                <lable for="aadhar_no">Aadhar_no:</lable><br>
                <input type="number" name="aadhar_no" id="aadhar_no"  class="form-control" placeholder="aadhar_no" ><br></br>
            </div>
            </div>
        <button type="submit" class="btn-btn-primary">Submit</button>
        </form>
    </div>
    </body>
</html>