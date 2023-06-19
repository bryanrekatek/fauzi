<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;
use App\Models\Book;
use App\Models\User;
class SaranaController extends Controller
{
    public function index()
    {
        $saranaPrasarana = SaranaPrasarana::all();
        return view('sarana.index', ['saranaPrasarana' => $saranaPrasarana]);
    }

    public function index_p()
    {
        $book = Book::all();
        return view('sarana.buku',compact('book'));
    }

    public function index_u()
    {
        $user = User::all();
        return view('sarana.pengguna',compact('user'));
    }
}
