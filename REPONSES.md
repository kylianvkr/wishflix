# Exercice 2 : Partie C

## Question 1
<?php echo e($game['title']); ?>

## Question 2
<?php $__empty_1 = true; $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

il s'agit de php

## Question 3
htmlspecialchars()

## Question 4
{{ $game['title'] }} : le titre du jeu change
{!! $game['title'] !!} : le titre du jeu  ne s'affiche plus et le navigateur affiche une alert XSS

## Question 5
après view:clear le dossier storage/framework/views laisse juste un .gitgnore
après reload de la page 3 fichiers sont créer le layout, la navbar, la page
Laravel compil à l'appel de vue de la route

## Question 6
trait
'[0-9]+'

## Question 7
where()

## Question 8
use Conditionable, CreatesRegularExpressionRouteConstraints, FiltersControllerMiddleware, Macroable, ResolvesRouteDependencies;
class Route

## Question 9
\$expression

## Question 10
[a-zA-Z]+ ex: NqdsjqnNSJDNQOnjk
[a-zA-Z0-9]+ ex: HS81Hjho15qhqsD0Qdq

uuid nombre de carachteres définis séparer par des -
in map

## Question 11
c'est une méthode plus claire et sur pour faire le regex en question

## Question 12
elle appelle abort() sur l'objet app()

## Question 13
404 : NotFoundHttpException
pas 404 : HttpException

## Question 14
