<?php

require_once __DIR__ .'/classi/movie.php';


$film1 = new Movie('film1', 'regista1', 'data1');
$film1->setSinossi('Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nihil officiis recusandae totam autem voluptatem deleniti enim dignissimos, odit vel quisquam excepturi sed dolorum eaque. Cupiditate laudantium eligendi facilis quod.');

$film2 = new Movie('film2', 'regista2', 'data2');
$film2->setSinossi('Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nihil officiis recusandae totam autem voluptatem deleniti enim dignissimos, odit vel quisquam excepturi sed dolorum eaque. Cupiditate laudantium eligendi facilis quod.');

echo "<h2>Info:</h2> ";
echo "<h3>{$film1->getTitolo()}</h3> ";
echo "<h3>{$film1->getRegista()}</h3> ";
echo "<h3>{$film1->getDataUscita()}</h3> ";
echo "<p>{$film1->getSinossi()} </p>";


echo "<h2>Info:</h2> ";
echo "<h3>{$film2->getTitolo()}</h3> ";
echo "<h3>{$film2->getRegista()}</h3> ";
echo "<h3>{$film2->getDataUscita()}</h3> ";
echo "<p>{$film2->getSinossi()} </p>";