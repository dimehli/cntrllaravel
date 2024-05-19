@extends('layout')
@section('content')
<style>
    .btn {
    background-color: #f44336; /* Rouge */
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}

.btn-secondary {
    background-color: #008CBA; /* Bleu */
}
    </style>
<div class="card">
    <div class="card-header">
<div>
    <title>BOOKS REQUEST</title>

<body>
    <div class="container">
    <div class="card-body">
        <h1>BOOKS REQUEST</h1>
        <form id="bookRequestForm">
            <label for="fullName">Full Name :</label>
            <input type="text" id="fullName" name="fullName" required><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="bookTitle">Book Title :</label>
            <input type="text" id="bookTitle" name="bookTitle" required><br>

            <label for="author">Author :</label>
            <input type="text" id="author" name="author"><br>

            <label for="dueDate">Desired Borrowing Deadline :</label>
            <input type="date" id="dueDate" name="dueDate" required><br>

            <input type="submit" value="Submit">
        </form>

        
    </div>
    </div>
    <div id="bookRequests">
            <!-- Liste des demandes de livre -->
        </div>

        <div class="btn-group">
            <button class="btn" onclick="addNewRequest()">Add a New Request</button>
        </div>
    <script>
        function addNewRequest() {
            var fullName = document.getElementById('fullName').value;
            var email = document.getElementById('email').value;
            var bookTitle = document.getElementById('bookTitle').value;
            var author = document.getElementById('author').value;
            var dueDate = document.getElementById('dueDate').value;

            var request = {
                fullName: fullName,
                email: email,
                bookTitle: bookTitle,
                author: author,
                dueDate: dueDate
            };

            var requestElement = document.createElement('div');
            requestElement.className = 'book-request';
            requestElement.innerHTML = '<strong>Nom :</strong> ' + fullName + '<br>' +
                                       '<strong>Email :</strong> ' + email + '<br>' +
                                       '<strong>Titre :</strong> ' + bookTitle + '<br>' +
                                       '<strong>Auteur :</strong> ' + author + '<br>' +
                                       '<strong>Date Limite :</strong> ' + dueDate + '<br>' +
                                       '<button class="btn btn-danger" onclick="deleteRequest(this)">Supprimer</button>' +
                                       '<button class="btn btn-secondary" onclick="editRequest(this)">Modifier</button>' +
                                       '<button class="btn" onclick="viewRequest(this)">Voir</button>';

            document.getElementById('bookRequests').appendChild(requestElement);
        }

        function deleteRequest(element) {
            element.parentNode.remove();
        }

        function editRequest(element) {
    var requestElement = element.parentNode;
    var fullName = requestElement.querySelector('strong:nth-of-type(1)').nextSibling.textContent.trim();
    var email = requestElement.querySelector('strong:nth-of-type(2)').nextSibling.textContent.trim();
    var bookTitle = requestElement.querySelector('strong:nth-of-type(3)').nextSibling.textContent.trim();
    var author = requestElement.querySelector('strong:nth-of-type(4)').nextSibling.textContent.trim();
    var dueDate = requestElement.querySelector('strong:nth-of-type(5)').nextSibling.textContent.trim();

    document.getElementById('fullName').value = fullName;
    document.getElementById('email').value = email;
    document.getElementById('bookTitle').value = bookTitle;
    document.getElementById('author').value = author;
    document.getElementById('dueDate').value = dueDate;

    var submitButton = document.querySelector('#bookRequestForm input[type="submit"]');
    submitButton.value = "Mettre à jour";
    submitButton.onclick = function() {
        updateRequest(requestElement);
    };

}

function updateRequest(requestElement) {
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var bookTitle = document.getElementById('bookTitle').value;
    var author = document.getElementById('author').value;
    var dueDate = document.getElementById('dueDate').value;

    // Mettre à jour les informations de la demande
    requestElement.querySelector('strong:nth-of-type(1)').nextSibling.textContent = fullName;
    requestElement.querySelector('strong:nth-of-type(2)').nextSibling.textContent = email;
    requestElement.querySelector('strong:nth-of-type(3)').nextSibling.textContent = bookTitle;
    requestElement.querySelector('strong:nth-of-type(4)').nextSibling.textContent = author;
    requestElement.querySelector('strong:nth-of-type(5)').nextSibling.textContent = dueDate;

    // Réinitialiser le formulaire et le bouton "Soumettre"
    document.getElementById('bookRequestForm').reset();
    var submitButton = document.querySelector('#bookRequestForm input[type="submit"]');
    submitButton.value = "Soumettre";
    submitButton.onclick = function() {
        addNewRequest();
    };

    // Vous pouvez réafficher les autres boutons après la modification si nécessaire
}


        
    </script>
</body>
</div>
                </div>
    </div>
@endsection

