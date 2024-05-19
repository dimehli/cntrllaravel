@extends('layout')
@section('content')

<style>

body {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
    font-family: Arial, sans-serif; 
    
}

.navbar {
    background-color: #fff; 
}
.navbar-brand {
    color: #964B00; 
}

.navbar-toggler-icon {
    color: #fff; 
}

.card {
    background-color: rgba(255, 255, 255, 0.8); 
    color: #333; 
    border-radius: 10px; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); 

}

.card-body {
    padding: 20px; 
    margin-top: 20px;
}

.card-title {
    font-size: 24px; 
    margin-bottom: 10px; 
}

.card-text {
    font-size: 16px; 
    line-height: 1.6; 
}

.btn-danger {
    background-color: #dc3545; 
    border-color: #dc3545; 
}

.btn-danger:hover {
    background-color: #c82333; 
    border-color: #bd2130; 
}
.btn-danger {
    background-color: #964B00; /* Marron */
    border-color: #964B00; /* Bordure du bouton */
}

.btn-danger:hover {
    background-color: #7a3e00; /* Marron plus foncé au survol */
    border-color: #7a3e00; /* Bordure plus foncée au survol */
}


  </style>
<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body text-center">
                    <div class="col-md-4 mx-auto"> 
                        <img src="/images/bibl.jpg" class="img-fluid" alt="Book Image">
                    </div>
                    <h2 class="card-title">Welcome to the Library Management System</h2>
                    <p class="card-text">Manage your library inventory efficiently with our user-friendly interface.</p>
                    <p class="card-text">Explore the various features to request, update, and return books, as well as track borrowing and returning activities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection