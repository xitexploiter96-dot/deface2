<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HACKED by CAPTAIN XIT EXPLOITER</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@400;500;600;700&family=Noto+Sans+Bengali:wght@400;600;700&display=swap" rel="stylesheet">

<style>

/* ===========================
   TEAM BLACK HORIZON
   BLACK / WHITE GLITCH THEME
=========================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    min-height:100vh;
    background:
        radial-gradient(circle at 50% 10%,rgba(255,255,255,.08),transparent 25%),
        radial-gradient(circle at 20% 80%,rgba(255,255,255,.025),transparent 25%),
        linear-gradient(160deg,#000 0%,#050505 40%,#0a0a0a 70%,#000 100%);

    color:#fff;
    font-family:'Rajdhani',sans-serif;
    overflow-x:hidden;
}


/* ===========================
   BACKGROUND GRID
=========================== */

body::before{
    content:"";
    position:fixed;
    inset:0;

    background-image:
        linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),
        linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);

    background-size:45px 45px;

    pointer-events:none;
    z-index:-4;
}


/* ===========================
   NOISE
=========================== */

body::after{
    content:"";
    position:fixed;
    inset:0;

    opacity:.04;

    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");

    pointer-events:none;
    z-index:-3;
}


/* ===========================
   SCANLINES
=========================== */

.scanlines{
    position:fixed;
    inset:0;

    pointer-events:none;

    background:
        repeating-linear-gradient(
            0deg,
            transparent,
            transparent 2px,
            rgba(255,255,255,.025) 3px,
            transparent 4px
        );

    z-index:999;
    opacity:.35;
}


/* ===========================
   MOVING LIGHT
=========================== */

.light{
    position:fixed;

    width:500px;
    height:500px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.08),
            transparent 65%
        );

    filter:blur(50px);

    top:-200px;
    left:50%;

    transform:translateX(-50%);

    animation:lightMove 7s ease-in-out infinite alternate;

    pointer-events:none;

    z-index:-2;
}

@keyframes lightMove{
    from{
        transform:translate(-50%,-30px);
    }

    to{
        transform:translate(-50%,130px);
    }
}


/* ===========================
   MAIN
=========================== */

.container{
    width:96%;
    max-width:1450px;

    margin:auto;

    padding:
        35px
        20px
        50px;

    text-align:center;
}


/* ===========================
   TOP LABEL
=========================== */



/* ===========================
   LOGO
=========================== */

.logo-wrapper{

    position:relative;

    width:210px;
    height:210px;

    margin:
        0 auto
        25px;

    display:flex;

    justify-content:center;
    align-items:center;
}


.logo-ring{

    position:absolute;

    inset:-12px;

    border:
        1px solid
        rgba(255,255,255,.25);

    border-radius:50%;

    border-top-color:white;
    border-bottom-color:#555;

    animation:
        spin
        9s
        linear
        infinite;
}


.logo-ring2{

    position:absolute;

    inset:-22px;

    border:
        1px dashed
        rgba(255,255,255,.15);

    border-radius:50%;

    animation:
        spinReverse
        16s
        linear
        infinite;
}


.logo{

    width:190px;
    height:190px;

    object-fit:cover;

    border-radius:50%;

    border:
        2px solid
        rgba(255,255,255,.8);

    filter:
        grayscale(100%)
        contrast(1.1);

    box-shadow:
        0 0 0 6px rgba(255,255,255,.025),
        0 0 30px rgba(255,255,255,.12),
        0 25px 70px #000;

    transition:.5s;
}


.logo:hover{

    filter:
        grayscale(0%)
        contrast(1.05);

    transform:scale(1.025);

    box-shadow:
        0 0 45px rgba(255,255,255,.22);
}


@keyframes spin{

    to{
        transform:rotate(360deg);
    }

}


@keyframes spinReverse{

    to{
        transform:rotate(-360deg);
    }

}


/* ===========================
   GLITCH TITLE
=========================== */

.glitch{

    position:relative;

    display:inline-block;

    font-family:'Orbitron',sans-serif;

    font-size:
        clamp(
            2rem,
            6vw,
            5rem
        );

    font-weight:900;

    letter-spacing:
        clamp(
            2px,
            .8vw,
            10px
        );

    color:#fff;

    text-transform:uppercase;

    text-shadow:
        0 0 5px #fff,
        0 0 16px rgba(255,255,255,.15);
}


.glitch::before,
.glitch::after{

    content:attr(data-text);

    position:absolute;

    left:0;
    top:0;

    width:100%;

    overflow:hidden;

    background:#030303;

}


