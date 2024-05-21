<?php partial("head"); ?>

<?php if (isset($product)) : ?>
    <div class="card-product">
        <p>ID: <?php echo $product->id ?></p>
        <p>Nome: <?php echo $product->name ?></p>
        <p>Preco: <?php echo $product->price ?></p>
        <p>Quantidade: <?php echo $product->quantity ?></p>
        <p>Categoria: <?php echo $product->category ?></p>
    </div>
<?php endif ?>

<?php partial("footer"); ?>