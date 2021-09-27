<!DOCTYPE html>
<html>
    <head>
        <style>
            .center {
  margin-left: auto; 
  margin-right: auto;
}
        </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
  </head>
  <body>
        <table class="center" id ="Kyc" border=2>
            <tr>
                <th>Account No</th>
                <th>Aadhar No</th>
                <th>Create Table</th>
                <th>Update Table</th>
                <th>Action</th>
            </tr>
            @foreach($data as $d)
            <tr>
                <th>{{$d->account_no}}</th>
                <th>{{$d->aadhar_no}}</th>
                
                <th>{{$d->created_at}}</th>
                <th>{{$d->updated_at}}</th>
                <th><a href={{route('kyc.form.delete',$d->id)}}>Delete</a>
                    <a href={{route('kyc.form.edit',$d->id)}}>Edit</a></th>
            </tr>
            @endforeach
        </table>
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
    </body>
</html>