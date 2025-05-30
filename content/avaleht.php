<?php
// eemalda urlist muutujad
function clearVarsExcept($url, $varname) {
    // basename - makes the link relative, url must contain a filename that it returns basename('http://www.ee/index.php') > index.php
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=".$_REQUEST[$varname];
    }
    // strtok - returns first token after spliting on separator "?" strtoken('index.php?haha=lala', '?') > index.php
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
?>
<div class="container">
    <div class="flexcontainer">
        <div id="pealkiri">
            <br>
            <br>
            <br>
            <h1>PHP tööd</h1>
            <h3>Anna Oleks</h3>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="deercontainer">
            <img src="content/deer.png" alt="deer" id="deer">
        </div>
    </div>
    <div class="card-container">
        <a href="?leht=matemTehted.php" class="card">
            <h4>Matemaatilised tehed</h4>
            <p>Mõned sageli kasutatavad matemaatilised funktsioonid</p>
        </a>
        <a href="?leht=tekstFunktsioonid.php" class="card">
            <h4>Teksti funktisoonid</h4>
            <p>Mõned sageli kasutatavad tektiga seotud funktsioonid</p>
        </a>
        <a href="?leht=ajaFunktsioonid.php"  class="card">
            <h4>Aja funktsioonid</h4>
            <p>Mõned sageli kasutatavad ajaga seotud funktsioonid</p>
        </a>
    </div>
    <div class="card-container">
        <a href="https://annaoleks24.thkit.ee/PHP/piltHaaletamine/fotoKonkursPildiValik.php"  class="card">
            <h4>Foto konkurss</h4>
            <p>Tehtud fotokonkursi leht</p>
        </a>
        <a href="https://annaoleks24.thkit.ee/PHP/xmlPHPprojekt/rss_uudised.php" class="card">
            <h4>XML projekt</h4>
            <p>RSS uudised / XML lugemine</p>
        </a>
        <a href="https://annaoleks24.thkit.ee/PHP/KaubadKaubagrupid/kaubaotsing.php" class="card">
            <h4>Kaubad</h4>
            <p>Kaubad / Kaubagrupid</p>
        </a>
    </div>
</div>





