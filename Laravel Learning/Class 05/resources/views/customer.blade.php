<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5 text-center">
        <h1 class="text-primary">Customer Registration</h1>
        <form class="my-5" action="{{url('/')}}/customer" method="post">
            <div class="row">
                <div class="col-lg-6 my-3">
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-lg-6 my-3">
                    <input type="email"name="email"  class="form-control" placeholder="Email">
                </div>
                <div class="col-lg-6 my-3">
                    <input type="text"  name="address" class="form-control" placeholder="Address">
                </div>
                <div class="col-lg-6 my-3">
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                <div class="col-lg-6 my-3">
                    <input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
                </div>
                <div class="col-lg-6 my-3">
                    <select class="form-control">
                        <option>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-lg-6 my-3">
                    <input type="password"name="password"  class="form-control" placeholder="Password">
                </div>
                <div class="col-lg-6 my-3">
                <select class="form-control">
                        <option>Select Points</option>
                        <option value="0">0</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col-lg-6 my-3">
                <select class="form-control">
                        <option>Select Status</option>
                        <option value="on">On</option>
                        <option value="off">Off</option> 
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>