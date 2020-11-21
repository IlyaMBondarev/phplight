
<?php if (isset($result)): ?>
    <h3>Полученный результат: <?= $result ?></h3>
<?php endif; ?>

<form method="post" style="display: flex; flex-direction: column; align-items: flex-start; margin: 30px;">
    <label style="margin-bottom: 10px">Первое число:<input type="number" value="<?= isset($a) ? $a : ''?>" name="a">
        <?php if (isset($errors['a'])): ?>
            <span style="color: red;"><?= $errors['a'] ?></span>
        <?php endif; ?>
    </label>
    <label style="margin-bottom: 10px">Второе число:<input type="number" value="<?= isset($b) ? $b : ''?>" name="b">
        <?php if (isset($errors['b'])): ?>
            <span style="color: red;"><?= $errors['b'] ?></span>
        <?php endif; ?>
    </label>
    <label style="margin-bottom: 10px"><input type="radio" value="плюс" name="action" <?= isset($action) && $action === 'плюс' ? 'checked' : '' ?> >Плюс</label>
    <label style="margin-bottom: 10px"><input type="radio" value="минус" name="action" <?= isset($action) && $action === 'минус' ? 'checked' : '' ?> >Минус</label>
    <label style="margin-bottom: 10px"><input type="radio" value="умножить на" name="action" <?= isset($action) && $action === 'умножить на' ? 'checked' : '' ?> >Умножить</label>
    <label style="margin-bottom: 10px"><input type="radio" value="разделить на" name="action" <?= isset($action) && $action === 'разделить на' ? 'checked' : '' ?> >Разделить</label>
    <button type="submit">Посчитать</button>
</form>