.glitch::before{

    left:3px;

    text-shadow:
        -3px 0 #fff;

    clip-path:
        inset(
            0
            0
            60%
            0
        );

    animation:
        glitch1
        2.5s
        infinite
        linear
        alternate-reverse;

}


.glitch::after{

    left:-3px;

    color:#aaa;

    text-shadow:
        3px 0 #333;

    clip-path:
        inset(
            55%
            0
            0
            0
        );

    animation:
        glitch2
        1.9s
        infinite
        linear
        alternate-reverse;

}


@keyframes glitch1{

    0%{
        clip-path:inset(12% 0 74% 0);
        transform:translate(0);
    }

    10%{
        clip-path:inset(68% 0 9% 0);
        transform:translate(-3px,2px);
    }

    20%{
        clip-path:inset(42% 0 40% 0);
        transform:translate(3px,-1px);
    }

    30%{
        clip-path:inset(4% 0 82% 0);
        transform:translate(0);
    }

    40%{
        clip-path:inset(74% 0 12% 0);
        transform:translate(-2px,1px);
    }

    50%,
    100%{
        clip-path:inset(0 0 100% 0);
    }

}


@keyframes glitch2{

    0%{
        clip-path:inset(78% 0 5% 0);
    }

    15%{
        clip-path:inset(18% 0 65% 0);
        transform:translate(3px);
    }

    30%{
        clip-path:inset(52% 0 30% 0);
        transform:translate(-3px);
    }

    45%{
        clip-path:inset(90% 0 2% 0);
    }

    55%,
    100%{
        clip-path:inset(100% 0 0 0);
    }

}


/* ===========================
   SUBTITLE
=========================== */

.subtitle{

    font-family:'Orbitron';

    font-size:
        clamp(
            .72rem,
            1.6vw,
            1rem
        );

    letter-spacing:5px;

    text-transform:uppercase;

    margin-top:13px;

    color:#9b9b9b;

}


.subtitle span{
    color:white;
}


/* ===========================
   DIVIDER
=========================== */

.divider{

    width:min(850px,90%);

    height:1px;

    margin:
        35px auto;

    background:
        linear-gradient(
            90deg,
            transparent,
            #444,
            white,
            #444,
            transparent
        );

    position:relative;

}


.divider::after{

    content:"◆";

    position:absolute;

    left:50%;

    top:50%;

    transform:
        translate(
            -50%,
            -50%
        );

    background:#030303;

    padding:0 15px;

    color:#fff;

    font-size:12px;

}


/* ===========================
   STATUS BAR
=========================== */

.status-bar{

    max-width:800px;

    margin:
        0 auto
        30px;

    display:flex;

    justify-content:center;

    align-items:center;

    gap:18px;

    flex-wrap:wrap;

}


.status{

    padding:
        8px
        18px;

    border:
        1px solid
        #292929;

    background:
        rgba(255,255,255,.025);

    border-radius:100px;

    font-family:'Orbitron';

    font-size:.68rem;

    letter-spacing:2px;

    color:#aaa;

}


.status strong{

    color:white;

}


/* ===========================
   VIDEO
=========================== */

.video-container{

    position:relative;

    width:min(900px,94%);

    margin:
        30px auto;

    padding:5px;

    background:
        linear-gradient(
            135deg,
            #fff,
            #222,
            #777,
            #111
        );

    border-radius:5px;

}


.video-inner{

    position:relative;

    width:100%;

    padding-top:56.25%;

    background:#000;

    overflow:hidden;

}


.video-inner iframe{

    position:absolute;

    inset:0;

    width:100%;
    height:100%;

    border:0;

}


/* ===========================
   CONTENT CARD
=========================== */

.content-card{

    position:relative;

    width:100%;

    margin:18px 0;

    padding:
        26px
        30px;

    text-align:left;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.05),
            rgba(255,255,255,.012)
        );

    border:
        1px solid
        rgba(255,255,255,.11);

    border-left:
        3px solid
        white;

    color:#ddd;

    line-height:1.85;

    font-size:
        clamp(
            1rem,
            1.5vw,
            1.18rem
        );

    font-weight:600;

    box-shadow:
        inset
        0
        0
        40px
        rgba(255,255,255,.01),
        0
        12px
        45px
        rgba(0,0,0,.45);

    transition:.3s;

}


.content-card:hover{

    border-color:
        rgba(255,255,255,.3);

    background:
        rgba(255,255,255,.055);

    transform:
        translateY(-2px);

}


