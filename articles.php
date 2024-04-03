<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/saba.png">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/articles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&display=swap" rel="stylesheet">
    <title>作品</title>
</head>
<body>
    <?php include "templates/header.html"?>
    <main>
        <content>
            <h1 id="pagetitle">記事</h1>
            <div class="article-flow">
                <div class="articles-leftArrow">
                    <a>＜</a>
                </div>
                <ul class="articles-page-list">
                    <li class="currentPage"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>4</a></li>
                    <li><a>5</a></li>
                    <li>...</li>
                    <li><a>9</a></li>
                    <li><a>10</a></li>
                </ul>
                <div class="articles-rightArrow">
                    <a>＞</a>
                </div>
            </div>
            <div id="article-list">
                <a href=article1.html class="article">
                    <div class="article-image">
                        <img src="images/articleImages/一人部屋３（日中）.jpg" >
                    </div>
                    <div class="article-text">
                        <div class="article-title">テストテストテストテストテストテストテスト</div>
                        <div class="article-bottom">
                            <div class="article-date">2024/02/05</div>
                            <ul class="article-tags">
                                <li>雑学</li>
                                <li>暗殺</li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href=article1.html class="article">
                    <div class="article-image">
                        <img src="images/articleImages/一人部屋３（日中）.jpg" >
                    </div>
                    <div class="article-text">
                        <div class="article-title">テストテストテストテストテストテストテスト</div>
                        <div class="article-bottom">
                            <div class="article-date">2024/02/05</div>
                            <ul class="article-tags">
                                <li>雑学</li>
                                <li>暗殺</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </content>
        <?php include "templates/aside.html"?>
    </main>
    <footer>
    <?php include "templates/footer.html"?>
</body>
</html>