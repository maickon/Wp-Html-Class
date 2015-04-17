# Wp-Html-Class
Uma simples classe PHP para se trabalhar com códigos PHP ao invés de HTML em seus projetos.
Após instalado, basta utilizar o objeto $wp_tag para manipular os elementos HTML.
Ex:
```php
<?php
	$wp_tag->div('class="x" id="y"'); //Abre uma tag DIV com classe e id 
	$wp_tag->div; // fecha a tag DIV

	$wp_tag->hr(); //criar uma linha

	$wp_tag->img('src="img/image.png"'); //cria uma imagem

	$wp_tag->h1();
		$wp_tag->wp_print('Hello World'); //inprime uma string

		//wp_print() aceita um segundo parametro que por padrão é null
		//ele pode ser "decode" ou "encode"
		$wp_tag->wp_print('Hello World','decode'); 
	$wp_tag->h1;
?>
```
A idéia principal é tornar o código mais claro, sem precisar estar misturando elementos HTML com PHP. 
____________________________________________________________________________________________________
A simple PHP class to work with PHP code instead of HTML in your projects.
Once installed, simply use the object $ wp_tag to manipulate HTML elements.
ex:
```php
<?php
	$wp_tag->div('class="x" id="y"'); //Opens a DIV tag with class and id
	$wp_tag->div; //closes the DIV tag

	$wp_tag->hr(); //create a line

	$wp_tag->img('src="img/image.png"'); //create a image

	$wp_tag->h1();
		$wp_tag->wp_print('Hello World'); //print a string

		//print_wp () accepts a second parameter that by default is null
		//it can be "decode" or "encode"
		$wp_tag->wp_print('Hello World','decode'); 
	$wp_tag->h1;
?>
```
The main idea is to make the code clearer, without being mixing HTML elements with PHP.