.content-card::before{

    content:"";

    display:block;

    font-family:'Orbitron';

    font-size:.59rem;

    letter-spacing:4px;

    color:#707070;

    margin-bottom:12px;

}


.bangla{

    font-family:
        'Noto Sans Bengali',
        sans-serif;

}


/* ===========================
   TEAM SECTION
=========================== */

.section-title{

    font-family:'Orbitron';

    font-size:
        clamp(
            1.25rem,
            2vw,
            2rem
        );

    text-transform:uppercase;

    letter-spacing:6px;

    margin-top:45px;

    margin-bottom:8px;

}


.section-small{

    font-family:'Orbitron';

    font-size:.65rem;

    letter-spacing:4px;

    color:#666;

    text-transform:uppercase;

    margin-bottom:25px;

}


.team-grid{

    display:grid;

    grid-template-columns:
        repeat(
            auto-fit,
            minmax(
                190px,
                1fr
            )
        );

    gap:12px;

    max-width:1150px;

    margin:auto;

}


.member{

    position:relative;

    min-height:110px;

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

    padding:20px;

    background:
        linear-gradient(
            145deg,
            #0c0c0c,
            #030303
        );

    border:
        1px solid
        #222;

    overflow:hidden;

    transition:.35s;

}


.member::before{

    content:"";

    position:absolute;

    width:80px;

    height:1px;

    background:#fff;

    top:0;
    left:-100px;

    box-shadow:
        0
        0
        12px
        white;

    animation:
        memberLine
        5s
        infinite;

}


@keyframes memberLine{

    0%{
        left:-100px;
    }

    40%,
    100%{
        left:110%;
    }

}


.member:hover{

    border-color:#777;

    transform:
        translateY(-5px);

    box-shadow:
        0
        15px
        35px
        rgba(0,0,0,.8);

}


.member-number{

    font-family:'Orbitron';

    font-size:.55rem;

    color:#555;

    letter-spacing:2px;

    margin-bottom:10px;

}


.member-name{

    font-family:'Orbitron';

    font-weight:700;

    font-size:
        clamp(
            .78rem,
            1.2vw,
            .98rem
        );

    letter-spacing:1px;

    text-transform:uppercase;

    color:#fff;

}


/* ===========================
   TEAM SIGNATURE
=========================== */

.signature{

    max-width:850px;

    margin:
        40px auto
        10px;

    padding:
        22px;

    border-top:
        1px solid
        #333;

    border-bottom:
        1px solid
        #333;

    font-family:'Orbitron';

    text-transform:uppercase;

    letter-spacing:
        clamp(
            2px,
            1vw,
            8px
        );

    color:#ccc;

}


/* ===========================
   HASHTAGS
=========================== */

.hashtags{

    max-width:900px;

    margin:
        25px auto;

    font-family:'Orbitron';

    font-size:.63rem;

    letter-spacing:1.5px;

    line-height:2;

    color:#696969;

}


/* ===========================
   CONTROLS
=========================== */

.controls{

    display:flex;

    align-items:center;

    justify-content:center;

    gap:12px;

    flex-wrap:wrap;

    margin-top:30px;

}


.btn{

    min-width:180px;

    padding:
        14px
        26px;

    border:
        1px solid
        white;

    background:white;

    color:#000;

    text-decoration:none;

    font-family:'Orbitron';

    font-size:.68rem;

    font-weight:800;

    letter-spacing:2px;

    text-transform:uppercase;

    transition:.3s;

}
 /* ===========================
    TOP FLAG
 =========================== */

 .top-flag{
     display:flex;
     justify-content:center;
     align-items:center;
     margin:0 auto 30px;
 }

 .top-flag img{
     width:300px;
     height:auto;
     display:block;
     object-fit:contain;
 }

.btn:hover{

    background:#000;

    color:white;

    box-shadow:
        0
        0
        20px
        rgba(255,255,255,.2);

}


.music-control{

    display:flex;

    align-items:center;

    gap:7px;

    padding:
        7px
        12px;

    border:
        1px solid
        #333;

    background:#050505;

}


.music-btn{

    width:38px;
    height:38px;

    border:
        1px solid
        #444;

    background:#000;

    color:#fff;

    cursor:pointer;

    transition:.25s;

}


.music-btn:hover{

    border-color:#fff;

}


.volume-slider{

    width:90px;

    accent-color:white;

}


/* ===========================
   TERMINAL
=========================== */

.terminal{

    width:min(850px,95%);

    margin:
        35px auto
        5px;

    background:#020202;

    border:
        1px solid
        #1c1c1c;

    text-align:left;

    box-shadow:
        0
        30px
        80px
        rgba(0,0,0,.7);

}


