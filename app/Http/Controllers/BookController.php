<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Récupérer la liste des livres depuis la base de données
        $books = Book::all();

        // Passer les livres à la vue books.index
        return view('books.index', ['books' => $books]);
    }
}
