<div class="container">
    <dialog close class="ma p5 border rounded-5" id="insert-product-dialog">
        <form class="form-container" action="/product/store" method="post">
            <h3>Formulário de Cadastro de produto</h3>
            <label for="name">Nome:</label>
            <input type="text" name="name" placeholder="Nome">
            <label for="price">Preço:</label>
            <input type="text" name="price" placeholder="Preço">
            <label for="quantity">Quantidade:</label>
            <input type="text" name="quantity" placeholder="Quantidade">
            <label for="category">Categoria:</label>
            <input type="text" name="category" placeholder="Categoria">
            <div class="btn-control">
                <button class="btn btn-cancel" id="cancel-insert-product">Cancelar</button>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </dialog>
</div>