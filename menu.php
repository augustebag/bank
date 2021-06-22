<div>
    <a href="?action=addAccount">Pridėti naują sąskaitą</a>
    <a href="http://localhost/bank/member.php">Darbuotojo paskyra</a>
    <?php if (!isset($_SESSION['prisijunges'])) : ?>
    <a href="http://localhost/bank/login.php">Prisijungti</a>
    <?php else : ?>
        <a href="http://localhost/bank/login.php?logout">Atsijungti</a>
</div>
    <?php endif ?>