<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="{{url('')}}/assests/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
    {{asset('/assests/css/style.css')}}
    {{url('/assests/css/style.css')}}
    {{url('')}}

<div class="container">
  <h1>Create Student</h1>
  <div>
    <table>
        <thead>
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Std ID</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo ++$sl; ?></th>
                <th>Name</th>
                <th>Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Std ID</th>
            </tr>
        </tbody>
    </table>
  </div>

</body>
</html>


