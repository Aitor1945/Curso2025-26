<?php
require_once 'Libro.php';
require_once 'Biblioteca.php';
$biblioteca = new Biblioteca("Biblioteca Central");

$libs = [

$libro1 = new Libro("Don Quijote", "Cervantes"),
$libro2 = new Libro("Cien Años de Soledad", "Gabriel García Márquez"),
$libro3 = new Libro("El Libro Troll", "El Rubius"),
$libro4 = new Libro("La Sombra del Viento", "Carlos Ruiz Zafón"),
$libro5 = new Libro("1984", "George Orwell"),
$libro6 = new Libro("Crónica de una Muerte Anunciada", "Gabriel García Márquez"),
$libro7 = new Libro("Rayuela", "Julio Cortázar"),
$libro8 = new Libro("El Principito", "Antoine de Saint-Exupéry"),
$libro9 = new Libro("Ficciones", "Jorge Luis Borges"),
$libro10 = new Libro("El Alquimista", "Paulo Coelho"),
$libro11 = new Libro("La Casa de los Espíritus", "Isabel Allende"),
$libro12 = new Libro("El Nombre de la Rosa", "Umberto Eco"),
$libro13 = new Libro("Donde los Árboles Cantan", "Laura Gallego"),
$libro14 = new Libro("La Ciudad y los Perros", "Mario Vargas Llosa"),
$libro15 = new Libro("El Viejo y el Mar", "Ernest Hemingway"),
$libro16 = new Libro("Ensayo sobre la Ceguera", "José Saramago"),
$libro17 = new Libro("El Hobbit", "J.R.R. Tolkien"),
$libro18 = new Libro("Los Detectives Salvajes", "Roberto Bolaño"),
$libro19 = new Libro("Pedro Páramo", "Juan Rulfo"),
$libro20 = new Libro("Cumbres Borrascosas", "Emily Brontë"),

];


for ($i=0; $i < count($libs); $i++ ){

 $biblioteca->agregarLibro($libs[$i]);

}

$biblioteca->prestarLibro($libro10);
$biblioteca->mostrarLibrosDisponibles();


?>