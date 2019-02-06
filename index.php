<?php

  /*  Глобальные переменные и настройки сайта  */
  include('options.php');
  
  include('header.php');
  include('navbar.php');

  
  /*  
  Все страницы должны быть по шаблону
  <main>
  
    <section class="navleft">
     <h2>Разделы:</h2>
      <ul>
        <li><a href="#">пункты меню</a></li>
        ...
        ...
      </ul>
    </section>
    
    <section class="content">
    	<article>
			  <div class="article-title">
				  <span>Добро пожаловать</span>
			  </div>
			  <p>..........</p>
		  </article>
    </section>

  </main>
  */


$mylink='';
if($_GET["content"]==="aducation" ||
   $_GET["content"]==="experience" ||
   $_GET["content"]==="interests" ||
   $_GET["content"]==="photos" ||
   $_GET["content"]==="skills" ) { $mylink = $_GET["content"] . ".php"; }
else { $mylink = 'main.php'; }

include( $mylink );

include('footer.php');
