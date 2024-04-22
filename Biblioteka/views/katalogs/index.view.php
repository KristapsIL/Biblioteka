<?php require "views/components/head.php" ?>
    <?php if($_SESSION["role"] == "admin"){ 
        require "views/components/navbar.php";
        } ?>
    <table>
        <tr>
            <th>Nosaukums</th>
            <th>Autors</th>
            <th>Gads</th>
            <th>Pieejamiba</th>
        </tr>
        <?php foreach($posts as $post){ ?>
        <tr>
            <td><a  href="/show?id=<?= $post['id']?>"><?= $post["name"]?></td>
            <td><?= $post["author"]?></td>
            <td><?= $post["year"]?></td>
            <td><?= $post["availability"] == 1 ? "available" : "Not available"?></td>
            <td><?php if($post["availability"] == 1){ ?>
                <form method="POST" action="/reserve">
                <button name="id" value=" <?= $post['id'] ?>">Borrow</button>
                </form>
                <?php } else {?>
                    <form method="POST" action="/putback">
                <button name="id" value=" <?= $post['id'] ?>">Putback</button>
                </form>
                <?php } ?>
            </td>
            <?php if($_SESSION["role"] == "admin"){ ?>
            <td>
            <form method="POST" action="/delete">
                <button name="id" value=" <?= $post['id'] ?>">Delete</button>
                </form>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    <form method="POST" action="/logout">
    <button>Logout
    </button>
    </form>

<?php require "views/components/footer.php" ?>