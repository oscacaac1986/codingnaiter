<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index()
    {
        $libro= new Libro();
        $datos['libros']=$libro->orderBy('id','ASC')->findAll();

        $datos['header'] = view('templates/header.php');
        $datos['footer'] = view('templates/footer.php');
        return view('libros/listar', $datos);
    }

}