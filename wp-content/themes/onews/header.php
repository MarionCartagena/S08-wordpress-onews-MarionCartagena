<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>

    <?php
     /**
     * Action wp_head
     * Permet notamment l'inclusion de scripts JS ou CSS
     */
     wp_head(); 
     ?>
</head>

<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Contact</a></li>
          </ul>
        </nav>
      </header>
