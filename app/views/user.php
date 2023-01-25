<?php $this->layout('master', ['title' => $title]) ?>

<h1>User</h1>

<form action="/user/update/12" method="post">

    <input type="text" name="firstName" value="Gui">
    <input type="text" name="lastName" value="Amaral">
    <input type="text" name="email" value="gui@teste.com">
    <input type="password" name="password" value="1234">
    <button type="submit">Atualizar</button>

</form>
