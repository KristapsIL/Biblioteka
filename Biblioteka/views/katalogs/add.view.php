<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Pasākumi Create</h1>
    <form method="POST">
        <label>Nosaukums:
            <input name='nosaukums' />
        </label>
        <label>Autors:
            <input name='autors' />
        </label>
        <label>gads:
            <input type="date" name='year'/>
        </label>
        <label>pieejamiba:
            <input type="checkbox" name='availability'/>
        </label>
        <button >Submit</button>
    </form>
<?php require "views/components/footer.php" ?>