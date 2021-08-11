<html>

<head>
    <title>Ecommerce @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .sidenav {
          height: 100%;
          width: 150px;
          position: fixed;
          z-index: 1;
          top: 50px;
          left: 0;
          background-color: #F5F5F5;
          overflow-x: hidden;
          padding-top: 20px;
        }

        .sidenav a {
          padding: 6px 6px 6px 32px;
          text-decoration: none;
          font-size: 15px;
          color: #818181;
          display: block;
        }

        .sidenav a:hover {
          color: #696969;
        }

        .main {
          margin-left: 160px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        .search input[type=text]{
            width:300px;
            height:25px;
            border-radius:25px;
            border: none;

        }

        .search{
            background-color: #4B0082;
            float:right;
            margin:7px;
            width: 100%;
        }

        .search button{
            background-color: #4B0082;
            color: #f2f2f2;
            padding: 5px 10px;
            margin-right: 16px;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }
    </style>

    <div class="search">
        <form action="#">
            <button>
              <i class="fa fa-search" style="font-size: 18px;"></i>
            </button>
            <input type="text" placeholder=" Search" name="search">
        </form>
    </div>

    <div class="sidenav">
      <a href="{{ url('/stocks') }}">Home</a>
      <a href="{{ url('/stocks/create') }}">Add Product</a>
      <a href="{{ url('/order') }}">View Orders</a>
    </div>
</head>

<body>
    @section('sidebar')
    @show

    <div class="main">
        @yield('content')
    </div>
</body>
</html>
