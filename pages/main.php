<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facepunch</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/"><img src="img/img-rust.jpg" alt="Logo-Rust"></a>
            <div class="burger" onclick="toggleMenu()">☰</div>
            <nav class="navigation">
                <a href="/news">news</a>
                <a href="/OOP">OOP</a>
                <a href="">mobile</a>
                <a href="">merch</a>
                <a href="">official skins</a>
                <a href="">redeem</a>
                <div style="background-color: red; padding: 0 8px; height: 44px;">
                    <a href="">buy rust</a>
                </div>
                <div style="background-color: red; padding: 0 8px; height: 44px;">
                    <a href="/login">Login</a>
                </div>
            </nav>
        </div>
    </header>
    <section class="first-div">
        <div class="video-div">
            <video autoplay muted loop playsinline>
                <source src="video/rust.mp4" type="video/mp4">
            </video>
        </div>
        <div class="block-info">
            <div class="info">
                <h1>Explore Build Survive</h1>
                <p>The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.</p>
                <div class="button-info">
                    <a href="" style="background-color: red; padding: 10px 8px; height: 44px;">Buy rust</a>
                    <a href="https://www.youtube.com/watch?v=LGcECozNXEw" style="background-color: #2a2928; padding: 8px 8px; height: 44px; border: 2px solid #4c4946; margin-left: 10px;">Watch trailer</a>
                </div>
            </div>
        </div>
    </section>
    <div class="block">
        <div class="block-img" ><img src="img/bar-dark.svg" alt="bar"></div>
        <div class="block-text">
            <div class="text"><h2>"Rust is one of the cruelest games on Steam, and that's what makes it so compelling."</h2><h3>Pc gamer</h3></div>
        </div>
        <div class="block-img" style="margin-top: 400px; transform: rotate(180deg);"><img src="img/bar-dark.svg" alt="bar"></div>
    </div>
    <div class="last_news">
        <div class="news">
            <div class="s_header">
                <img src="img/img1.png" alt="" style="top: 10px; position: absolute;"> <h3 style="top: 13px; left: 50px; margin: 0;">Latest news</h3>
            </div>
            <div class="blog">

                <div class="img_style">
                    <img src="img/apr2025_easter_horsesuit_01.jpg" alt="apr2025_easter_horsesuit_01">
                </div>

                <div class="info-news">
                    <h3>Easter 2025</h3>
                    <div class="data-update">
                        <div class="data"><h2>... days ego</h2></div>
                        <div class="devblog" style="left: 100px; top: -56px;"><h2>devblog</h2></div>
                    </div>
                    <p>If you don't make the podium, that's okay. The painted eggs you collect can be upgraded to Bronze eggs once you collect 10. If you collect 10 bronze eggs then you can upgrade to a silver egg, eventually all the way to gold!
                        There are various items available to help you during your hunt. The Easter Basket will allow instant pickup of eggs and the Bunny Onesie and Ears will provide you with an advantage via Egg Vision.</p>
                    <div class="read-more">
                        <h2>Read more</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="twitch-drops">
        <div class="img-drops">
            <div class="q"><h1>Twitch Drops</h1></div>
            <div class="w"><h3 style="position: relative; top: -80px;">Twitch Drops from your favourite streamers. Be vigilent of scams. Facepunch will never contact you</h3></div>
            <div class="e"><a href="" style="position: relative; top: -70px;">Get Twitch Drops</a></div>
        </div>
    </section>
    <section class="mobile-app">
        <div class="mobile-app-text">
            <h1>rust+<span>companion</span></h1>
            <p>The official Rust companion app – stay connected to the game so you never miss an important moment again. Coordinate with your team, receive alerts when you’re being raided, remotely set off traps, and more!
            </p>
            <a href="">Lear more</a>
        </div>
        <div class="mobile-app-img">
            <img src="img/rustplusimage2.png" alt="rust+">
        </div>
    </section>
    <footer class="last-block">
        <div class="block-img"><img src="img/bar-dark.svg" alt="bar"></div>
        <div class="last-container">
            <div class="photo-div">
                <img src="img/rust-brand.svg" alt="rust-brand">
                <img src="img/facepunch-brand.svg" alt="Facepunch">
            </div>
            <nav class="container-div">
                <a href="">news</a>
                <a href="">companion</a>
                <a href="">mobile</a>
                <a href="">merch</a>
                <a href="">official skins</a>
                <a href="">redeem</a>
            </nav>
        </div>
        <div class="end">
            <h2 style="width: 100%;">© 2025 Facepunch Studios. All rights reserved.</h2>
            <a href=""><img src="img/YouTube.png" alt=""></a>
            <a href=""><img src="img/FaceBook.png" alt=""></a>
            <a href=""> <img src="img/insta.png" alt=""></a>
            <a href=""><img src="img/titok.png" alt=""></a>
            <a href=""><img src="img/twiter.png" alt=""></a>
        </div>
    </footer>
</body>
</html>