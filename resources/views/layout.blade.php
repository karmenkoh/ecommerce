<!DOCTYPE html>
<html>
<head>
    <title>Add to Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
                  <i class="fa fa-search"
                      style="font-size: 18px;">
                  </i>
              </button>
                <input type="text"
                    placeholder=" Search"
                    name="search">
            </form>
        </div>

    <div class="sidenav">
      <a href="{{ url('/homepage')}}">Home</a>
      <a href="{{ url('/checkout') }}">Checkout</a>
    </div>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['image'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br/>
<div class="main">

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

@yield('scripts')

</body>
</html>
