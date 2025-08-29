<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="index.js"></script>
    <script src="https://unpkg.com/webamp@1.4.0/built/webamp.bundle.min.js"></script>
    <link rel="stylesheet" href="https://epiccity.nekoweb.org/ring//onionring - small.css">
    <title>lexm</title>
</head>
<body>
    <script>NekoType="black"</script>
    <h1 id=nl><script src="https://webneko.net/n20171213.js"></script><a href="https://webneko.net">Neko</a></h1>

    <!-- (c) Layout created by fini hoover :3 (https://layouts.spacehey.com/layout?id=30834) -->

    <div class="snowflakes">
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_mrgreen.gif" alt="icon_mrgreen">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_eek.gif" alt="icon_eek">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_redface.gif" alt="icon_redface">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_rolleyes.gif" alt="icon_rolleyes">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_wink.gif" alt="icon_wink">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_razz.gif" alt="icon_razz">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_lol.gif" alt="icon_lol">
        </div>
        <div class="snowflake">
            <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/smilies/phpBB2/icon_cry.gif" alt="icon_cry">
        </div>
    </div>


    <div class="container">
        <div class="main-content">
            <header>
                <!-- <h1>lexm</h1> -->
                <br>
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/images/lexm_wide.png" alt="lexm" width="84" height="36">
                <p style = "font-size: 24px;">朱晓瑞</p>
                <p style="font-family: var(--main-font);">Kirito139 ·
                roguewielder</p>
                <p style="font-family: var(--main-font);">San Francisco, CA</p>
                <a href="mailto:webmaster@lexm.leprd.space" style="align-self: center; text-decoration: none; color: inherit;">
                    <img alt="webmaster[at]lexm[dot]leprd[dot]space" src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/mail.png">
                </a>
                <a href="https://spacehey.com/profile?id=3603438" style="align-self: center; text-decoration: none; color: inherit;">
                    <img alt="SpaceHey" src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/spachey.png">
                </a>
                <a rel="me" href="https://mastodon.social/@lexm">Mastodon</a>
            </header>
            <main>
                <p style="text-align: center;">
                Geek Code v3.12:<br>
                GU d- s:- a?(---) C++ U+>++++ P L>+ E--- W+++ N o? K w--- O? M++ V? PS++ PE- Y+ PGP?
                t 5 X?>+ R>+ tv+ b+>+++ DI(+) D+ G e- h! !r y
                </p>
                <hr>
                <p>
                Welcome to my little corner of the internet. Enjoy your stay! (this site is always under construction)
                </p>

                <p>
                Quick facts: <br> 
                - Affiliations: Hack Club, Flight Club Aerospace. <br>
                - Sports: cross country and distance track. <br>
                - Languages I know: <span style="color: #FFFFFF;">English</span>,
                <span style="color: #FFDD6C;">Py</span><span style="color: #2B5B84;">thon</span>,
                <span style="font-family: 'Zpix'; font-size: 12px; color: #FFFF00; background-color: #EE1C25;">中文</span>,
                <span style="color: #ED8B00;">Java</span>,
                <span style="color: #4a525a;">Markdown</span>. Also learning 
                <span style="font-family: 'Zpix'; font-size: 12px; color: #BC002D; background-color:
                    #FFFFFF;">日本語</span>! <br>
                - I read a lot of SF/F, my favorite books are the <u>Stormlight Archive</u> by
                Brandon Sanderson and <u>Neuromancer</u> by William Gibson. <br>
                - I listen to a lot of metal, industrial, darkwave, etc. plus a smattering of other random stuff.
                </p><br>

                <div id="winamp-container"></div>
                <script>
                    // import Webamp from 'webamp';

                    // Or, if you installed via a script tag, `Winamp` is available on the global `window`:
                    const Winamp = window.Webamp;

                    // Check if Winamp is supported in this browser
                    if(!Webamp.browserIsSupported()) {
                        alert("Oh no! Webamp does not work!")
                        throw new Error("What's the point of anything?")
                    }

                    // All configuration options are optional.
                    const webamp = new Webamp({
                        availableSkins: [
                            {
                                url: "https://archive.org/cors/winampskin_Green-Dimension-V2/Green-Dimension-V2.wsz",
                                name: "Green Dimension V2",
                            },
                            {
                                url: "https://archive.org/cors/winampskin_mac_os_x_1_5-aqua/mac_os_x_1_5-aqua.wsz",
                                name: "Mac OSX v1.5 (Aqua)",
                            },
                            {
                                url: "https://github.com/Kirito139/stash/webamp_skins/TopazAmp1-2.wsz",
                                name: "Topaz Amp 1.2",
                            },
                        ],
                        // Optional.
                        initialTracks: [
                            {
                                metaData: {
                                    artist: "Lords of Black",
                                    title: "Tears I Will Be",
                                },
                                url: "./tears+i+will+be_lords+of+black.mp3"
                            },
                            {
                                metaData: {
                                    artist: "Mesh",
                                    title: "The Last One Standing",
                                },
                                // NOTE: Your audio file must be served from the same domain as your HTML
                                // file, or served with permissive CORS HTTP headers:
                                // https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
                                // Can be downloaded from: https://github.com/captbaritone/webamp/raw/master/mp3/llama-2.91.mp3
                                url: "./mesh_the_last_one_standing.mp3"
                            },
                            {
                                metaData: {
                                    artist: "Owl City",
                                    title: "Vanilla Twilight",
                                },
                                url: "./vanilla_twilight.mp3"
                            },
                            {
                                metaData: {
                                    artist: "The Pineapple Thief",
                                    title: "Preparation for Meltdown",
                                },
                                url: "./preparation+for+meltdown_the+pineapple+thief.mp3"
                            },
                            {
                                metaData: {
                                    artist: "F4",
                                    title: "流星雨",
                                },
                                url: "./F4_流星雨.mp3"
                            },
                        ],
                        // Optional. The default skin is included in the js bundle, and will be loaded by default.
                        initialSkin: {
                            // NOTE: Your skin file must be served from the same domain as your HTML
                            // file, or served with permissive CORS HTTP headers:
                            // https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
                            // Topaz can be downloaded from https://github.com/captbaritone/webamp/raw/master/skins/TopazAmp1-2.wsz
                            url: "https://kirito139.github.io/stash/webamp_skins/Mac_OS_X_-_Aqua.wsz"
                        },
                    });
                    // Render after the skin has loaded.
                    webamp.renderWhenReady(document.getElementById('winamp-container'));
                </script>
                <hr>
                <!-- wakatime languages chart -->
                <figure>
                    <embed src="https://wakatime.com/share/@Kirito139/41ef517e-b132-44c5-aee3-12f8c6e459dc.svg">
                </figure>
                <hr>
                <p>Poetry—click each one to expand it:</p>
                <div class="implementation-container">
                    <input type="checkbox" id="implementation-toggle" class="implementation-toggle">
                    <label for="implementation-toggle" align="center">
                        'TWAS THE NIGHT BEFORE IMPLEMENTATION
                    </label>
                <pre class="implementation-content">
author unkown

'Twas the night before implementation and all through the house
not a system was working, not even the mouse.

The programmers hung by their tubes in despair
in hopes that a miracle soon would be there.

The users were nestled all snug in their beds
while visions of transactions danced in their heads.

When out of the Monitor came such a clatter
I sprang from my desk to see what was the matter.

And what to my wondering eyes should appear,
but a guru programmer (with a sixpack of beer).

His resume glowed with experience so rare,
and he turned out great code with a bit-pusher's flair.

More rapid than eagles, his programs they came,
as he whistled and shouted and called them by name.

On Update! On Inquiry! On OOP! On Delete!
On Sequel! On Timeout! On Methods Complete!

His eyes were glazed over; fingers nimble and lean
from weekends and nights in front of a screen.

A wink of his eye and a twist of his head,
soon gave me to know I had nothing to dread.

He spoke not a word, but went straight to his work,
turning specs into code; then he turned with a jerk.

And laying his finger upon the RUN keys
the system came up and it worked PERFECTLY!

The Updates updated; Deletes they deleted;
The Inquiries inquired and Closing completed.

He tested each whistle, and tested each bell
with nary an edit, for all had gone well.

The system was finished, the tests were concluded,
the clients last changes were even included.

And the client exclaimed with a snarl and a taunt
'IT'S JUST WHAT I ASKED FOR---BUT NOT WHAT I WANT!'
                </pre>
                </div>
                <div class="emotion-container">
                    <input type="checkbox" id="emotion-toggle" class="emotion-toggle">
                    <label for="emotion-toggle" align="center">
                        Once.
                    </label>
                <pre class="emotion-content">
author: lexm (me!)

Happiness
I had it once
Warm and plenty
Just like the blood
Still wet on my hands

Laughter
I heard it once
Ringing out
Like a bell
The one at your funeral

Joy
I felt it once
It danced and spun
And never faltered
Like my murdering hand

Life
You had it once
I don’t deserve it
I was a coward
And took yours to keep mine
For what it’s worth
I’m sorry
                </pre>
                </div>
            </main>
        </div>
        <div class="sidebar">
            <p> Visits since 2025-07-09 at 16:10: <!-- <a href="https://smallcounter.com">
                <img src="https://smallcounter.com/count.php?c_style=88&id=1752102264" border=0 alt="web counter">
            </a> -->
            <!-- FC2 Counter  Starts here -->
            <script language="javascript" type="text/javascript" src="//counter1.fc2.com/counter.php?id=40513368&main=1"></script><noscript><img src="//counter1.fc2.com/counter_img.php?id=40513368&main=1" /></noscript>
            <!-- FC2 Counter  Ends here -->
            <br>
            <!-- FC2 Counter  Starts here -->
            Current Viewers:<script language="javascript" type="text/javascript" src="//counter1.fc2.com/views.php?id=40513368&main=1"></script><noscript><img src="//counter1.fc2.com/counter_now.php?id=40513368&main=1" /></noscript>
            <!-- FC2 Counter  Ends here -->
            </p>
            
            <p>Swatch time:
            <a href="https://wiki.melonland.net/swatch_time" style="color:
                inherit; text-decoration: none;">
                <span id="mySwatchClock"></span>
                <script>
                    var mySwatchClock =
                        document.getElementById('mySwatchClock');
                    function updateSwatchClock() {
                        mySwatchClock.innerHTML = '@' + GetSwatchTime();
                    }
                    setInterval(updateSwatchClock, 864)
                </script>
            </a>
            <br>
            I'm feeling<a href="https://www.imood.com/users/kirito139"><img
                src="https://moods.imood.com/display/uname-kirito139/fg-FFCC02/bg-282828/trans-1/imood.gif"
                alt="The current mood of kirito139 at www.imood.com" border="0"></a>
            <br>
            Sign my guestbook:<a href="https://lexm.atabook.org" style="color: inherit;"><img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/guestbook.png"
                alt="CLICK IT! NOW!!"></a>
            </p>
            <iframe src="https://incr.easrng.net/badge?key=lexm" style="background:
                url(//incr.easrng.net/bg.gif)" title="increment badge" width="88" height="31"
                frameborder="0"></iframe>
            <p style="color: red"> Site rated WEB-14 </p>
            <a href="https://www.mabsland.com/Adoption.html">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/images/Censor_14a.gif"
                alt="Site rated WEB-14">
            </a>
            <p style="font-size: 8px; font-family: 'Silkscreen'; color: red">For the above rude
            gesture, and as-of-yet nonexistent content.</p>
            <div id="statuscafe"><div id="statuscafe-username"></div><div
                    id="statuscafe-content"></div></div><script
                    src="https://status.cafe/current-status.js?name=kirito139" defer></script>
            <iframe class="lastfm-widget"
                src="https://kirito139.github.io/lastfm_now_playing/index.html"
                allowtransparency="true" scrolling="no" width="220" height="340"
                style="border:none;">
            </iframe>
            <iframe width="180" height="180" style="border:none"
                src="https://dimden.neocities.org/navlink/" name="neolink"></iframe>
            <p> Some cool games:<br>

            <!-- Survev.io -->
            <a href="https://survev.io/" style="color: inherit !important;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/survev.ico" alt="Survev.io">
            </a><br>

            <!-- Vapor Trails -->
            <a href="https://sevencrane.itch.io/vapor-trails" style="color: inherit !important;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/nbwJLZ.png" alt="Vapor Trails">
            </a><br>
            
            <!-- WarBrokers -->
            <a href="https://warbrokers.io" style="color: inherit !important;">
                <img alt="WarBrokers" src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/warbrokers.ico" alt="WarBrokers">
            </a><br>

            <!-- ev.io -->
            <a href="https://ev.io" style="color: inherit !important;">ev.io</a><br>

            <!-- Endless Sky -->
            <a href="https://endless-sky.github.io" style="color: inherit !important;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/endless-sky.png">
            </a><br>

            <!-- Hypersomnia -->
            <a href="https://hypersomnia.xyz/" style="color: inherit !important;">Hypersomnia</a></p>

            <!-- Ranma and Akane Fanlisting! -->
            <a href="https://rxa.tenoh.org/" style="color: inherit !important;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/images/ra-75x50.gif" alt="Ranma and Akane Fanlisting!">
            </a>
        </div>

    </div>
    <footer>
        <p>Webrings!</p>
        <div id="webring-wrapper" style="text-decoration: none;">
            <iframe src="https://webring.hackclub.com/embed.html" width="90px" height="60px" frameborder="0"></iframe>
            <!-- Geekring widget #3 - 88x31 px banner by wirlaburla -->
            <p>
            <!--
            <map name="badge-geekring">
                <area shape="rect" coords="4,3,13,28"
                href="http://geekring.net/site/NUMBER/previous" alt="Previous">
                <area shape="rect" coords="13,3,22,28" href="http://geekring.net/site/NUMBER/random"
                alt="Random">
                <area shape="rect" coords="76,3,84,28" href="http://geekring.net/site/NUMBER/next"
                alt="Next">
                <area shape="rect" coords="23,3,63,28" href="https://geekring.net/" alt="Geekring">
            </map>
            </p>
            <img usemap="#badge-geekring" src="http://geekring.net/banner/geek_2.gif" alt="The Geekring">
            <br>
            -->
            <a href="https://webring.dinhe.net/" style="color: inherit;">The Retronaut Webring</a>
            <br>
            <a href='https://webring.dinhe.net/prev/http://lexm.leprd.space'>‹‹</a>
            <a href="https://webring.dinhe.net/random">Random</a>
            <a href='https://webring.dinhe.net/next/http://lexm.leprd.space'>››</a>
            <br>
            <br>

            <!-- Bucket Webring -->
            <a href="https://webring.bucketfish.me">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/icons/bucket.jpg" alt="Bucket Webring" style="width: 16px">
            </a> <br>
            <a href="https://webring.bucketfish.me/redirect.html?to=prev&name=lexm">‹‹</a>
            <a href="https://webring.bucketfish.me/redirect.html?to=random&name=lexm">Random</a>
            <a href="https://webring.bucketfish.me/redirect.html?to=next&name=lexm">››</a>

            <!-- Nyan Cat Ring -->
            <div id='NYAN_'>
                <script type="text/javascript" src="https://epiccity.nekoweb.org/ring/onionring-variables.js"></script>
                <script type="text/javascript" src="https://epiccity.nekoweb.org/ring/onionring-widget - small - tac.js"></script>
            </div>
            
        </div>
        <p> Cool sites!</p>
        <div id="cool-sites" style="text-decoration: none;">
            <!-- TheTridentGuy -->
            <p><a href="http://thetridentguy.xyz/" style="color: inherit">TheTridentGuy</a></p>
            <!-- astracelestine -->
            <a href="https://astracelestine.nekoweb.org">
                <img src="https://astracelestine.nekoweb.org/img/siteWidget.png" style="width: 80px">
            </a>
            <!-- Tertiary Apocalypse -->
            <a href="https://tertiaryapocalypse.neocities.org" style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/tertiaryapocalypse.png"
                alt="tertiaryapocalypse site button">
            </a>
            <!-- Velvet Blue -->
            <a href="https://velvetblue.neocities.org">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/velvet_blue.png" alt="Velvet Blue">
            </a>
            <!-- nanopone -->
            <a href="https://nano.lgbt/">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/nano.png" style="text-decoration: none;">
            </a>
            <!-- KirsVantas -->
            <a href="https://web.archive.org/web/20250326182221/https://kirsvantas.com/" target="_blank">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/kirsvantas.gif" alt="https://kirsvantas.com">
            </a>
            <!-- Dimden -->
            <a href="https://dimden.dev/">
                <img src="https://dimden.dev/services/images/88x31.gif">
            </a>
            <br>
            <!-- jsaniken -->
            <a href="https://jsaniken.neocities.org/">
                <img src="https://jsaniken.neocities.org/JSAbutton.gif">
            </a>
            <br>
            <!-- Leia uwu -->
            <a href="https://web.archive.org/web/20241003071517/https://leia.pages.gay/"
                style="color: inherit;">leia_uwu's homepage (archive link, she
            took the site down :( )</a>
            </p>
        </div>
        <p>Buttons!</p>
        <div class="88x31"  style="text-decoration: none;">
            <!-- Anything But Windows -->
            <img alt="Anything But Window Badge" title="F*** microsoft"
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/anythingbutwindows.gif">

            <!-- uBlock Origin NOW -->
            <a title="uBlock Origin NOW" referrerpolicy="no-referrer"
                href="https://github.com/gorhill/uBlock" style="text-decoration: none;">
                <img alt="uBlock Origin Badge"
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/ublock.png">
            </a>

            <!-- Firefox NOW -->
            <a title="Firefox NOW" referrerpolicy="no-referrer" href="https://firefox.com"
                style="text-decoration: none;">
                <img alt="Firefox Badge"
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/firefox.png">
            </a>

            <!-- Anything but chrome -->
            <a title="Anything but chrome" referrerpolicy="no-referrer"
                href="https://contrachrome.com/" style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/chrome.png"
                alt="Anything but chrome">
            </a>

            <!-- LaTeX -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/latex.gif"
            alt="True nerds type in LaTeX">

            <!-- textfile directory -->
            <a title="textfile directory" referrerpolicy="no-referrer" href="http://textfiles.com"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/textfile.gif"
                alt="textfiles.com">
            </a>

            <!-- Questionable Content -->
            <a title="Questionable Content" referrerpolicy="no-referrer"
                href="https://www.questionablecontent.net" style="text-decoration: none;">
                <img style="width: 88px; height: 31px;"
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/Tokyo_Teahouse_2932_buttons_questionablecontent.gif"
                alt="Questionable Content">
            </a>

            <!-- Calvin & Hobbes -->
            <img style="width: 88px; height: 31px;"
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/claymatecarly_calvin.gif"
            alt="Calvin & Hobbes">

            <!-- Vim -->
            <a title="Vim" referrerpolicy="no-referrer" href="https://www.vim.org"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/vim.vialle.love.anim.gif"
                alt="Vim">
            </a>

            <!-- Fight Google -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/google_stand.gif"
            alt="Fight Google">

            <!-- DHMO -->
            <a title="DHMO" referrerpolicy="no-referrer" href="https://dhmo.org"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/dhmobanner1.gif"
                alt="DHMO">
            </a>

            <!-- Star Wars Fanatic -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/Area51_Cavern_3008_swfanatic.gif"
            alt="Star Wars!">

            <!-- encounter an alien! -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/alienencounter.gif"
            alt="encounter an alien!">

            <!-- bestvwmonitor.gif -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/bestvwmonitor.gif"
            alt="This page is best viewed with a computer and a monitor">

            <!-- bookmark_this_page.gif -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/bookmark_this_page.gif"
            alt="Bookmark this page!">

            <!-- greensmilies.gif -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/greensmilies.gif"
            alt="green smilies">

            <!-- Hack Club -->
            <a title="Hack Club" referrerpolicy="no-referrer" href="https://hackclub.com"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/hackclub.png"
                alt="Hack Club">
            </a>

            <!-- lol -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/lol.gif"
            alt="LOL">

            <!-- no drugs -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/nodrugs.gif"
            alt="no drugs">

            <!-- paywalls -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/paywalls.png"
            alt="paywalls gatekeep knowledge">

            <!-- powered_by_mouse_wheel.gif -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/powered_by_mouse_wheel.gif"
            alt="powered by a mouse in a wheel">

            <!-- slashdot -->
            <a title="Slashdot" referrerpolicy="no-referrer" href="https://slashdot.org"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/slashdot.gif"
                alt="Slashdot">
            </a>

            <!-- apocalypse NOW! -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/apocalypseNOW.gif"
            alt="apocalypse NOW!">

            <!-- webp -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/WEBP.gif"
            alt="don't use webp, just use png!">

            <!-- Atheist -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/Area51_Cavern_1263_tna3.gif"
            alt="Atheist">

            <!-- Internet Archive -->
            <a title="Internet Archive" referrerpolicy="no-referrer" href="https://archive.org"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/archive.gif"
                alt="archive.org">
            </a>

            <!-- Made on a Mac -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/macbutton.gif"
            alt="Made on a Mac">

            <!-- It just works -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/mac-works.gif"
            alt="It just works">

            <!-- css -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/css.gif"
            alt="css">

            <!-- Made with Macintosh -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/buttons/refs/heads/main/88x31/41383.gif"
            alt="Made with Macintosh">

            <!-- 88x31 -->
            <a title="88x31" referrerpolicy="no-referrer" href="https://88x31.neocities.org" style="text-decoration: none;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/88x31.png" alt="88x31">
            </a>

            <!-- chrome is evil -->
            <a title="Anything but chrome" referrerpolicy="no-referrer" href="https://contrachrome.com/" style="text-decoration: none;">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/chrome2.gif" alt="Google Chrome is EVIL!">
            </a>

            <!-- get a computer now -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/computer.png"
            alt="Get a computer NOW!">

            <!-- DOOM -->
            <a title="DOOM" referrerpolicy="no-referrer"
                href="https://playclassic.games/games/first-person-shooter-dos-games-online/play-doom-online/play/"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/doom.png"
                alt="Play DOOM!">
            </a>

            <!-- Best viewed with eyes -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/eyes.gif"
            alt="Best viewed with eyes!">

            <!-- I like computer -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/ilikecomputer.png"
            alt="I like computer">

            <!-- Internet archive -->
            <a title="Internet Archive" referrerpolicy="no-referrer" href="https://archive.org"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/internetarchive.png"
                alt="Internet Archive">
            </a>

            <!-- Internet privacy NOW! -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/internetprivacy.gif"
            alt="Internet privacy NOW!">

            <!-- phone chump -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/phonechump.gif"
            alt="Don't be a phone chump. Get a computer NOW!">

            <!-- ruffle -->
            <a title="Ruffle" referrerpolicy="no-referrer" href="https://ruffle.rs"
                                                           style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/ruffle.png"
                alt="Ruffle">
            </a>

            <!--  same shit different asshole -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/sameshit.gif"
            alt="Same shit different asshole">

            <!-- spotify -->
            <a title="Reasons apple music is better" referrerpolicy="no-referrer"
                href="https://techpenny.com/reasons-apple-music-better-than-spotify/"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/shitify.gif"
                alt="Get Apple Music instead!">
            </a>

            <!-- delete tiktok -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/tiktok.gif"
            alt="Delete tiktok">

            <!-- Windows NO! -->
            <img
            src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/windows.png"
            alt="Windows NO!">

            <!-- xkcd -->
            <a title="xkcd" referrerpolicy="no-referrer" href="https://xkcd.com"
                style="text-decoration: none;">
                <img
                src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/xkcd.png"
                alt="xkcd">
            </a>

            <!-- Status Cafe -->
            <a href="https://status.cafe"><img src="https://status.cafe/assets/button.png" alt="Status Cafe"/></a>

            <!-- yoursmiles.org -->
            <a href="https://yoursmiles.org/">
                <img src="https://yoursmiles.org/img/sbutton.gif" alt="Your personal smileys" border="0" width="88" height="31">
            </a>

            <!-- leprd fanlisting -->
            <a href="https://leprd.minty.nu">
                <img src="https://raw.githubusercontent.com/Kirito139/stash/refs/heads/main/88x31/l-88-2.png" alt="leprd fan" border="0" width="88" height="31">
            </a>

        </div>
        <p>This site was wrought from raw html, css, and javascript with the help of
        <a href="https://perplexity.com" style="color: inherit;">Perplexity</a>
        and a large dose of procrastination.
        Kindly hosted for free by
        <a href="https://leprd.space" style="color: inherit;">https://leprd.space</a>
        !
        </p>
        <p>·</p>
        <p><a href="changelog.html" style="color: inherit;">Changelog</a>
        </p>
    </footer>
<link href="https://melonking.net/styles/flood.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://melonking.net/scripts/flood.js"></script>
<!--
<script>
    // Goo Flood!
    flood.texture = "https://melonking.net/images/flood-goo.png";
    flood.textureWidth = 256; // Resize to match your image file
    flood.textureHeight = 256;
    flood.drainSound = "https://melonking.net/audio/ui/squish.mp3";
    flood.drainTooSoonSound = "https://melonking.net/audio/ui/clunk.mp3";
    // Goo Messages
    flood.msg.info = "🧪";
    flood.msg.rising = "The goo is growing!";
    flood.msg.falling = "The goo is shrinking!";
    flood.msg.toosoon = "You are too sticky to do that!";
    flood.msg.one = "You see some goo on the floor!";
    flood.msg.two = "Oh wow goo is everywhere!";
    flood.msg.three = "Ahhh the goo is upto your knees!";
    flood.msg.four = "The goo is overwhelming!";
    flood.msg.five = "Everything is coverd in goo!";
    flood.msg.six = "100% Gooooo!";
</script>
-->
</body>
</html>
