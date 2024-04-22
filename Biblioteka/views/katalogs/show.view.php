<?php require "views/components/head.php" ?>
    <?php if($_SESSION["role"] == "admin") {require "views/components/navbar.php";} ?>

    <h1><?= htmlspecialchars($posts["name"]) ?></h1>
    <p><?= htmlspecialchars($posts["author"]) ?></p>
    <p><?= htmlspecialchars($posts["year"]) ?></p>
    <p><?= $posts["availability"] == 1 ? "available" : "Not available"?></p>
            <p><?php if($posts["availability"] == 1){ ?>
                <form method="POST" action="/reserve">
                <button name="id" value=" <?= $posts['id'] ?>">Borrow</button>
                </form>
                <?php } else {?>
                    <form method="POST" action="/putback">
                <button name="id" value=" <?= $posts['id'] ?>">Putback</button>
                </form>
                <?php } ?>
            </p>
    <?php if($_SESSION["role"] == "admin") { ?>
    <label>
        <form class="delete-form" method="POST" action="/delete">
            <Button name="id" value=" <?= $_GET['id'] ?>">Delete</Button>
        </form>
        <form class="edit-form" action="/edit">
            <Button name="id" value=" <?= $_GET['id'] ?>">edit</Button>
        </form>
    </label>
    <?php } ?>

    

<?php require "views/components/footer.php" ?>