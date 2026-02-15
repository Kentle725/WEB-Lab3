<?php session_start(); ?>
<?php if(isset($_SESSION['errors'])): ?>
    <ul style="color:red;">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['patient_name'])): ?>
	<p>Данные из сессии:</p>
	<ul>
		<li>Имя пациента: <?= $_SESSION['patient_name'] ?></li>
		<li>Возраст: <?= $_SESSION['age'] ?></li>
		<li>Врач: <?= $_SESSION['doctor'] ?></li>
		<li>Первая консультация: <?= $_SESSION['first_consultation'] ?></li>
		<li>Форма визита: <?= $_SESSION['visit_form'] ?></li>
	</ul>
<?php else: ?>
	<p>Данных пока нет.</p>
<?php endif; ?>
<a href="form.html">Заполнить форму</a> |
<a href="view.php">Посмотреть все данные</a>