<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="{{asset('admins/css/styles.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="icon" href="./assets/images/logo.png" sizes="32x32" />
    <link rel="icon" href="./assets/images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="./assets/images/logo.png" />
</head>


<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0" style="border-radius: 15px">
                            <div class="card-body">

                                <p style="color: rgb(255, 165, 0); font-weight:bold" class="text-center">Admin Dashboard</p>
                                <form action="{{ route('actionlogin') }}" method="post">
                                @csrf
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{session('error')}}
                                    </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" style="background-color: rgb(255, 165, 0); border-color: rgb(255, 165, 0)">Sign In</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
