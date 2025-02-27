<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kimbiiz</title>
    <meta property="og:title" content="Kimbiiz - Connexion">
    <meta property="og:description" content="Page de connexion à Kimbiiz.">
    <meta property="og:image" content="URL_de_votre_image">
    <meta property="og:url" content="URL_de_votre_page">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="URL_de_votre_image">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <div class="logo-circle">
                <img src="logo.png" style="width:100%; height:100%; border-radius:50%;">
            </div>
            <div class="logo-text">Kimbiiz</div>
        </div>
        <div class="button-container">
            <a href="#" class="button">Me connecter</a>
        </div>
    </header>
    <style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background-color: #fff;
    border-bottom: 1px solid #ccc;
}

.logo {
    display: flex;
    align-items: center;
    margin-right: 20px;
}

.logo-circle {
    width: 40px;
    height: 40px;
    background-color: blue;
    border-radius: 50%;
    margin-right: 10px;
}

.logo-text {
    font-size: 24px;
    font-weight: bold;
    color: blue;
}

.button-container {
    display: flex;
    justify-content: flex-end;
    flex-grow: 1;
}

.button {
    padding: 10px 20px;
    background-color: blue;
    color: white;
    border: 2px solid blue;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}

.button:hover {
    background-color: white;
    color: blue;
}

/* Main Blog Section */
.blog-container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.blog-left {
    width: 70%;
}

.blog-right {
    width: 25%;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.blog-right h2 {
    font-size: 18px;
    margin-bottom: 20px;
}

.search-item {
    margin-bottom: 15px;
}

.search-item a {
    font-size: 16px;
    color: blue;
    text-decoration: none;
}

.search-item a:hover {
    text-decoration: underline;
}

.search-item span {
    font-size: 14px;
    color: #888;
}

/* Article Section */
.article {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.article h2 {
    font-size: 22px;
    color: #333;
}

.article .date {
    font-size: 14px;
    color: #888;
}

.read-more {
    color: blue;
    text-decoration: none;
    font-weight: bold;
}

.read-more:hover {
    text-decoration: underline;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .blog-container {
        flex-direction: column;
    }

    .blog-left {
        width: 100%;
        margin-bottom: 20px;
    }

    .blog-right {
        width: 100%;
    }
}

    </style>