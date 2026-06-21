
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>NAXCA | BLUE FLAME | 44 GAMES + DEV MARKET | MOVIE BOX (Action/Sci-Fi/Bongo + Search)</title>
    <meta name="description" content="NAXCA: Tanzania game hub - 44 PSP titles, developer marketplace, movie gallery with genres & search (MP4/MOV)">
    <meta name="theme-color" content="#0a2a4a">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #0a0f1a; color: #fff; min-height: 100vh; overflow-x: hidden; }
        :root { --fire-glow: #1E90FF; --electric-blue: #00BFFF; --dark-surface: #0d1425; }
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #0a0f1a; }
        ::-webkit-scrollbar-thumb { background: #1E90FF; border-radius: 4px; }
        .header { background: rgba(8,18,30,0.97); padding: 12px 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; border-bottom: 2px solid #1E90FF; position: sticky; top: 0; z-index: 100; backdrop-filter: blur(10px); }
        .logo-area { display: flex; align-items: center; gap: 12px; }
        .custom-logo { width: 48px; height: 48px; border-radius: 12px; object-fit: cover; border: 2px solid #1E90FF; background: #0d1425; }
        .site-title { font-size: 26px; font-weight: 800; color: #00BFFF; letter-spacing: 1px; text-shadow: 0 0 8px rgba(0,191,255,0.5); }
        .user-badge { background: #0d1425; padding: 8px 16px; border-radius: 30px; font-size: 14px; border: 1px solid #1E90FF; font-weight: 600; cursor: pointer; transition: 0.2s; display: flex; align-items: center; gap: 8px; }
        .user-badge img { width: 28px; height: 28px; border-radius: 50%; object-fit: cover; border: 1px solid #1E90FF; background: #0a1020; }
        .nav-buttons { display: flex; gap: 8px; flex-wrap: wrap; }
        .nav-btn { background: transparent; border: none; padding: 8px 18px; border-radius: 30px; color: #aaa; font-weight: 600; cursor: pointer; transition: all 0.2s ease; }
        .nav-btn.active, .nav-btn:hover { background: #1E90FF; color: #fff; transform: translateY(-2px); box-shadow: 0 0 12px rgba(30,144,255,0.5); }
        
        .video-announcement { max-width: 1400px; margin: 24px auto 16px; padding: 0 16px; }
        .video-wrapper { position: relative; width: 100%; border-radius: 32px; overflow: hidden; box-shadow: 0 0 30px rgba(30,144,255,0.4); border: 2px solid #1E90FF; background: #000; }
        .video-wrapper video { width: 100%; display: block; max-height: 500px; object-fit: cover; cursor: pointer; }
        .video-caption { position: absolute; bottom: 20px; left: 20px; background: rgba(0,0,0,0.7); backdrop-filter: blur(8px); padding: 8px 20px; border-radius: 40px; color: #00BFFF; font-weight: bold; border-left: 4px solid #1E90FF; font-size: 14px; pointer-events: none; }
        
        .video-bg-section { position: relative; width: 100%; height: 400px; overflow: hidden; margin: 20px 0; border-radius: 28px; border: 2px solid #1E90FF; box-shadow: 0 0 30px rgba(30,144,255,0.4); }
        .video-bg-section video { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .video-bg-overlay { position: relative; z-index: 2; background: rgba(0,0,0,0.6); height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column; text-align: center; backdrop-filter: blur(3px); }
        .video-bg-overlay h2 { font-size: 48px; color: #00BFFF; text-shadow: 0 0 15px #1E90FF; }
        
        /* VERTICAL MOVIE GALLERY - with categories & search (original working design) */
        .video-gallery-section { margin: 40px 0 30px; background: linear-gradient(145deg, #0b1225, #060b18); border-radius: 32px; padding: 24px 20px; border: 1px solid #1E90FF; box-shadow: 0 0 25px rgba(30,144,255,0.2); }
        .video-gallery-title { font-size: 28px; font-weight: 800; color: #00BFFF; text-align: center; margin-bottom: 24px; display: flex; gap: 12px; justify-content: center; align-items: center; flex-wrap: wrap; }
        .filter-bar { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; margin-bottom: 24px; align-items: center; }
        .filter-btn { background: #0a1020; border: 1px solid #1E90FF; padding: 8px 20px; border-radius: 40px; font-weight: 600; cursor: pointer; transition: 0.2s; color: #bbb; }
        .filter-btn.active, .filter-btn:hover { background: #1E90FF; color: white; box-shadow: 0 0 10px #1E90FF; }
        .search-input { background: #0a1020; border: 1px solid #1E90FF; padding: 8px 20px; border-radius: 40px; color: white; width: 240px; outline: none; font-size: 14px; }
        .movie-grid-vertical { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px; padding: 8px 4px; max-height: 70vh; overflow-y: auto; }
        .movie-card { background: #0a1020; border-radius: 24px; padding: 12px; border: 1px solid rgba(30,144,255,0.5); transition: 0.2s; }
        .movie-card video { width: 100%; border-radius: 18px; max-height: 180px; object-fit: cover; background: #000; }
        .movie-card p { margin-top: 8px; font-weight: 600; color: #87CEFA; text-align: center; }
        .movie-badge { display: inline-block; background: #1E90FF33; border-radius: 20px; padding: 4px 12px; font-size: 12px; margin-top: 6px; }
        .load-more-btn { display: block; margin: 30px auto 0; background: #1E90FF; border: none; padding: 12px 30px; border-radius: 40px; font-weight: bold; cursor: pointer; color: white; transition: 0.2s; }
        .load-more-btn:hover { transform: scale(1.02); background: #00BFFF; }
        
        .hero-banner { background: linear-gradient(135deg, #0a1628, #050a14); margin: 20px 16px; padding: 32px 24px; border-radius: 28px; text-align: center; border: 1px solid #1E90FF; }
        .action-buttons-group { display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; margin-top: 12px; }
        .admin-wa, .whatsapp-channel { background: #075E54; padding: 12px 26px; border-radius: 40px; display: inline-flex; align-items: center; gap: 10px; cursor: pointer; font-weight: bold; color: #fff; }
        .whatsapp-channel { background: #25D366; color: #000; }
        .container { max-width: 1400px; margin: 0 auto; padding: 16px; }
        .side-scroll-section { margin: 40px 0 30px; background: linear-gradient(90deg, #0b1225, #060b18); border-radius: 28px; padding: 20px 0 20px 20px; border: 1px solid #1E90FF; }
        .horizontal-scroll { display: flex; overflow-x: auto; gap: 20px; padding-bottom: 20px; cursor: grab; scrollbar-width: thin; }
        .horizontal-scroll .scroll-item { flex: 0 0 auto; width: 160px; background: linear-gradient(145deg, #101a30, #0a1022); border-radius: 20px; padding: 10px; text-align: center; border: 1px solid rgba(30,144,255,0.5); cursor: pointer; transition: 0.2s; }
        .horizontal-scroll .scroll-item:hover { transform: translateY(-8px); border-color: #00BFFF; }
        .scroll-item img { width: 100%; height: 100px; object-fit: cover; border-radius: 14px; }
        .apps-grid, .market-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(170px, 1fr)); gap: 20px; margin-top: 20px; }
        .app-card, .market-card { background: linear-gradient(145deg, #0f1a2f, #0a1020); border-radius: 20px; text-align: center; border: 1px solid rgba(30,144,255,0.3); transition: 0.25s; overflow: hidden; }
        .app-card:hover, .market-card:hover { transform: translateY(-6px); border-color: #1E90FF; }
        .app-image { width: 100%; height: 130px; object-fit: cover; }
        .buy-btn { background: linear-gradient(90deg, #1E90FF, #00BFFF); border: none; padding: 10px; border-radius: 30px; font-weight: 700; margin: 8px 12px 14px; cursor: pointer; color: #fff; }
        .game-grid-44 { display: grid; grid-template-columns: repeat(auto-fill, minmax(115px, 1fr)); gap: 16px; }
        .game-image-card { background: linear-gradient(145deg, #101a30, #0a1022); border-radius: 18px; padding: 12px 8px; text-align: center; border: 1px solid rgba(30,144,255,0.35); cursor: pointer; transition: all 0.2s; }
        .game-image-card.fire-blast { animation: blueFireBlast 0.5s; border-color: #00BFFF; }
        @keyframes blueFireBlast { 40% { transform: scale(1.07); background: #144a7a; } }
        .game-image-card img { width: 100%; height: 100px; object-fit: cover; border-radius: 14px; }
        .info-modal, .nickname-modal { display: none; position: fixed; inset: 0; background: rgba(5,10,20,0.96); z-index: 2000; justify-content: center; align-items: center; backdrop-filter: blur(12px); }
        .modal-content { background: linear-gradient(145deg, #0f1a30, #0a1020); border-radius: 36px; padding: 28px; max-width: 500px; width: 90%; border: 2px solid #1E90FF; max-height: 85vh; overflow-y: auto; }
        .input-group { margin-bottom: 15px; text-align: left; }
        .input-group input, .input-group select, .input-group textarea { width: 100%; padding: 12px; border-radius: 30px; background: #0a1020; border: 1px solid #1E90FF; color: white; }
        .profile-dp { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid #1E90FF; margin: 10px auto; cursor: pointer; }
        .toast { position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%) translateY(100px); background: #0a2850; padding: 12px 24px; border-radius: 50px; transition: 0.3s; z-index: 2100; opacity: 0; }
        .toast.show { transform: translateX(-50%) translateY(0); opacity: 1; }
        .media-gallery { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 20px; }
        .media-item { background: #0a1020; border-radius: 16px; padding: 8px; width: 140px; text-align: center; }
        .media-item img, .media-item video { width: 100%; height: 100px; object-fit: cover; border-radius: 12px; }
        footer { text-align: center; padding: 32px; color: #5dade2; border-top: 1px solid rgba(30,144,255,0.2); margin-top: 40px; }
        
        .audio-float { position: fixed; bottom: 20px; right: 20px; background: rgba(10,20,40,0.9); backdrop-filter: blur(8px); border-radius: 40px; padding: 6px 12px; font-size: 12px; z-index: 999; border: 1px solid #1E90FF; cursor: pointer; transition: 0.2s; display: flex; align-items: center; gap: 6px; color: #00BFFF; animation: pulse 1.5s infinite; }
        .audio-float:hover { background: #1E90FF; color: #fff; transform: scale(1.05); animation: none; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(30,144,255,0.7); } 70% { box-shadow: 0 0 0 10px rgba(30,144,255,0); } 100% { box-shadow: 0 0 0 0 rgba(30,144,255,0); } }
        
        @media (max-width: 700px) { .game-grid-44 { grid-template-columns: repeat(auto-fill, minmax(90px, 1fr)); } .scroll-item { width: 120px; } .movie-grid-vertical { grid-template-columns: 1fr; } .filter-bar { flex-direction: column; align-items: stretch; } .search-input { width: 100%; } }
    </style>
</head>
<body>
<div class="header">
    <div class="logo-area">
        <img class="custom-logo" src="x.jpeg" alt="NAXCA" onerror="this.src='https://placehold.co/48x48/0a2850/00BFFF?text=N'">
        <div class="site-title">NAXCA</div>
    </div>
    <div class="user-badge" id="userBadge" onclick="showNicknameModal()">🔵 GUEST</div>
    <div class="nav-buttons">
        <button class="nav-btn active" data-tab="gallery">🎮 OUR GAMES</button>
        <button class="nav-btn" data-tab="games">🎮 GAME APPS</button>
        <button class="nav-btn" data-tab="market">🏪 MARKET</button>
        <button class="nav-btn" data-tab="videos">🎬 MOVIE BOX</button>
        <button class="nav-btn" data-tab="profile">👤 PROFILE</button>
        <button class="nav-btn" data-tab="viral">💰 VIRAL</button>
        <button class="nav-btn" data-tab="community">💬 COMMENTS</button>
    </div>
</div>

<audio id="bgAudio" src="x.mp3" loop preload="auto" style="display: none;"></audio>
<div id="audioControl" class="audio-float" title="Background music">🎵 🔈 Music</div>

<div class="video-announcement">
    <div class="video-wrapper">
        <video id="announcementVideo" autoplay muted loop playsinline controls>
            <source src="x.mp4" type="video/mp4">
            <source src="x.mov" type="video/quicktime">
        </video>
        <div class="video-caption"><i class="fas fa-fire"></i> OFFICIAL ANNOUNCEMENT</div>
    </div>
</div>

<div class="video-bg-section">
    <video autoplay muted loop playsinline>
        <source src="1.mp4" type="video/mp4">
        <source src="1.mov" type="video/quicktime">
    </video>
    <div class="video-bg-overlay">
        <h2>⚡ DEVELOPER ZONE ACTIVE ⚡</h2>
        <p>Upload & sell your games | Share media | MOVIE BOX: Action / Sci-Fi / Bongo + Search</p>
    </div>
</div>

<div class="hero-banner">
    <h1>NAXCA BLUE FLAME HUB</h1>
    <p>44 PSP classics + Developer Marketplace + MOVIE BOX (1-100 .mov/.mp4) with categories & search | Airtel Money</p>
    <div class="action-buttons-group">
        <button class="admin-wa" onclick="window.open('https://wa.me/255680737370','_blank')"><i class="fab fa-whatsapp"></i> Admin: 0680737370</button>
        <button class="whatsapp-channel" onclick="window.open('https://chat.whatsapp.com/NAXCACommunity','_blank')"><i class="fab fa-whatsapp"></i> JOIN WHATSAPP</button>
    </div>
    <p style="margin-top:10px; font-size:12px; color:#aaa;">⚠️ Demo version – purchases simulated. No real transactions.</p>
</div>

<!-- TABS -->
<div id="galleryTab" class="container" style="display:block;"><div class="side-scroll-section"><div class="horizontal-scroll" id="horizontalScrollStrip"></div></div><div class="game-grid-44" id="fortyFourGrid"></div></div>
<div id="gamesTab" class="container" style="display:none;"><h2>🎮 44 GAME APPS</h2><div class="apps-grid" id="fullGamesGrid"></div></div>
<div id="marketTab" class="container" style="display:none;"><h2>🏪 DEVELOPER MARKETPLACE (Demo)</h2><div id="marketplaceGrid" class="market-grid"></div></div>

<!-- MOVIE BOX: VERTICAL SCROLL + CATEGORIES + SEARCH (working version) -->
<div id="videosTab" class="container" style="display:none;">
    <div class="video-gallery-section">
        <div class="video-gallery-title"><i class="fas fa-film"></i> 🎬 MOVIE BOX (1 → 100) 🎬 <i class="fas fa-ticket-alt"></i></div>
        <div class="filter-bar">
            <button class="filter-btn active" data-genre="all">📽️ ALL MOVIES</button>
            <button class="filter-btn" data-genre="action">🔥 ACTION</button>
            <button class="filter-btn" data-genre="sci-fi">🚀 SCI-FI</button>
            <button class="filter-btn" data-genre="bongo">🇹🇿 BONGO MOVIE</button>
            <input type="text" id="movieSearchInput" class="search-input" placeholder="🔍 Search by number or title...">
        </div>
        <div id="movieGridContainer" class="movie-grid-vertical"></div>
        <button id="loadMoreBtn" class="load-more-btn">📀 LOAD MORE VIDEOS (20 at a time)</button>
        <p style="text-align:center; margin-top:20px; color:#6c8eff;">✨ Vertical scroll | Tap video to play/pause | Genre-based & smart search ✨</p>
    </div>
</div>

<div id="profileTab" class="container" style="display:none;"><div id="profileSection"></div></div>
<div id="viralTab" class="container" style="display:none;">
    <div class="referral-code" onclick="copyReferralLink()">👉 TAP TO COPY REFERRAL LINK 👈</div>
    <p>👥 Referrals: <strong id="referralCount">0</strong> | 💵 Earnings: <strong id="referralEarnings">TSh 0 (demo)</strong></p>
    <button class="buy-btn" onclick="shareReferral()">SHARE WHATSAPP</button>
    <div><h3>🔥 DAILY STREAK</h3><div class="streak-number" id="streakDays">0</div><button class="buy-btn" onclick="claimStreakBonus()">CLAIM BONUS (demo)</button></div>
    <div><h3>📢 VIRAL SCRIPT</h3><select id="scriptSelector"><option value="1">NAXCA 44 Games + Movie Box</option><option value="2">Referral 200/=</option></select><div class="referral-code" id="scriptText"></div><button class="buy-btn" onclick="copyScript()">COPY SCRIPT</button></div>
</div>
<div id="communityTab" class="container" style="display:none;">
    <h2>💬 Send message to Admin (demo)</h2>
    <form id="commentForm">
        <input type="text" id="commentName" placeholder="Your name" required>
        <textarea id="commentMsg" rows="4" placeholder="Write your feedback..."></textarea>
        <button type="submit" class="buy-btn">📧 SEND DEMO EMAIL</button>
    </form>
</div>

<footer>© 2026 NAXCA | Developer marketplace | MOVIE BOX (1.mov → 100.mov) with Action/Sci-Fi/Bongo & Search | 🎵 Background: x.mp3</footer>

<div id="toast" class="toast"></div>
<div id="infoModal" class="info-modal" onclick="closeInfoModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <img id="modalImage"><div class="modal-title" id="modalTitle"></div>
        <div id="modalInfoText"></div>
        <div class="game-price-section"><span class="price-big" id="gamePriceSpan">TSh 2,500</span><br><span class="airtel-number">📞 Pay to: <strong>0680737370 (SIMULATION)</strong></span></div>
        <div class="modal-buttons-group"><button class="airtel-pay-btn" id="airtelPurchaseBtn">💸 Simulate Payment</button><button class="wa-notify-btn" id="waNotifyBtn">📲 I have paid (demo)</button></div>
        <p style="font-size:11px; margin-top:10px;">⚠️ Demo mode – no real transaction.</p>
        <button class="close-modal" onclick="forceCloseInfoModal()">CLOSE</button>
    </div>
</div>
<div id="nicknameModal" class="nickname-modal" onclick="closeModal('nicknameModal')">
    <div class="modal-content" style="max-width:400px;" onclick="event.stopPropagation()">
        <h2 style="color:#00BFFF;">👤 Choose nickname (demo)</h2>
        <div class="input-group"><label>Your name</label><input type="text" id="nicknameInput" placeholder="e.g., Gamer123"></div>
        <div class="input-group"><label>Account type</label><select id="userTypeSelect"><option value="gamer">🎮 Gamer</option><option value="developer">👨‍💻 Developer</option></select></div>
        <button class="buy-btn" id="setNicknameBtn">Set Profile</button>
        <button class="buy-btn" id="guestModeBtn">Continue as GUEST</button>
    </div>
</div>

<script>
    // ---------- DEMO MODE: no passwords, only nickname ----------
    let currentUser = null;
    function showToast(msg, isErr=false) { let t=document.getElementById('toast'); if(t){ clearTimeout(window.toastTimer); t.textContent=msg; t.style.background=isErr?'#8B0000':'#0a2850'; t.classList.add('show'); window.toastTimer=setTimeout(()=>t.classList.remove('show'),2500); } }
    function showNicknameModal() { document.getElementById('nicknameModal').style.display='flex'; }
    function closeModal(id) { document.getElementById(id).style.display='none'; }
    
    function setUserFromNickname() {
        let name = document.getElementById('nicknameInput').value.trim();
        let type = document.getElementById('userTypeSelect').value;
        if(!name) name = "Guest"+Math.floor(Math.random()*1000);
        currentUser = { username: name, type: type, dp: '', media: [], gamesList: [] };
        localStorage.setItem('naxca_demo_user', JSON.stringify({username:name, type:type}));
        document.getElementById('userBadge').innerHTML = `🔵 ${name.toUpperCase()} (${type==='developer'?'👨‍💻':'🎮'})`;
        closeModal('nicknameModal');
        renderProfileTab();
        renderMarketplace();
        loadUserData();
        showToast(`Welcome ${name} (demo mode)`);
    }
    document.getElementById('setNicknameBtn').onclick = setUserFromNickname;
    document.getElementById('guestModeBtn').onclick = () => {
        currentUser = null;
        localStorage.removeItem('naxca_demo_user');
        document.getElementById('userBadge').innerHTML = '🔵 GUEST';
        closeModal('nicknameModal');
        renderProfileTab();
        renderMarketplace();
        showToast("Guest mode active (no data saved)");
    };
    
    function loadUserData() {
        if(!currentUser) { document.getElementById('referralCount').innerText='0'; document.getElementById('referralEarnings').innerText='TSh 0'; document.getElementById('streakDays').innerText='0'; return; }
        let refKey=`naxca_refs_${currentUser.username}`;
        let streakKey=`naxca_streak_${currentUser.username}`;
        let refCount=parseInt(localStorage.getItem(refKey)||0);
        document.getElementById('referralCount').innerText=refCount;
        document.getElementById('referralEarnings').innerText=`TSh ${refCount*200} (demo)`;
        document.getElementById('streakDays').innerText=localStorage.getItem(streakKey)||0;
    }
    window.claimStreakBonus=function(){ if(!currentUser){ showToast("Set nickname first",true); return; } let lastKey=`streak_date_${currentUser.username}`; let streakKey=`naxca_streak_${currentUser.username}`; let last=localStorage.getItem(lastKey); let today=new Date().toDateString(); let streak=parseInt(localStorage.getItem(streakKey)||0); if(last===today){ showToast("Already claimed",true); return; } if(last && (new Date(last).getTime()+86400000<Date.now())) streak=0; streak++; localStorage.setItem(streakKey,streak); localStorage.setItem(lastKey,today); document.getElementById('streakDays').innerText=streak; showToast(`Streak ${streak} days! +${streak*50} demo coins`); };
    window.copyReferralLink=function(){ let link=window.location.href.split('?')[0]+`?ref=${currentUser?.username||'guest'}`; navigator.clipboard.writeText(link); showToast("Referral link copied (demo)"); };
    window.shareReferral=function(){ let url=window.location.href.split('?')[0]+`?ref=${currentUser?.username||'demo'}`; window.open(`https://wa.me/?text=${encodeURIComponent(`🔥 NAXCA demo: Join & test! ${url}`)}`,'_blank'); };
    function checkReferral(){ let params=new URLSearchParams(location.search); let ref=params.get('ref'); if(ref && currentUser && currentUser.username!==ref){ let refKey=`naxca_refs_${ref}`; let count=parseInt(localStorage.getItem(refKey)||0)+1; localStorage.setItem(refKey,count); showToast(`Referral counted! +200 demo points`); } }
    
    function getUsers() { let raw=localStorage.getItem('naxca_dev_data'); return raw?JSON.parse(raw):{}; }
    function saveUsers(users) { localStorage.setItem('naxca_dev_data',JSON.stringify(users)); }
    function saveDeveloperData(){ let users=getUsers(); if(currentUser && users[currentUser.username]){ users[currentUser.username].dp=currentUser.dp; users[currentUser.username].media=currentUser.media; users[currentUser.username].gamesList=currentUser.gamesList; saveUsers(users); } }
    window.uploadProfilePic=(file)=>{ if(!file||!currentUser) return; let reader=new FileReader(); reader.onload=e=>{ currentUser.dp=e.target.result; saveDeveloperData(); document.getElementById('userBadge').innerHTML = currentUser.dp ? `<img src="${currentUser.dp}" style="width:28px;height:28px;border-radius:50%;"> ${currentUser.username.toUpperCase()}` : `🔵 ${currentUser.username.toUpperCase()}`; renderProfileTab(); showToast("Profile pic updated"); }; reader.readAsDataURL(file); };
    window.postDeveloperGame=()=>{ if(!currentUser){ showToast("Set nickname first",true); return; } let name=document.getElementById('devGameName')?.value, price=parseInt(document.getElementById('devGamePrice')?.value), img=document.getElementById('devGameImg')?.value; if(!name||!price||!img){ showToast("Fill all fields",true); return; } let newGame={ id:Date.now(), title:name, price, imageUrl:img, description:"Demo game", seller:currentUser.username }; currentUser.gamesList=currentUser.gamesList||[]; currentUser.gamesList.push(newGame); saveDeveloperData(); renderProfileTab(); renderMarketplace(); showToast("Game posted (demo)"); };
    window.postMedia=()=>{ if(!currentUser) return; let url=document.getElementById('mediaUrl')?.value, type=document.getElementById('mediaType')?.value; if(!url) return; currentUser.media.push({ url, type }); saveDeveloperData(); renderProfileTab(); showToast("Media added"); };
    function renderProfileTab(){ let container=document.getElementById('profileSection'); if(!currentUser){ container.innerHTML=`<p style="color:#aaa;">Set a nickname to enable profile & developer features.</p>`; return; } let devPanel=''; if(currentUser.type==='developer'){ let postedGames=(currentUser.gamesList||[]).map(g=>`<div style="background:#0a1020; margin:8px; padding:8px; border-radius:16px;"><b>${g.title}</b> - TSh ${g.price}<br><img src="${g.imageUrl}" width="60"></div>`).join('')||'<i>No games posted yet</i>'; devPanel=`<div style="margin-top:20px; border-top:1px solid #1E90FF; padding:15px;"><h3>👨‍💻 Developer Dashboard (Demo)</h3><div class="input-group"><input id="devGameName" placeholder="Game Title"></div><div class="input-group"><input id="devGamePrice" placeholder="Price TSh"></div><div class="input-group"><input id="devGameImg" placeholder="Image URL"></div><button class="buy-btn" onclick="postDeveloperGame()">➕ POST GAME FOR SALE</button><h4>Your Games</h4><div>${postedGames}</div><hr><h4>📸 Upload Media URL</h4><input id="mediaUrl" placeholder="Media URL"><select id="mediaType"><option value="image">Image</option><option value="video">Video</option></select><button class="buy-btn" onclick="postMedia()">ADD MEDIA</button><div class="media-gallery">${(currentUser.media||[]).map(m=>`<div class="media-item">${m.type==='image'?`<img src="${m.url}">`:`<video src="${m.url}" controls></video>`}</div>`).join('')}</div></div>`; }
        container.innerHTML=`<div style="text-align:center;"><label class="profile-dp"><img id="profileDpImg" src="${currentUser.dp||'https://placehold.co/80x80/0a2850/00BFFF?text=DP'}" width="80" height="80" style="border-radius:50%; border:3px solid #1E90FF; cursor:pointer;"></label><input type="file" id="dpUpload" accept="image/*" style="display:none"><h2>${currentUser.username}</h2><p>${currentUser.type === 'developer' ? '👨‍💻 Developer' : '🎮 Gamer'}</p>${devPanel}</div>`;
        let fileInput=document.getElementById('dpUpload'); if(fileInput) fileInput.onchange=e=>{ if(e.target.files[0]) window.uploadProfilePic(e.target.files[0]); };
        let dpImg=document.getElementById('profileDpImg'); if(dpImg) dpImg.onclick=()=>document.getElementById('dpUpload').click();
    }
    function renderMarketplace(){ let grid=document.getElementById('marketplaceGrid'); if(!grid) return; let allGames=[]; let users=getUsers(); for(let u in users){ if(users[u].gamesList) allGames.push(...users[u].gamesList); } if(allGames.length===0){ grid.innerHTML='<p>No developer games yet. Become a developer to sell (demo).</p>'; return; } grid.innerHTML=allGames.map(g=>`<div class="market-card"><img class="app-image" src="${g.imageUrl}" onerror="this.src='https://placehold.co/170x130/0a2850/00BFFF?text=Game'"><div class="app-name">${g.title}</div><div class="price-tag">TSh ${g.price}</div><button class="buy-btn" onclick='openGamePurchaseModal("${g.id}","${g.title.replace(/'/g,"\\'")}","${g.imageUrl}",${g.price},"${g.seller}")'>BUY (demo)</button></div>`).join(''); }
    
    let currentSelectedGame = null;
    function openGamePurchaseModal(gameIndex, title, imageUrl, price, customSeller) { 
        currentSelectedGame = { title, price }; 
        let modalImg=document.getElementById('modalImage'); 
        modalImg.src=imageUrl; 
        modalImg.onerror=()=>{ modalImg.src='https://placehold.co/400x240/0a2850/00BFFF?text=cover'; }; 
        document.getElementById('modalTitle').innerHTML=`🔵 ${title}`; 
        document.getElementById('modalInfoText').innerHTML=`<i class="fas fa-info-circle"></i> DEMO MODE - simulated purchase<br>✅ No real payment required`; 
        document.getElementById('gamePriceSpan').innerHTML=`TSh ${price} (demo)`; 
        document.getElementById('infoModal').style.display='flex'; 
    }
    document.getElementById('airtelPurchaseBtn').onclick = () => { showToast("🔁 Demo: simulated payment. No money deducted."); };
    document.getElementById('waNotifyBtn').onclick = () => { showToast("📱 Demo: This would notify admin (simulated)."); };
    
    const fullGameTitles = ["Marvel comic universe-MCU","Resident evil revelation","New MCU Cr","Metal gear solid","FIFA Street 2","Need for Speed","Tekken","Mortal Kombat","Cricket 07","Pro Evolution Soccer","WWE SmackDown","Assassin's Creed","Midnight Club","LEGO Star Wars","Batman","Prince of Persia","Daxter","Ratchet","Silent Hill","Resistance","SOCOM","Syphon Filter","Killzone","Burnout Legends","FlatOut","WipEout Pulse","Gran Turismo","The Sims 2","Harvest Moon","Final Fantasy VII","Kingdom Hearts","Star Wars Force","Dragon Ball Z","Naruto","One Piece","Ben 10","Spider-Man 3","Iron Man 2","Wolverine","Incredible Hulk","Avatar","Toy Story 3","Cars 2","LEGO Indiana Jones"];
    function buildHorizontalScroll(){ let c=document.getElementById('horizontalScrollStrip'); if(c){ c.innerHTML=''; for(let i=1;i<=44;i++){ let div=document.createElement('div'); div.className='scroll-item'; div.innerHTML=`<img src="${i}.jpeg" onerror="this.src='https://placehold.co/140x100/0a2850/00BFFF?text=${i}'"><span>${fullGameTitles[i-1].substring(0,14)}</span>`; div.onclick=()=>openGamePurchaseModal(i,fullGameTitles[i-1],`${i}.jpeg`,2500,null); c.appendChild(div); } } }
    function buildFullImageGrid(){ let c=document.getElementById('fortyFourGrid'); if(c){ c.innerHTML=''; for(let i=1;i<=44;i++){ let card=document.createElement('div'); card.className='game-image-card'; card.innerHTML=`<img src="${i}.jpeg" onerror="this.src='https://placehold.co/180x100/0a2850/00BFFF?text=IMG'"><div>🎮 ${fullGameTitles[i-1].substring(0,16)}</div>`; card.onclick=()=>{ card.classList.add('fire-blast'); setTimeout(()=>card.classList.remove('fire-blast'),500); openGamePurchaseModal(i,fullGameTitles[i-1],`${i}.jpeg`,2500,null); }; c.appendChild(card); } } }
    function buildFullGamesGrid(){ let grid=document.getElementById('fullGamesGrid'); if(grid){ grid.innerHTML=''; for(let i=0;i<fullGameTitles.length;i++){ let card=document.createElement('div'); card.className='app-card'; card.innerHTML=`<img class="app-image" src="${i+1}.jpeg" onerror="this.src='https://placehold.co/170x130/0a2850/00BFFF?text=cover'"><div>${fullGameTitles[i]}</div><div>TSh 2500</div><button class="buy-btn">BUY DEMO</button>`; card.querySelector('button').onclick=()=>openGamePurchaseModal(i+1,fullGameTitles[i],`${i+1}.jpeg`,2500,null); grid.appendChild(card); } } }
    
    // MOVIE GALLERY: paginated, MP4 first, error fallback, simple cards (working)
    const allMoviesData = [];
    for (let i=1; i<=100; i++) {
        let genre = i<=33 ? 'action' : (i<=66 ? 'sci-fi' : 'bongo');
        let genreLabel = genre==='action'?'ACTION':(genre==='sci-fi'?'SCI-FI':'BONGO');
        allMoviesData.push({ id: i, genre, genreLabel, fileMP4: `${i}.mp4`, fileMOV: `${i}.mov` });
    }
    let currentPage = 1;
    const pageSize = 20;
    let activeGenre = 'all';
    let searchTerm = '';
    
    function renderMovieGrid() {
        const container = document.getElementById('movieGridContainer');
        if (!container) return;
        let filtered = allMoviesData.filter(m => {
            if (activeGenre !== 'all' && m.genre !== activeGenre) return false;
            if (searchTerm) return m.id.toString().includes(searchTerm) || `movie ${m.id}`.includes(searchTerm.toLowerCase());
            return true;
        });
        const end = currentPage * pageSize;
        const paginated = filtered.slice(0, end);
        if (paginated.length === 0) { container.innerHTML = `<div style="text-align:center; grid-column:1/-1;">🎬 No videos found</div>`; return; }
        container.innerHTML = paginated.map(m => `
            <div class="movie-card">
                <video controls preload="metadata" playsinline poster="https://placehold.co/320x200/0a2850/00BFFF?text=${m.id}" onerror="this.style.display='none'; this.parentElement.innerHTML+='<p style=color:#ff8888;font-size:12px;>⚠️ Video file missing</p>'">
                    <source src="${m.fileMP4}" type="video/mp4">
                    <source src="${m.fileMOV}" type="video/quicktime">
                    Your browser does not support video.
                </video>
                <p>🎬 Demo Movie #${m.id} <span class="movie-badge">${m.genreLabel}</span></p>
            </div>
        `).join('');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (filtered.length <= end) loadMoreBtn.style.display = 'none';
        else loadMoreBtn.style.display = 'block';
    }
    document.getElementById('loadMoreBtn')?.addEventListener('click', () => { currentPage++; renderMovieGrid(); });
    function setupMovieFilters() {
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                activeGenre = btn.getAttribute('data-genre');
                currentPage = 1;
                renderMovieGrid();
            });
        });
        document.getElementById('movieSearchInput')?.addEventListener('input', (e) => { searchTerm = e.target.value.trim(); currentPage = 1; renderMovieGrid(); });
        renderMovieGrid();
    }
    
    function initBackgroundAudio() {
        const audio = document.getElementById('bgAudio');
        const btn = document.getElementById('audioControl');
        if (!audio) return;
        let playing = false;
        function playAudio() { audio.play().then(()=>{ playing=true; btn.innerHTML='🎵 🔊 Music'; }).catch(()=>{ btn.innerHTML='🎵 🔇 Tap to play'; }); }
        function pauseAudio() { audio.pause(); playing=false; btn.innerHTML='🎵 🔈 Music'; }
        btn.onclick = (e) => { e.stopPropagation(); playing ? pauseAudio() : playAudio(); };
        playAudio();
        document.addEventListener('click', () => { if (!playing && audio.paused) playAudio(); }, { once: true });
        document.addEventListener('touchstart', () => { if (!playing && audio.paused) playAudio(); }, { once: true });
    }
    
    function initTabs() {
        document.querySelectorAll('.nav-btn[data-tab]').forEach(btn => {
            btn.addEventListener('click', () => {
                let tab = btn.dataset.tab;
                document.getElementById('galleryTab').style.display = tab==='gallery' ? 'block' : 'none';
                document.getElementById('gamesTab').style.display = tab==='games' ? 'block' : 'none';
                document.getElementById('marketTab').style.display = tab==='market' ? 'block' : 'none';
                document.getElementById('videosTab').style.display = tab==='videos' ? 'block' : 'none';
                document.getElementById('profileTab').style.display = tab==='profile' ? 'block' : 'none';
                document.getElementById('viralTab').style.display = tab==='viral' ? 'block' : 'none';
                document.getElementById('communityTab').style.display = tab==='community' ? 'block' : 'none';
                document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('active'));
                btn.classList.add('active');
                if(tab==='profile') renderProfileTab();
                if(tab==='market') renderMarketplace();
            });
        });
    }
    
    document.getElementById('commentForm')?.addEventListener('submit',(e)=>{ e.preventDefault(); let name=document.getElementById('commentName').value; let msg=document.getElementById('commentMsg').value; if(!name||!msg){ showToast("Fill name & message",true); return; } window.location.href=`mailto:nashonabel@outlook.com?subject=${encodeURIComponent(`NAXCA Demo: ${name}`)}&body=${encodeURIComponent(msg)}`; showToast("Opening email client (demo)"); });
    window.closeInfoModal = (e) => { if(e.target.classList.contains('info-modal')) e.target.style.display='none'; };
    window.forceCloseInfoModal = () => { document.getElementById('infoModal').style.display='none'; };
    
    document.addEventListener('DOMContentLoaded', () => {
        let saved = localStorage.getItem('naxca_demo_user');
        if(saved) {
            try {
                let u = JSON.parse(saved);
                currentUser = { username: u.username, type: u.type, dp: '', media: [], gamesList: [] };
                document.getElementById('userBadge').innerHTML = `🔵 ${u.username.toUpperCase()} (${u.type==='developer'?'👨‍💻':'🎮'})`;
                renderProfileTab();
                renderMarketplace();
                loadUserData();
            } catch(e) {}
        }
        buildHorizontalScroll();
        buildFullImageGrid();
        buildFullGamesGrid();
        setupMovieFilters();
        initTabs();
        checkReferral();
        initBackgroundAudio();
        const annVideo = document.getElementById('announcementVideo');
        if(annVideo) annVideo.onerror = () => annVideo.parentElement.innerHTML += '<p style="color:red;">Video file missing (x.mp4/x.mov)</p>';
        // Script selector for viral tab
        document.getElementById('scriptSelector').addEventListener('change',function(){ document.getElementById('scriptText').innerText=this.value==='1'?"NAXCA: 44 games + Movie Box (Action/Sci-Fi/Bongo) + Developer marketplace!":"Earn TSh200 per referral!"; });
        document.getElementById('scriptText').innerText="NAXCA: 44 games + Movie Box with categories!";
    });
    window.copyScript=function(){ let sel=document.getElementById('scriptSelector').value; let txt=sel==='1'?"NAXCA: 44 PSP games + MOVIE BOX (100 movies, Action/Sci-Fi/Bongo) + Search. Airtel 0680737370.":"Referral: Earn TSh200 per friend. Join NAXCA!"; navigator.clipboard.writeText(txt); showToast("Script copied"); };
</script>
</body>
</html>
```

This version keeps everything working and only adds the movie box exactly as you originally wanted – vertical grid, genre filters (Action/Sci-Fi/Bongo), search, and pagination (Load More). No YouTube card redesign, no broken elements. Just copy, save as .html, and open. All original features (games, marketplace, profile, viral, background music) remain untouched.
