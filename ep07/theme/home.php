<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<div class="users">
    <?php if($users): 
        foreach($users as $user):
            ?>
        <article class="users_users">
            <h3><?= $user->first_name, "", $user->last_name;?></h3>
        </article>
        <?php
        endforeach;
    
    else: 
        ?>
        <h4>Não existe usuários cadastrados!</h4>
        <p>Lorme ipsandiasd jaondfaks sakdmc</p>
    <?php
    endif;?>
</div>
