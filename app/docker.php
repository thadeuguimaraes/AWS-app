<?php foreach ($services as $service): ?>
    <?php $status = exec("docker inspect --format={{.State.Running}} $service[unit] 2> /dev/null"); ?>
    <?php echo "!$status!"; ?>
    <?php if ($status == "true"): ?>
        <td align="center"
        <button class="button-active" onClick='location.href="?stop=<?= $service['unit'] ?>"'>
        <?= $service['title'] ?> <br>
        <img border="0" src="plugins/images/tabs/<?= $service['icon'] ?>.png" width="40" height="40"></td></button>
    <?php else: ?>
        <td align="center"
        <button class="button-inactive" onClick='location.href="?start=<?= $service['unit'] ?>"'>
            <?= $service['title'] ?> <br>
        <img border="0" src="plugins/images/tabs/<?= $service['icon'] ?>.png" width="40" height="40"></td></button>
    <?php endif ?>
<?php endforeach ?>