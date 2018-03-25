<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recette</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" src="assets/css/bulma.css">
    <link rel="stylesheet" src="assets/css/fontawesome.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" src="assets/css/style.css">

  </head>
  <body>
    <header>
        <nav class="navbar is-fixed-top" role="navigation" aria-label="Main Navigation">
            <div class="navbar-brand">
                    <a href="" class="nav-item"><img href="https://www.google.fr/search?q=arte+negra&client=ubuntu&hs=lWy&channel=fs&dcr=0&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjJtOna7-3YAhWM7BQKHZEIAxIQ_AUICigB&biw=1295&bih=668#imgrc=KLkm7ZaMsZUoTM:"></img></a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="" class="nav-item"> Home </a>
                    <a href="" class="nav-item"> List </a>
                    <a href="" class="nav-item"> Manage </a>
                </div>
                <div class="navbar-end">
                    <a href="" class="nav-item"> Admin </a>
                </div>
            </div>
        </nav>  
        
    </header>
    <section class="hero is-primary">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  <?= $pageTitle ?>
                </h1>
                <h2 class="subtitle">
                  Bon appetit !!!
                </h2>
              </div>
            </div>
    </section>
    <main class="mainContent">
        <section class="hero is-light">
                <div class="container  has-text-centered">
                    <h2 class="subtitle">
                        Trouver une recette
                    </h2>
                </div>
                <div class="field has-addons has-addons-centered">
                    <div class="control ">
                        <input class="input" type="text" placeholder="cherche ta recette">
                    </div>
                    <div class="control">
                        <button class="button fa fa-search is medium"
                    </div>
                </div>
        </section>