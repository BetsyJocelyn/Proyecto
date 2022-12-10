<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
    <div class="imagen"><img src="img/<?php echo $item['imagen'];  ?>" /></div>
    <div class="titulo"><?php echo $item['nombre'];  ?></div>
    <div class="descripcion"><?php echo $item['descripcion'];  ?></div>
    <div class="existencia"><?php echo $item['existencia'];  ?></div>
    <div class="precio">$<?php echo $item['precio'];  ?> MXN</div>
    <div class="botones">
        <button>Agregar al carrito</button>
    </div>
</div>