<div class="menu">
    <img class="img" src="./img/bank1.jpg" alt="logo">
    <a href="?action=addAccount">Pridėti naują sąskaitą</a>
    <a href="http://localhost/bank/member.php">Saskaitų sąrašas</a>
    <?php if (!isset($_SESSION['prisijunges'])) : ?>
    <a href="http://localhost/bank/login.php">Prisijungti</a>
    <?php else : ?>
    <a  href="http://localhost/bank/login.php?logout">Atsijungti</a>
    <?php endif ?>
</div>