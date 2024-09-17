
<div class="create">
        <div class="form_ajax"></div>
        <form class="form" name="gallery" action="" method="post"
                enctype="multipart/form-data">
                <label>
                        <input type="text" name="first_name" placeholder="Nome"/>
                </label>
                <label>
                        <input type="text" name="last_name" placeholder="Sobrenome:"/>
                </label>
                <button>Cadastrar Usuario</button>
        </form>
</div>

<section>
    <?php 
    if(!empty($users)):
    foreach ($users as $user):
    ?>
    <article>
        <h3> <?php echo $user->first_name, " ", $user->last_name ?> </h3>

        <a class="remove" href="#" data-action="<?php $router->route("form.delete");  ?>" data-id="<?php $user->id; ?>" ></a>
    </article>
    <?php endforeach; endif; ?>
</section>