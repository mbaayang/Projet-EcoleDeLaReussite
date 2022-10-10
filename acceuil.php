<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole de la Reussite</title>
    <link rel="stylesheet" href="laReussite.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #2C22B8;">
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="images/logo.png" class="img-logo" alt="logo">
                <div class="space-between navbar-space-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="accueil.html"><i
                                    class="fa-solid fa-house"></i> ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php"><i class="fa-solid fa-user"></i> CONNEXION</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-book"></i>
                                ADMISSION
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admissionPrimaire.php">PRIMAIRE</a></li>
                                <li><a class="dropdown-item" href="admissionSecondaire.php">SECONDAIRE</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="col-8">
                <img name="slide">
            </div>
            <div class="col-4">
                <h3>À propos de nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ad corrupti fugit praesentium. Culpa, minima repudiandae quas mollitia autem doloribus similique
                    illum,
                    necessitatibus non asperiores rerum, temporibus suscipit dolores! Aliquam, aperiam.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro placeat quidem voluptates numquam eius ducimus suscipit nihil, ad optio maxime commodi,
                    adipisci amet? Ea sunt debitis dolore facilis dolorem officiis?
                </p>
            </div>
        </div>
    </main>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .col-4 {
            background-color: #05006B;
            border-radius: 5px;
            height: 400px;
            margin: 10px;
            margin-top: 40px;
        }
        .col-8 img {
            height: 400px;
            width: 650px;
            border-radius: 5px;
            margin: 10px;
            margin-top: 40px;
        }
        .col-4 h3,
        .col-4 p {
            text-align: center;
            color: #fff;
            padding: 5px;
        }
    </style>
    <footer>
        <div class="infos">
            <div class="contact">
                <h4>Contacts</h4>
                <p>Adresse: Mermoz Dakar Rue 0000</p>
                <p>Tel: 33 888 00 00</p>
                <p>Email: ecolelareussite@gmail.com</p>
            </div>
            <div class="reseaux">
                <img src="data:image/png;base64,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"
                    alt="">
                <img src="data:image/png;base64,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"
                    alt="">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAbFBMVEU8Wpn///8yU5UpTZOXpcXR1eQlS5Lb3urx8vjU2OY6WJjs7/aptM+gqskwUZX19/q1vteHlr1Wb6Zvg7Jqf7CWocOMmr7Kz+BFYZ3T1uV2hrOHk7uQncHo6vPDytweR5BhdagOQIx6i7VLZqAxseyuAAAEFklEQVR4nO3d21biMACF4TTVQlJNDxTKqBDHef93HJBBXSBDDyTdifu/8kZWv9XSlB5SkXyUl1WtRfjpuirzT5Y4/jFrMiNjAO6I0thmdiIsFjYO3TFtF8VXoTJy6kW6edKoT2Eb2Qo8pG17FCo79cI4yqqDsDAxrsF92hTvwkV838FjcrEXqmzq5XBYpnbCJtZtdJ9uEpHHups5ZHNRmqkXwmmmFFW8+5l9shJRHGxfTtcibqCI3scYY4wxxhj72WktrzX1Ig5OS5Omom6enqvlcvl4sZcgiTucbu62alMkVyumXtj+yUyvys112vFq59TL2zOdimp2nRWsUGf1tsOGGa4wq+978sISSr3t7wtJaFd9t8+whFq2g3zBCOU6v24JWSjrob5AhGOAQQj1etg+JhihTucjgCEI7dC9aChCuRoFxBdqcR0RtjAbdKgWkFCPGSiCEGYDfk0EJdSvY4HownTstxBdqM1oILhQLmMXpqP3M+BCvR4PxBbKp9iFZvyeFFyYdT+zHaZw3C/fIIS3+BpCC28xGmILzUPswmHjfXHSBvhBu35noObt6rUW++veJ03N+E9pD9/m2aTyoAlH2OeHRWmBt8WL9TgqDfSpQd10FgZ6o3334+5tOvWyDku+dRU+BXnLzP45na7CUB/nkS8dgQHeE3So82HpJtSn6uRdR+Es0B0NhT9J+Ct6oYpeGP86pBA2CinEj0IK8aOQQvwoDEwos7Ns1xtLt7/T8//+CIQvV7OzVNcHEIr783/+0npq3Hu3uRj6vT964QZjM3UoBDnH4VC4xThf7FAIMs+cQ+EjxoUph0KQmfQcCkEmtHQoXEcvBJk4152wwBgOHQo3IDPnuhPeR78OQQZ8h0KQAd+hcBW98C16IcghjTth8Sd24RxkV+pOiDLguxPC3GvjTNhGL3yI/nsIMx+dMyHM7cPOhK8gw6E7Icg5DHdCnBukXQlzmEdpXAlhBnxnQpgBf3+FVJ3Wdn3OuWjP/vdfsyXKYLEjpmf1ucp9KRzgd3W+UwHldFrvKKQQPwopxI9CCvGjkEL8KKQQPwopxI9CCvGjkEL8KKQQPwopxI9CCvGjkEL8KKQQPwopxI9CCvGjkEL8KKQQPwopxI9CCvGjkEL8KKQQPwopxI9CCvGjkEL8KKQQPwopxI/Cmwu9T5rlWaiF95df+xXqWnh/i4JfoayE96m//QpNKXJ7g8/pk1+hzYX3eaO9CnWTiER5nnTYqzBTO2Gy8Luv8SmUi2QvLPy+7sOjUJviXZgorzsbj0KrkoMwaa3HtehNqG2bHIWJMv6+i76E0qjkU5gUi8zXavQj1NmiSL4Kd6uxscbL3LXu39KppbGNOn6M+PzEvKx8HIbLl2LeqaFvx9N1VX55T+ZfbDJTsSTKozMAAAAASUVORK5CYII="
                    alt="">
                <span>@ecoledelareussite</span>
            </div>
        </div>
        <p class="end">Copyright Septembre 2022</p>
    </footer>

    <script src="laReussite.js"></script>
</body>

</html>