.terminal-head{

    padding:
        8px
        14px;

    border-bottom:
        1px solid
        #222;

    color:#777;

    font-family:'Orbitron';

    font-size:.56rem;

    letter-spacing:2px;

}


.terminal-body{

    padding:
        16px
        18px;

    font-family:
        monospace;

    font-size:.82rem;

    line-height:1.8;

    color:#aaa;

}


.terminal-body strong{

    color:#fff;

}


.cursor{

    display:inline-block;

    width:8px;
    height:15px;

    background:#fff;

    vertical-align:middle;

    animation:
        blink
        .8s
        infinite;

}


@keyframes blink{

    50%{
        opacity:0;
    }

}


/* ===========================
   FOOTER
=========================== */

footer{

    margin-top:40px;

    padding-top:25px;

    border-top:
        1px solid
        #151515;

    font-family:'Orbitron';

    font-size:.58rem;

    letter-spacing:2px;

    color:#555;

}


/* ===========================
   RESPONSIVE
=========================== */

@media(max-width:768px){

    .container{
        width:100%;
        padding:
            25px
            12px
            35px;
    }


    .logo-wrapper{
        width:160px;
        height:160px;
    }


    .logo{
        width:145px;
        height:145px;
    }


    .glitch{
        font-size:2rem;
    }


    .subtitle{
        letter-spacing:2px;
    }


    .content-card{
        padding:
            20px
            18px;

        line-height:1.7;
    }


    .video-container{
        width:100%;
    }


    .team-grid{

        grid-template-columns:
            repeat(
                2,
                1fr
            );

    }


    .member{
        min-height:90px;
        padding:12px;
    }


    .controls{
        flex-direction:column;
    }


    .music-control{
        width:100%;
        max-width:280px;
        justify-content:center;
    }

}


@media(max-width:420px){

    .team-grid{
        grid-template-columns:1fr;
    }

}

</style>
</head>

<body>

<div class="scanlines"></div>
<div class="light"></div>


<div class="container">


    <!-- TOP -->
<div class="top-flag">
    <img src="https://e.top4top.io/p_31711xnxh1.png" alt="Flag">
</div>


    <!-- LOGO -->

    <div class="logo-wrapper">

        <div class="logo-ring"></div>
        <div class="logo-ring2"></div>

        <img
            class="logo"
            src="https://h.top4top.io/p_396488g5v0.jpg"
            alt="TEAM BLACK HORIZON Logo"
        >

    </div>


    <!-- TITLE -->

    <h1
        class="glitch"
        data-text="TEAM BLACK HORIZON"
    >
       HACKED by TEAM BLACK HORIZON
    </h1>


    <div class="subtitle">

        <span></span>
        THIS WEBSITE HAS BEEN HACKED BY
        <span></span>
        TEAM BLACK H0RIZON
        <span></span>

    </div>


    <div class="divider"></div>


    <!-- STATUS -->

    <div class="status-bar">

        <div class="status">
            STATUS:
            <strong>ONLINE</strong>
        </div>

        <div class="status">
            SYSTEM:
            <strong>TBH</strong>
        </div>

        <div class="status">
            MODE:
            <strong>lol:)</strong>
        </div>

    </div>





    <div
        class="content-card bangla"
        lang="bn"
    >


    </div>


    <div class="content-card">

  This is a TEAM BLACK HORIZON Bangladesh Gray hat team we seized your server for your goverment killing Innocent muslims and some Script Kiddies Attacking on BD like they exploit SQLi , xss and they think they are black hat homkars. sorry to say go  server admin go and buy some your mom (cow) shits and eat dont build a website using Vibe coding lol : )

    </div>


    <div class="content-card">

      OFFCIAL NOTICE FROM TEAM BLACK HORIZON BNAGLADESH GRAY HATS
    </div>


    <div class="content-card">

        #FUCK INDIA #FUCK RENDIANS #FUCK MODI

    </div>



    <!-- TEAM -->

    <div class="section-title">
        CRDZ 
    </div>


    <div class="section-small">
       OPERATORS 
    </div>


    <div class="team-grid">


        <div class="member">

            <div class="member-number">
                OPERATOR 01
            </div>

            <div class="member-name">
                Xit Exploiter
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 02
            </div>

            <div class="member-name">
                Ov3rr13dmast3r
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 03
            </div>

            <div class="member-name">
                Arcena
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 04
            </div>

            <div class="member-name">
                Kevin Root
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 05
            </div>

            <div class="member-name">
                Void Shinobi
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 06
            </div>

            <div class="member-name">
                Rootless
            </div>

        </div>



        <div class="member">

            <div class="member-number">
                OPERATOR 07
            </div>

            <div class="member-name">
             GEORGE HENRY
            </div>

        </div>


    </div>



    <!-- SIGNATURE -->

    <div class="signature">

        TEAM BLACK HORIZON
        //
        WE EXIST BEYOND THE HORIZON

    </div>



    <!-- TERMINAL -->

    <div class="terminal">


        <div class="terminal-head">

            TBH TERMINAL
            //
            BLACK-HORIZON

        </div>


        <div class="terminal-body">

            <div>
                root@black-horizon:~$
                <strong>
                    whoami
                </strong>
            </div>

            <div>
                TEAM BLACK HORIZON
            </div>


            <br>


            <div>
                root@black-horizon:~$
                <strong>
                    members --list
                </strong>
            </div>

            <div>
                Xit Exploiter
                |
                Ov3rr13dmast3r
                |
                Arcena
                |
                Kevin Root
                |
                Void Shinobi
                |
                Rootless
                |
                GEORGE HENRY
            </div>


            <br>


            <div>
                root@black-horizon:~$
                <strong>
                    status
                </strong>
            </div>

            <div>
                SYSTEM ONLINE
                <span class="cursor"></span>
            </div>

        </div>


    </div>



    <!-- HASHTAGS -->

    <div class="hashtags">
