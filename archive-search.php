<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1" />    
<title>Hamburger</title>
<link rel="stylesheet" href="sass/Foundation/ress-master/ress.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css"
 href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
<link rel="stylesheet" type="text/css"
 href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
<meta name="description" content="ハンバーガーサイト" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/sideber-menu.js"></script>
</head>
<body>
<div class="l-wrapper">
   <div class="l-left-wrapper l-justify-left l-direction-column">
     <header class="l-header">
        <h1>Hamburger</h1>
      <form class="c-Search-form" action=""  method="post">
        <input class="c-search-box" type="search" name="search"></imput>
        <input class="c-search-btn" type="submit" value="検索"></imput>
      </form>
     </header>
       <div class="c-top-img">
           <img class="pc-top" src="imge/menu-top.png" alt="top">
           <img class="tab-top" src="imge/tab-menu-top.png" alt="top">
           <img class="sp-top" src="imge/sp-menu-top.png" alt="top">
           <div class="top-title">
           <h3>Search:</h3>
           <?php echo'<p>'; echo $_POST["search"]; echo'</p>'; ?>
           </div>
       </div>
     <main class="l-archive">
       <div class="l-archive-content">
         <h4>小見出しが入ります</h4>
         <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
       </div>
       <div class="l-archive-nav l-direction-column">
       <?php
             $archive = array(
                array(
                 '小見出し' => '小見出しが入ります',
                 'テキスト' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
               ),
                array(
                '小見出し' => '小見出しが入ります',
                'テキスト' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
              ),
               array(
                '小見出し' => '小見出しが入ります',
                'テキスト' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
              ),
               array(
                '小見出し' => '小見出しが入ります',
                'テキスト' => 'テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。',
              ),
             );
             foreach( $archive as  $arr ){
             $index = $arr['小見出し'];
             $text = $arr['テキスト'];
        echo '<div class="p-archive-nav">';
           echo '<img src="imge/archive.png" alt="archive-img">';
           echo '<div class="archive-nav-info l-direction-column">';
             echo '<h5>' .$_POST["search"]. '</h5>';
             echo'<h6>' .$index. '</h6>';
             echo '<p>' .$text. '</p>';
            echo '<a href="#" class="c-archive-nav-btn">詳しく見る</a>';
            echo '</div>';           
         echo '</div>';
        };
        ?>
       </div>
       <div class="l-pagination l-justify-center">
        <ul >
          <li class="now-page">page1/10</li>
          <li class="go-page"><a><img src="imge/befor-page.png"></a></li>
          <li class="sp-go-page"><a><img src="imge/befor-page.png">前へ</a></li>
          <li class="this page-nanber">1</li>
          <li class="page-nanber"><a href="#">2</a></li>
          <li class="page-nanber"><a href="#">3</a></li>
          <li class="page-nanber"><a href="#">4</a></li>
          <li class="page-nanber"><a href="#">5</a></li>
          <li class="page-nanber"><a href="#">6</a></li>
          <li class="page-nanber"><a href="#">7</a></li>
          <li class="page-nanber"><a href="#">8</a></li>
          <li class="page-nanber"><a href="#">9</a></li>
          <li class="go-page"><a href="#"><img src="imge/next-page.png"></a></li>
          <li class="sp-go-page"><a href="#">次へ<img src="imge/next-page.png"></a></li>
        </ul>
       </div>
     </main>
   </div>
 <aside class="l-sideber right-wrapper">
  <nav class="sideber-list">
    <ul>
        <li>バーガー
            <ul>
                <li><a href="#">ハンバーガー</a></li>
                <li><a href="#">チーズバーガー</a></li>
                <li><a href="#">テリヤキバーガー</a></li>
                <li><a href="#">アボガドバーガー</a></li>
                <li><a href="#">フィッシュバーガー</a></li>
                <li><a href="#">ベーコンバーガー</a></li>
                <li><a href="#">チキンバーガー</a></li>
            </ul>
        </li>
        <li>サイド
            <ul>
                <li><a href="#">ポテト</a></li>
                <li><a href="#">サラダ</a></li>
                <li><a href="#">ナゲット</a></li>
                <li><a href="#">コーン</a></li>
            </ul>
        </li>
        <li>ドリンク
            <ul>
                <li><a href="#">コーラ</a></li>
                <li><a href="#">ファンタ</a></li>
                <li><a href="#">オレンジ</a></li>
                <li><a href="#">アップル</a></li>
                <li><a href="#">紅茶（Ice/Hot）</a></li>
                <li><a href="#">コーヒー（Ice/Hot）</a></li>
            </ul>
        </li>
    </ul>
  </nav>
 </aside>
</div>
<button class="c-nav-toggle">
    <h2>Menu</h2>
    <span></span>
</button>
<footer class="l-footer l-justify-center">
  <div class="l-footer-nav l-direction-column">  
    <a href="#">ショップ情報|ヒストリー</a>
    <p>Company RaiseTech</p>
  </div> 
</footer>  
<div class="l-mask"></div>
</body> 