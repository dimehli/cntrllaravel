<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projet</title>
</head>
<style>
input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 

/* Style pour la carte contenant le formulaire */
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 90%;
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    position: absolute;
    float: left;
    margin-top: 40px;
  }
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #F5F5DC; /* Utiliser la notation hexadécimale pour le brun */
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
    display: block;
    color: brown;
    padding: 16px;
    text-decoration: none;
    font-weight: bold; /* Texte en gras */
    background-color: #f9f9f9; /* Couleur de fond du bouton */
    border: 1px solid brown; /* Bordure du bouton */
    border-radius: 4px; /* Coins arrondis du bouton */
    margin-bottom: 60px;
    transition: background-color 0.3s, color 0.3s; /* Animation de transition */
}

.sidebar a:hover {
    background-color: brown; /* Couleur de fond du bouton au survol */
    color: white; /* Couleur du texte au survol */
}



.sidebar a.active {
  background-color: black;
  color: white;
}


.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}



div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}




@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


body{
  text-align: center;

}
.card-body{
  background-color: #F5F5DC;
}
</style>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg " style="background-color:  #F5F5DC; color: white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="text-align: center; width: 100%;">
      <h2 style="margin: 0; color: brown;">Library Management System</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

            </div>
        </div>
        <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <a href="{{url('home.home')}}">Home</a>
                <a href="{{ route ('etudiant.index')}} ">Student</a>
                <a href="{{ route ('teachers.index')}} ">Teachers</a>
                <a href="{{ route ('books.index')}}">Books request</a>
                <a href="{{ route ('payment.index')}}">Payment</a>
              </div>
        </div>
        <div class="col-md-9">
           
            @yield('content')
           
        </div>

        </div>
    </div>

    
</body>
</html>