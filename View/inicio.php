<h1>Bienvenidos Lectores</h1>
<span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo voluptatum ipsa id vitae nostrum dolorum eligendi, doloribus odit commodi eum dignissimos minus.</span>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam in adipisci incidunt eligendi illo reiciendis voluptas. Est, neque exercitationem? Adipisci excepturi corporis aspernatur esse quis nisi et vero incidunt!
Expedita tempora vitae culpa id maiores modi qui. Molestias illo cumque voluptates totam necessitatibus repudiandae culpa voluptatibus ipsum eveniet odio! Suscipit atque eum fugiat quasi dolorum amet sapiente eaque quas?
Ratione quae illo suscipit, consequuntur debitis a? Quidem dolorem, sequi vero odio eveniet hic quaerat debitis incidunt temporibus quia quis nisi quibusdam provident sint, adipisci rem reprehenderit pariatur accusamus! Omnis!
Sapiente eligendi rem deserunt illum autem obcaecati velit voluptas harum cumque debitis omnis, corrupti sint, magni amet accusantium veniam. Explicabo commodi doloribus nobis officiis nisi fugit dolores quae aliquam ratione!
Voluptatum eius adipisci in quos ex explicabo et perferendis. Sed necessitatibus vitae soluta dolor cum sunt dolore maiores natus. Sunt dolorum omnis nisi distinctio molestiae autem ipsa ducimus voluptatum sapiente?</p>



<?php
if(!empty($_SESSION['usuario'])){
    echo "
    <h2> Usuario. {$_SESSION['nombres']} {$_SESSION['apellidos']} </h2>
    ";
}
?>