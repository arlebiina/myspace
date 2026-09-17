<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpace - <?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?></title>
    
    <style>
        /* RESET & BASE */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #3b0000;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px 0;
            min-height: 100vh;
        }

        .main-wrapper {
            width: 950px;
        }

        .window-container {
            background-color: #000000;
            border: 2px solid #555555;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
        }

        /* BARRA DE TÍTULO */
        .title-bar {
            background: linear-gradient(90deg, #111, #333);
            color: #fff;
            padding: 4px 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #444;
            font-size: 13px;
        }

        .title-bar-text {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .title-bar-controls {
            display: flex;
            gap: 2px;
        }

        .win-btn {
            background: #333;
            color: #fff;
            border: 1px solid #666;
            width: 18px;
            height: 18px;
            font-size: 10px;
            cursor: pointer;
        }

        .win-btn.close {
            background: #a00;
        }

        /* BARRA DE ENDEREÇO */
        .address-bar-container {
            background-color: #1a1a1a;
            padding: 4px 8px;
            display: flex;
            gap: 6px;
            border-bottom: 1px solid #333;
        }

        .address-input-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            background: #fff;
            border: 1px solid #777;
            padding: 2px 6px;
        }

        .address-input {
            border: none;
            outline: none;
            width: 100%;
            margin-left: 6px;
            font-size: 12px;
            color: #000;
        }

        .go-button {
            padding: 2px 10px;
            background: #444;
            color: #fff;
            border: 1px solid #666;
            cursor: pointer;
            font-size: 12px;
        }

        /* BARRA DE FAVORITOS */
        .bookmarks-bar {
            background-color: #111;
            padding: 4px 8px;
            display: flex;
            gap: 12px;
            font-size: 11px;
            border-bottom: 1px solid #333;
            overflow-x: auto;
        }

        .bookmark-item {
            color: #aaa;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .bookmark-item:hover {
            color: #fff;
        }

        /* ÁREA DE CONTEÚDO PRINCIPAL */
        .content-area {
            padding: 15px;
            background-color: #000;
        }

        .inner-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
            font-size: 12px;
        }

        .logo-area {
            font-weight: bold;
            color: #ff6699;
        }

        .top-nav-links {
            color: #aaa;
        }

        .sub-nav {
            margin: 10px 0;
            font-size: 11px;
            color: #ff6699;
        }

        /* GRID PRINCIPAL DO PERFIL */
        .profile-grid {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 20px;
            margin-top: 15px;
        }

        /* COLUNA ESQUERDA */
        .left-col {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .profile-top-box h2 {
            font-size: 18px;
            color: #ff3399;
            margin-bottom: 10px;
        }

        .profile-layout-row {
            display: flex;
            gap: 10px;
        }

        .profile-pic {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border: 1px solid #ff3399;
            display: block;
        }

        .view-more-links {
            font-size: 10px;
            margin-top: 4px;
        }

        .view-more-links a {
            color: #ff6699;
        }

        .status-text-area {
            font-size: 11px;
            color: #ccc;
        }

        .tagline {
            font-style: italic;
            color: #ff99cc;
            margin-bottom: 8px;
        }

        .online-now {
            color: #00ff00;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-box, .interests-box {
            border: 1px solid #444;
            background-color: #111;
            padding: 8px;
        }

        .contact-box h3, .interests-box h3 {
            background-color: #ff3399;
            color: #000;
            font-size: 12px;
            padding: 3px 6px;
            margin-bottom: 8px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px;
        }

        .contact-item {
            font-size: 11px;
            color: #ff6699;
            text-decoration: none;
        }

        .interests-table {
            width: 100%;
            font-size: 11px;
            border-collapse: collapse;
        }

        .interests-table td {
            padding: 4px;
            vertical-align: top;
        }

        .label-td {
            color: #ff6699;
            width: 80px;
        }

        .value-td {
            color: #ddd;
        }

        /* COLUNA DIREITA */
        .right-col {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .extended-banner {
            border: 1px solid #ff3399;
            background: #220011;
            padding: 8px;
            text-align: center;
            font-size: 12px;
            color: #fff;
        }

        /* PLAYER DE MÚSICA */
        .music-player-container {
            border: 1px solid #666;
            background: #222;
        }

        .player-header {
            background: #444;
            padding: 4px 8px;
            display: flex;
            justify-content: space-between;
            font-size: 11px;
        }

        .player-body {
            padding: 10px;
            display: flex;
            gap: 10px;
        }

        .album-cover {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 1px solid #888;
            display: block;
        }

        .player-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 10px;
        }

        .player-input {
            background: #000;
            color: #0f0;
            border: 1px solid #555;
            font-size: 10px;
            padding: 1px 4px;
            width: 100%;
        }

        .player-buttons {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-top: 4px;
        }

        .player-btn {
            background: #333;
            color: #fff;
            border: 1px solid #777;
            font-size: 9px;
            padding: 2px 6px;
            cursor: pointer;
        }

        /* BLOG & ABOUT ME */
        .blog-section, .about-section, .top-friends-section {
            border: 1px solid #333;
            padding: 10px;
            background: #0a0a0a;
        }

        .blog-section h3, .about-section h3, .top-friends-section h3 {
            color: #ff3399;
            font-size: 13px;
            margin-bottom: 8px;
            border-bottom: 1px solid #333;
            padding-bottom: 4px;
        }

        .about-section p {
            font-size: 11px;
            line-height: 1.4;
            color: #ccc;
        }

        /* TOP FRIENDS GRID */
        .friends-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 10px;
        }

        .friend-card {
            text-align: center;
        }

        .friend-name {
            display: block;
            font-size: 11px;
            color: #ff6699;
            text-decoration: none;
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .friend-frame img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border: 1px solid #ff3399;
            display: block;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <div class="window-container">
            <!-- Barra de Título -->
            <div class="title-bar">
                <div class="title-bar-text">
                    <span class="title-icon">🐱</span>
                    <span>Cat Explorer</span>
                </div>
                <div class="title-bar-controls">
                    <button class="win-btn">_</button>
                    <button class="win-btn">▢</button>
                    <button class="win-btn close">X</button>
                </div>
            </div>

            <!-- Barra de Endereço -->
            <div class="address-bar-container">
                <div class="address-input-wrapper">
                    <span class="world-icon">🌐</span>
                    <input type="text" value="<?= htmlspecialchars($profile['myspace_url'] ?? 'http://myspace.2kool4u.net') ?>" class="address-input" readonly>
                </div>
                <button class="go-button">Go</button>
            </div>

            <!-- Barra de Favoritos -->
            <div class="bookmarks-bar">
                <a href="#" class="bookmark-item"><span class="bookmark-icon blue">S</span>MySpace</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Crew</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Media</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Net-Art</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Games</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>P()rn</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Gif</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>Tools</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>INTERWEBZ</a>
                <a href="#" class="bookmark-item"><span class="folder-icon">📁</span>VM</a>
            </div>

            <!-- Área de Conteúdo -->
            <div class="content-area">
                <div class="inner-header">
                    <div class="logo-area">myspace.windows93.net</div>
                    <div class="top-nav-links">MailBox | Logout</div>
                </div>

                <div class="sub-nav">
                    <span>Home</span> | <span>My Fwiends</span> | <span>All Fwiends</span> | <span>Random</span> | <span>Online</span>
                </div>

                <div class="profile-grid">
                    
                    <!-- COLUNA ESQUERDA -->
                    <aside class="left-col">
                        <div class="profile-top-box">
                            <h2><?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?></h2>
                            <div class="profile-layout-row">
                                <div class="image-area">
                                    <div class="image-frame">
                                        <!-- CAMINHO CORRIGIDO: assets/images/perfil.jpg -->
                                       <img src="./assets/images/perfil.jpg" alt="Profile" class="profile-pic">
                                    </div>
                                    <div class="view-more-links">
                                        View My: <a href="#">Pics</a> | <a href="#">Videos</a>
                                    </div>
                                </div>
                                <div class="status-text-area">
                                    <p class="tagline"><?= nl2br(htmlspecialchars($profile['tagline'] ?? "rawr means i ♥ you in dinosaur x3\n***\nKandi\n17 / Bi\nTaken\n02.14.08 <33\n***")) ?></p>
                                    <div class="online-now">
                                        <span class="online-icon">👤</span> Online Now!
                                    </div>
                                    <p class="last-login">Last Login:<br><?= htmlspecialchars($profile['last_login'] ?? '6/7/2008') ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-box">
                            <h3>Contacting <?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?></h3>
                            <div class="contact-grid">
                                <a href="#" class="contact-item">📧 Enviar mensagem</a>
                                <a href="#" class="contact-item">➡️ Forward to Friend</a>
                                <a href="#" class="contact-item">👥 Add to Friends</a>
                                <a href="#" class="contact-item">⭐ Adicionar aos favoritos</a>
                                <a href="#" class="contact-item">💬 Instant Message</a>
                                <a href="#" class="contact-item">🚫 Bloquear usuário</a>
                                <a href="#" class="contact-item">➕ Add to Group</a>
                                <a href="#" class="contact-item">📈 Rank User</a>
                            </div>
                        </div>

                        <div class="interests-box">
                            <h3><?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?>'s Interests</h3>
                            <table class="interests-table">
                                <?php 
                                $interests = $profile['interests'] ?? [
                                    'General' => 'Music, hanging w/ friends, killin posers',
                                    'Music' => 'BMTH, A7X, ADTR, MIW, BvB, TBS',
                                    'Movies' => 'Horror movies (:',
                                    'Television' => 'Family Guy, South Park',
                                    'Books' => 'Anything scary',
                                    'Heroes' => 'My chemical romance </3'
                                ];
                                foreach($interests as $label => $value): 
                                ?>
                                    <tr>
                                        <td class="label-td"><strong><?= htmlspecialchars($label) ?>:</strong></td>
                                        <td class="value-td"><?= htmlspecialchars($value) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </aside>

                    <!-- COLUNA DIREITA -->
                    <main class="right-col">
                        <div class="extended-banner">
                            <?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?> is in your extended network
                        </div>

                        <!-- PLAYER DE MÚSICA MP3 -->
                        <section class="music-player-container">
                            <div class="player-header">
                                <span>🎵 MP3 Player</span>
                                <div class="player-controls-top">🗕 🗖 🗙</div>
                            </div>
                            <div class="player-body">
                                <div class="player-left">
                                    <!-- CAMINHO CORRIGIDO: assets/images/music.jpg -->
                                    <img src="./assets/images/music.jpg" alt="Capa" class="album-cover">
                                </div>
                                <div class="player-right">
                                    <div class="info-row">
                                        <span class="player-label">Artist:</span>
                                        <input type="text" class="player-input" value="Tommy heavenly6" readonly>
                                    </div>
                                    <div class="info-row">
                                        <span class="player-label">Track:</span>
                                        <input type="text" class="player-input" value="Hey My Friend" readonly>
                                    </div>

                                    <audio id="myspace-audio" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>

                                    <div class="player-buttons">
                                        <button id="btn-play" class="player-btn">PLAY</button>
                                        <button id="btn-pause" class="player-btn">PAUSE</button>
                                        <button id="btn-stop" class="player-btn">STOP</button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="blog-section">
                            <h3><?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?>'s Latest Blog Entries</h3>
                            <p><strong>UPDATE LOGS</strong> [<a href="#" style="color:#ff6699;">view more</a>]</p>
                            <p><strong>A LITERAL LEGEND</strong> [<a href="#" style="color:#ff6699;">view more</a>]</p>
                        </section>

                        <section class="about-section">
                            <h3>About me:</h3>
                            <p>My names Ashlyn! My friends call me Ash. I'm a time traveler from the early 2000s (Can't tell you the exact year sorry!) so you bet I was super happy when I found out someone remade myspace like club penguin. I work for a top secret government time travel agency (That I also can't tell you the name of DX) I was sent to the year 2020 on a mission (That I also can't tell you all the details to ;-; top secret n' all XD) and everything was going great!! Until, I accidentally broke the device.. idiot, idiot... but I'm sure soon someone will notice and one of my co workers will come for me and save me! I'm a valued worker afterall!! Other than that I loovveeee music and art and really just anything creative!!</p>
                        </section>

    <section class="top-friends-section">
    <h3><?= htmlspecialchars($profile['name'] ?? 'xXx...KandiThrasH...xXx') ?>'s Top Friends</h3>
    <div class="friends-grid">
        <?php foreach($profile['friends'] as $friend): ?>
            <div class="friend-card">
                <!-- Link no nome -->
                <a href="<?= htmlspecialchars($friend['url'] ?? '#') ?>" target="_blank" class="friend-name">
                    <?= htmlspecialchars($friend['name']) ?>
                </a>
                
                <!-- Link na imagem -->
                <div class="friend-frame">
                  <a href="<?= htmlspecialchars($friend['url'] ?? '#') ?>" target="_blank">
                  <img src="<?= htmlspecialchars($friend['image']) ?>" alt="<?= htmlspecialchars($friend['name']) ?>" onerror="this.src='./assets/images/perfil.jpg'">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>s
                    </main>

                </div>
            </div>
        </div>
    </div>

    <!-- DIVS PARA TRATAR O ERRO DE JAVASCRIPT/GLITTER DO CONSOLE -->
    <div id="animation-container" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; pointer-events: none; z-index: 9999;"></div>

    <script>
        const audio = document.getElementById('myspace-audio');
        if (audio) {
            document.getElementById('btn-play')?.addEventListener('click', () => audio.play());
            document.getElementById('btn-pause')?.addEventListener('click', () => audio.pause());
            document.getElementById('btn-stop')?.addEventListener('click', () => {
                audio.pause();
                audio.currentTime = 0;
            });
        }

        window.addEventListener('DOMContentLoaded', () => {
            const targets = ['app', 'stage', 'effect-container'];
            targets.forEach(id => {
                if (!document.getElementById(id)) {
                    const dummy = document.createElement('div');
                    dummy.id = id;
                    document.body.appendChild(dummy);
                }
            });
        });
    </script>
</body>
</html>