n

    </div>



    <!-- CONTROLS -->

    <div class="controls">


        <a
            href="https://t.me/+Fxw8o6WuYNxiY2Y1"
            class="btn"
            target="_blank"
        >
            JOIN TELEGRAM
        </a>



        <div class="music-control">


            <button
                class="music-btn"
                id="playPauseBtn"
            >
                ⏸
            </button>


            <button
                class="music-btn"
                id="muteBtn"
            >
                🔊
            </button>


            <input
                type="range"
                class="volume-slider"
                id="volumeSlider"
                min="0"
                max="1"
                step="0.01"
                value="0.5"
            >


        </div>


    </div>



    <footer>

        © TEAM BLACK HORIZON
        //
        ALL RIGHTS RESERVED
        //
        BLACK × WHITE CYBER INTERFACE

    </footer>


</div>



<!-- MUSIC -->

<audio
    autoplay
    loop
    id="bgMusic"
>

    <source
        src=""
        type="audio/mpeg"
    >

</audio>



<script>

/* ===========================
   MUSIC
=========================== */

const bgMusic =
    document.getElementById("bgMusic");

const playPauseBtn =
    document.getElementById("playPauseBtn");

const muteBtn =
    document.getElementById("muteBtn");

const volumeSlider =
    document.getElementById("volumeSlider");


bgMusic.volume = 0.5;


playPauseBtn.addEventListener(
    "click",
    () => {

        if(bgMusic.paused){

            bgMusic.play();

            playPauseBtn.textContent =
                "⏸";

        }else{

            bgMusic.pause();

            playPauseBtn.textContent =
                "▶";

        }

    }
);


muteBtn.addEventListener(
    "click",
    () => {

        bgMusic.muted =
            !bgMusic.muted;

        muteBtn.textContent =
            bgMusic.muted
            ? "🔇"
            : "🔊";

    }
);


volumeSlider.addEventListener(
    "input",
    () => {

        bgMusic.volume =
            volumeSlider.value;

        muteBtn.textContent =
            bgMusic.volume == 0
            ? "🔇"
            : "🔊";

    }
);



/* ===========================
   AUTOPLAY FALLBACK
=========================== */

document.addEventListener(
    "click",
    () => {

        if(bgMusic.paused){

            bgMusic
                .play()
                .catch(()=>{});

        }

    },
    {
        once:true
    }
);



/* ===========================
   RANDOM GLITCH
=========================== */

const title =
    document.querySelector(".glitch");


setInterval(
    () => {

        title.style.transform =
            `translateX(${Math.random() > .5 ? 1 : -1}px)`;


        setTimeout(
            () => {

                title.style.transform =
                    "translateX(0)";

            },
            80
        );

    },
    2800
);



/* ===========================
   CUSTOM CONTEXT MENU MESSAGE
=========================== */

document.addEventListener(
    "contextmenu",
    (e) => {

        e.preventDefault();

        alert(
            "TEAM BLACK HORIZON // SYSTEM INTERFACE"
        );

    }
);

</script>

</body>
</html>
