<?php

// Clase: modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil{

    // Propiedades: caracteristicas que pueden tener un objeto.
    public $marca;
    public $modelo;

    // Metodo: algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer.
    // Los metodos son igual que funciones pero de una clase en especifico.
    public function mostrar(){

        echo "<p>Hola! Soy un $this->marca, modelo $this->modelo</p>";
    }

}

#Objeto: entidad provista de moetodos o mensajes a los cuales responde propiedades con valores concretos

$auto = new Automovil();
$auto-> marca = "Toyota";
$auto-> modelo = "Corolla";
$auto-> mostrar();

$auto2 = new Automovil();
$auto2-> marca = "Kia";
$auto2-> modelo = "Forte GT";
$auto2-> mostrar();


// Principios de la POO que se cumplen en este ejemplo:
// ABSTRACCION: Nuevos tipos de datos.
// Encapsulación: Organizar el codigo en grupos logicos.
// Ocultamiento Ocultar detalles de implementacion y exponer solo los detalles que sean necesarios para el resto del sistema.


?>