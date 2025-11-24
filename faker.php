
<?php
require_once "connexion.php";
require_once "model/CRUD_Produit.php";

$crud = new CRUD_Produit();
for ($i = 2; $i < 100; $i++) {

    $lib = "Article N°$i";
    $prix = random_int(1, 3000);
    $qte = random_int(1, 100);
    $des = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis, repellendus sapiente dolor molestiae eveniet quo quaerat possimus. At quam odit, dolorum aperiam libero quasi ipsa eos tempore quod ab!
Similique laboriosam nesciunt perspiciatis ipsam harum voluptatibus laudantium adipisci iure officia, dolorum odit est quae nostrum at? Odio incidunt architecto recusandae tempore, atque eligendi quos id fugiat quae, aspernatur tempora?
Facere, in assumenda. Porro veritatis, ipsum voluptates fuga minus, et magni repudiandae atque nihil praesentium, dicta numquam necessitatibus excepturi illo beatae perferendis incidunt consequuntur dolores deleniti id. Cum, eum enim.
Modi numquam quaerat officia quibusdam alias consequatur. Hic excepturi officia fugit, provident quos totam dolor ut magnam sapiente animi nulla recusandae quod possimus? Dolorem debitis eius tempore, laudantium neque qui.';
    $image = "https://picsum.photos/400?random=$i";
    $promo = random_int(0, 1);
    $obj = new Produit(null, $lib, $prix, $qte, $image, $des, $promo);

    if (!$crud->add($obj))
        echo "pb d'insertion";
}
