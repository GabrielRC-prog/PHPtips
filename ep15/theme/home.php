<section class="products">
    <div class="cart_message"></div>
    <?php if (!empty($products)): foreach ($products as $product): ?>
        <article class="products_item">
            <h1>(<span class="item_<?= $product->id; ?>">0</span>) <?= $product->name; ?></h1>
            <p>R$ <?= number_format($product->price, decimals:2, thousands_separator:"."); ?></p>
            <div>
                <button class="btn" data-action="<?= $router->route("cart.add", ["id" => $product->id]); ?>">+</button>
                <button class="btn cancel" data-action="<?= $router->route("cart.remove", ["id" => $product->id]); ?>"></button>
            </div>
        </article>
    <?php endforeach; else: ?>
        <div class="message error">Ainda não existem produtos cadastrados</div>
    <?php endif; ?>
</section>

<div class="cart_resume">
    <p>Item: <span class="cart_amount">0</span></p>
    <p>Total: <span class="cart_total">0,00</span></p>
    <button class="btn cancel" data-action="<?= $router->route(name: "cart.clear"); ?>">Limpar</button>
    <a class="btn" href="<?= $router->route(name: "web.order"); ?>">Concluir></a>
</div>

<script
		src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
		crossorigin="anonymous"></script>
</script> 

<script>
    $(function(){
       
    });
</script>