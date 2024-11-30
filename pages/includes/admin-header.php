<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajrudin Ahmetovic - Admin</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css?22">
</head>
<body>
    <style>
        header a {
            color: white;
        }

        .dropdown-list{
            background-color: #3e344e;
        }
    </style>
    <header style="background-color: #3e344e; color: white;">
        <div class="logo-holder">
            <a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/images/sejh.jpg" alt=">Logo"></a>
        </div>
        <div class="header-div">
            <div class="main-title">Hajrudin Ahmetovic - Admin</div>
            <div class="main-nav">
                <div class="nav-item"><a href="<?=ROOT?>/admin">Dashboard</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/users">Korisnici</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/songs">Predavanja</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/artists">Predavac</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/categories">Serijali</a>
                </div>
                <div class="nav-item dropdown">
                            <a href="#">Hi, <?=user('username')?></a>
                            <div class="dropdown-list">
                                <div class="nav-item"><a href="<?=ROOT?>/profile">Profile</a></div>
                                <div class="nav-item"><a href="<?=ROOT?>">Website</a></div>
                                <div class="nav-item"><a href="<?=ROOT?>/logout">Logout</a></div>
                            </div>
				        </div>
            </div>

        </div>
    </header>

    </body>

<script src="<?=ROOT?>/assets/js/menu-popper.js"></script>
</html>

<?php if(message()):?>
    <div class="alert"><?=message('',true)?></div>
<?php endif;?>