</div>
    <a href="http://localhost/bank/home.php">Pagrindinis puslapis</a>
    <a href="?action=addAccount">Pridėti naują sąskaitą</a>
    <a href="http://localhost/bank/member.php">Narys</a>
    <?php if(!isset($_SESSION['prisijunges'])) : ?>
    <a href="http://localhost/bank/login.php">Prisijungti</a>
    <? else  : ?>
        <a href="http://localhost/bank/login.php?logout">Atsijungti</a>
<div>
    <?php endif ?>