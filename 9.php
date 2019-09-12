<?php
$header_color = "#6e3667";
$body_color = "#f4f4f4";
$footer_color = "#1a0315";
$footer_link_color = "#fff";
$level1_color = "#88d317";
$btn_color = "#88d317";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            background-color: <?= $body_color ?>;
            line-height: 1.5;
        }

        #main {
            max-width: 960px;
            margin: 0 auto;
        }

        #header {
            height: 40px;
            background-color: <?= $header_color ?>;
            color: white;
            left: 0;
            line-height: 1;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 24;
        }

        #contents {
            padding: 56px 8px 16px;
        }

        #footer {
            padding: 40px 10px;
            background-color: <?= $footer_color ?>;
        }

        #footer-inner {
            max-width: 960px;
            margin: 0 auto;
            padding: 10px 10px;
        }

        #footer-inner a {
            text-decoration: none;
            color: <?= $footer_link_color ?>;
        }

        .footer-menu {
            display: flex;
            justify-content: center;
        }

        .footer-menu li {
            padding: 0 10px;
        }

        .header-title {
            text-align: center;
            padding: 12px;
        }

        .level-1 {
            font-weight: bold;
            font-size: 18px;
            border-left: 6px solid<?= $level1_color ?>;
            padding: 4px 16px;
            margin-bottom: 20px;
        }

        .container {
            font-family: "Yu Gothic", YuGothic, Verdana, 'Hiragino Kaku Gothic ProN', 'Hiragino Kaku Gothic Pro', 'ヒラギノ角ゴ Pro W3', 'メイリオ', Meiryo, sans-serif;
            text-align: center;
            padding-top: 40px;
        }

        .article li {
            padding: 12px 0;
        }

        /* ここから下がボタンのCSS　*/
        .btn-icon {
            display: inline-block;
            max-width: 180px;
            text-align: left;
            background-color: <?= $btn_color ?>;
            font-size: 16px;
            color: #FFF;
            text-decoration: none;
            font-weight: bold;
            padding: 16px 32px 16px 48px;
            border-radius: 10px;
            position: relative;
        }

        .btn-icon:before {
            /*font-family: "FontAwesome";*/
            content: "●"; /* 好きなフォントアイコンを　*/
            position: absolute;
            left: 16px;
            top: 50%;
            margin-top: -8px;
        }

        .btn-icon:hover {
            opacity: 0.8;
        }
    </style>
    <link rel="shortcut icon" href="">
</head>
<body>
<div id="main">
    <div id="header">
        <div class="header-title">HOME</div>
    </div>
    <div id="contents">
        <h1 class="level-1">今日のやふぅにゅ～す</h1>
        <ul class="article">
            <li>
                国内女子ツアーの今季メジャー第2戦「日本女子プロゴルフ選手権コニカミノルタ杯」初日に、渋野日向子がまた新たな“勲章”を手にした。5バーディ・3ボギーの2アンダーでホールアウトし、6月の「ニチレイレディス」第1ラウンド（R）から続いている国内女子ツアーでのオーバーパーなし記録を「29R」に伸ばした。
            </li>
            <li>菅義偉官房長官は１２日の記者会見で、台風１５号による千葉県を中心とした大規模停電について、作業員約１万１０００人を動員し、昼夜を通して復旧作業を行っていることを明らかにした。</li>
            <li>
                ロックバンド「氣志團」のボーカル・綾小路翔（４１）が１２日までに自身のインスタグラムを更新。台風１５号の影響で出身地の千葉県君津市などが大きな被害を受ける中、１４、１５日に千葉県袖ケ浦海浜公園で開催予定の野外フェス「気志團万博」への思いをつづった。
            </li>
            <li>
                お笑いコンビ・アンジャッシュが12日、東京・赤城神社で行われた映画『僕のワンダフル・ジャーニー』（13日公開）のヒット祈願イベントに出席。作風になぞらえて「生まれ変わるなら何になりたい？」との質問に渡部建が「児嶋（一哉）さんかな」と、相方を指名する一幕があった。
            </li>
        </ul>
        <div class="container">
            <a href="#" class="btn-icon">ボタン</a>
        </div>
    </div>
</div>
<div id="footer">
    <div id="footer-inner">
        <ul class="footer-menu">
            <li><a href="#">メニュー1</a></li>
            <li><a href="#">メニュー2</a></li>
            <li><a href="#">メニュー3</a></li>
            <li><a href="#">メニュー4</a></li>
        </ul>
    </div>
</div>
</body>
</html>
