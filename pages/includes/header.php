<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajrudin Ahmetovic - <?=ucfirst($URL[0])?></title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
</head>
<body>

    <header>
        <div class="logo-holder">
            <a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/images/sejh.jpg" alt=">Logo"></a>
        </div>
        <div class="header-div">
            <div class="main-title">Hajrudin Ahmetovic</div>
            <div class="main-nav">
                <div class="nav-item"><a href="<?=ROOT?>">Pocetna</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/predavanja">Opsta Predavanja</a></div>
                <div class="nav-item dropdown"><a href="#">Serijali Predavanja</a>
                    <div  class="dropdown-list">
                        <div class="nav-item"><a href="Country">nt</a></div>
                        <div class="nav-item"><a href="pop">pop</a></div>
                        <div class="nav-item"><a href="r&b">r&b</a></div>
                    </div>
                </div>
                <div class="nav-item"><a href="<?=ROOT?>">Komentari Knjiga</a></div>
                <?php if(logged_in()):?>
                <div class="nav-item dropdown"><a href="#">Hi, <?=user('username')?></a>
                    <div  class="dropdown-list">
                        <div class="nav-item"><a href="<?=ROOT?>/profile">Profil</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>/admin">Admin</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>/logout">Logout</a></div>
                    </div>
                </div>
                <?php endif;?>
            </div>

        </div>
    </header>