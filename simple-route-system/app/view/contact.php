<?php $this->layout('main')?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="name" id="name" placeholder="Your name">
    <input type="email" name="email" id="email" placeholder="example@email.com">
    <button type="submit">Enviar</button>
</form>