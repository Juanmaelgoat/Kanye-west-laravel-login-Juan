<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Sanchez - Kanye West</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #511410;
            color: #f0c12e;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #dca764;
            color: #511410;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        h1 {
            color: #97532a;
            flex-grow: 1;
            margin: 0 20px;
        }

        section {
            margin: 20px;
            text-align: justify;
        }

        h2 {
            color: #dca764;
            font-size: 24px;
            text-align: left;
        }

        p {
            line-height: 1.6;
            color: #dca764;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #97532a;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        li img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            margin-left: 20px;
        }

        footer {
            background-color: #dca764;
            color: #511410;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <img src="https://www.pngkey.com/png/full/14-149986_kanye-west-bear-png-graphic-royalty-free-download.png" alt="Imagen Izquierda">
        <h1>Bienvenido al Fan Club de Kanye West por Juanma Sanchez</h1>
        
        
        
        <img src="https://ongpng.com/wp-content/uploads/2023/01/10.kanye_west_1313x1600-1.png" alt="Imagen Derecha">
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </header>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
 
    <section>

        <h2>Sobre Kanye West</h2>
        <p>
            Kanye West es un influyente rapero, productor musical, diseñador de moda y empresario estadounidense nacido el 8 de junio de 1977 en Atlanta, Georgia. Conocido por su innovación en la música y su impacto en la cultura popular, Kanye ha lanzado varios álbumes exitosos y ha sido una figura influyente en la industria del entretenimiento.
        </p>
    </section>

    <section>
        <h2>Sobre Kanye West</h2>
        <p>
            Kanye West es un influyente rapero, productor musical, diseñador de moda y empresario estadounidense nacido el 8 de junio de 1977 en Atlanta, Georgia. Conocido por su innovación en la música y su impacto en la cultura popular, Kanye ha lanzado varios álbumes exitosos y ha sido una figura influyente en la industria del entretenimiento , e incluso tuvo una colaboracion con ADIDAS la cual condujo a la creación de la linea YEEZY de la misma
        </p>
    </section>

    <section>
        <h2>Discografía Completa ( Sin colaboraciones o albums colaborativos con otros artistas como Kids see ghost o watch the trone )</h2>
        <ul>
            <li>
                <h2>The College Dropout (2004)</h2>
                <img src="https://i.scdn.co/image/ab67616d0000b27325b055377757b3cdd6f26b78" alt="Album 1">
            </li>
            <li>
                <h2>Late Registration (2005)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/f/f4/Late_registration_cd_cover.jpg" alt="Album 2">
            </li>
            <li>
                <h2>Graduation (2007)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/7/70/Graduation_%28album%29.jpg" alt="Album 3">
            </li>
            <li>
                <h2>808s & Heartbreak (2008)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/808s_%26_Heartbreak.png/220px-808s_%26_Heartbreak.png" alt="Album 4">
            </li>
            <li>
                <h2>My Beautiful Dark Twisted Fantasy (2010)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/be/MBDTF_ALT.jpg/220px-MBDTF_ALT.jpg" alt="Album 5">
            </li>
            <li>
                <h2>Yeezus (2013)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Yeezus_album_cover.png" alt="Album 6">
            </li>
            <li>
                <h2>The Life of Pablo (2016)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4d/The_life_of_pablo_alternate.jpg/220px-The_life_of_pablo_alternate.jpg" alt="Album 7">
            </li>
            <li>
                <h2>Ye (2018)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/74/Ye_album_cover.jpg/220px-Ye_album_cover.jpg" alt="Album 8">
            </li>
            <li>
                <h2>Jesus is King (2019)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Kanye_West_-_Jesus_Is_King.png/220px-Kanye_West_-_Jesus_Is_King.png" alt="Album 9">
            </li>
            <li>
                <h2>Donda (2021)</h2>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Almost_black_square_020305.png/220px-Almost_black_square_020305.png" alt="Album 10">
            </li>
            <li>
                <h2>Futuramente vultures (202?)</h2>
                <img src="data:image/jpeg;base64,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" alt="Album 11">
            </li>
        </ul>
    </section>



</body>

</html>
