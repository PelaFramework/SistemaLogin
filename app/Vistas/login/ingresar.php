<?php use Configuracion\Idiomas; ?>

<div class="page-header">
    <h1><?php echo $data['titulo'] ?></h1>
</div>

<form method="post">
        <div><?php echo \Configuracion\Error::mostrarError($error); ?></div>
            <div><input type="email" name="usuario" placeholder="Usuario" /></div>
            <div><input type="password" name="password" placeholder="Contraseña" /></div>
    <button type="submit" name="submit" class='btn btn-info'>Ingresar</button>
</form>
