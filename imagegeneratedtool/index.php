<?php
include './config.php';
if (!isset ($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PixelAI - Image Generator</title>
<link rel="stylesheet" href="./assets/style.css">


</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar" id="sidebar">

    <div class="logo">✦ Pixel<span>AI</span></div>

    <button class="new-btn" onclick="newProject()">
        + New Image
    </button>

    <div class="menu-title">WORKSPACE</div>

    <a href="#" class="menu-item active">⌂ &nbsp; Home</a>
    <a href="#gallery" class="menu-item">▧ &nbsp; Explore Gallery</a>
    <a href="#" class="menu-item">◷ &nbsp; History</a>
    <a href="#" class="menu-item">♡ &nbsp; Favorites</a>

    <div class="menu-title">TOOLS</div>

    <a href="#" class="menu-item">✧ &nbsp; AI Generator</a>
    <a href="#" class="menu-item">⤢ &nbsp; Image Upscaler</a>
    <a href="#" class="menu-item">✎ &nbsp; AI Editor</a>

    <div class="profile">
        <div class="avatar">U</div>
        <div>
            <strong>My Account</strong>
            <p style="font-size:12px;color:#64748b;margin-top:4px">
                Free Plan
            </p>
        </div>
    </div>

</aside>

<!-- MAIN -->

<main class="main">

    <header class="topbar">

        <div style="display:flex;align-items:center;gap:15px">

            <button class="mobile-btn" onclick="toggleSidebar()">
                ☰
            </button>

            <input type="search" class="search"
            id="search" placeholder="⌕ Search images..."
            oninput="searchImages()">

        </div>

       <a href="./logout.php"><button class="upgrade-btn">
        Click to logout
       </button></a>

    </header>

    <div class="content">

        <section class="welcome">
            <h1>Create something <span class="gradient">amazing.</span></h1>
            <p>
                Turn your imagination into stunning AI-generated artwork.
                Just describe your vision.
            </p>
        </section>

        <!-- GENERATOR -->

        <section class="generator" id="generator">

            <h3>✦ Describe your image</h3>

            <textarea id="prompt"
            placeholder="A futuristic city at sunset, cinematic lighting, ultra realistic, 8K details..."></textarea>

            <div class="generator-footer">

                <div class="options">

                    <select id="style">
                        <option>Realistic</option>
                        <option>Anime</option>
                        <option>Digital Art</option>
                        <option>3D Render</option>
                        <option>Oil Painting</option>
                    </select>

                    <select id="ratio">
                        <option>1:1 Square</option>
                        <option>16:9 Landscape</option>
                        <option>9:16 Portrait</option>
                    </select>

                </div>

                <button class="generate" onclick="generateImage()">
                    ✧ Generate Image
                </button>

            </div>

        </section>

        <div class="loader" id="loader">
            <div class="spinner"></div>
            Creating your masterpiece...
        </div>

        <!-- CATEGORIES -->

        <div class="section-heading">
            <h2>Explore Styles</h2>
            <a href="#gallery">Explore All →</a>
        </div>

        <div class="categories">

            <button class="category active"
            onclick="filterImages('all',this)">All</button>

            <button class="category"
            onclick="filterImages('Nature',this)">Nature</button>

            <button class="category"
            onclick="filterImages('Portrait',this)">Portraits</button>

            <button class="category"
            onclick="filterImages('Architecture',this)">Architecture</button>

            <button class="category"
            onclick="filterImages('Fantasy',this)">Fantasy</button>

            <button class="category"
            onclick="filterImages('Digital Art',this)">Digital Art</button>

        </div>

        <!-- IMAGE GALLERY -->

        <div class="section-heading" id="gallery">
            <h2>Discover Creations</h2>
            <a href="#generator">Create Your Own →</a>
        </div>

        <div class="gallery" id="galleryGrid">

            <div class="image-card" data-category="Nature"
            data-name="mountain landscape">
                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=700" alt="Mountain">
                <div class="overlay">
                    <h3>Mountain Dreams</h3>
                    <p>Nature · AI Artwork</p>
                </div>
            </div>

            <div class="image-card" data-category="Architecture"
            data-name="modern architecture">
                <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?w=700" alt="Architecture">
                <div class="overlay">
                    <h3>Modern Architecture</h3>
                    <p>Architecture · Digital Art</p>
                </div>
            </div>

            <div class="image-card" data-category="Fantasy"
            data-name="fantasy landscape">
                <img src="https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=700" alt="Fantasy">
                <div class="overlay">
                    <h3>Fantasy World</h3>
                    <p>Fantasy · AI Artwork</p>
                </div>
            </div>

            <div class="image-card" data-category="Portrait"
            data-name="portrait photography">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=700" alt="Portrait">
                <div class="overlay">
                    <h3>Portrait Beauty</h3>
                    <p>Portrait · Photography</p>
                </div>
            </div>

            <div class="image-card" data-category="Nature"
            data-name="forest nature">
                <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=700" alt="Forest">
                <div class="overlay">
                    <h3>Forest Serenity</h3>
                    <p>Nature · Landscape</p>
                </div>
            </div>

            <div class="image-card" data-category="Digital Art"
            data-name="abstract art">
                <img src="https://images.unsplash.com/photo-1549490349-8643362247b5?w=700" alt="Abstract">
                <div class="overlay">
                    <h3>Abstract Universe</h3>
                    <p>Digital Art · Creative</p>
                </div>
            </div>

        </div>

    </div>

</main>



</body>
<script src="./assets/script.js"></script>
</html>

