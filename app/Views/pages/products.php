<?php partial("head"); ?>

<?php partial("products/store_form"); ?>

<div class="container w100vw bg-lightgrey justify-start">
    <?php partial("products/menu") ?>
</div>

<div class="container">
    <?php if (isset($products)) : ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $index => $product) : ?>
                    <tr class="<?php echo $index % 2 === 0 ? 'even' : 'odd'; ?>">
                        <td title="ID do produto no banco de dados"><?php echo $product->id; ?></td>
                        <td title="Nome do produto"><a href="<?php echo route("/product/{$product->id}"); ?>"><?php echo $product->name; ?></a></td>
                        <td title="Categoria que o produto pertence"><?php echo $product->category; ?></td>
                        <td title="Quantidade em estoque"><?php echo $product->quantity; ?></td>
                        <td title="Valor unitário do produto"><?php echo $product->price; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>


<?php partial("footer"); ?>