<?php
resource_include(
    'Includes/header',
    ['page_name' => 'about_page']
);

?>

<section class=text-center>
    <div>
        <h1>About Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quasi ex sapiente et fugit modi animi impedit libero,
            sed obcaecati aperiam nam dolorum, unde optio fugiat
            officiis voluptatum nisi id eos aliquam alias voluptatem
            perferendis? Dicta officia quaerat esse perspiciatis
            consectetur eveniet nam necessitatibus aperiam architecto
            cum rem repellendus molestiae placeat, totam sapiente
            cumque iure! Neque repudiandae repellendus dolore consectetur
            fuga aut voluptatum! Voluptatum iusto ipsum inventore,
            facilis exercitationem deserunt velit eius accusamus
            minus architecto a soluta totam quos excepturi numquam,
            placeat recusandae ex repellendus qui corrupti magnam?
            Accusantium error alias ut cupiditate.
            Tenetur earum possimus eveniet eligendi qui, saepe quam.
        </p>
    </div>
    <table class="p-5 table table-hover table-bordered">
        <tr>
            <td>username</td>
            <td>phone number</td>
        </tr>
        <?php
        foreach ($data as $item) {
        ?>
            <tr>
                <td><?= $item->username ?></td>
                <td><?= $item->phone_number ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>
<?php
// include_once('./resource/views/Includes/footer.php');
resource_include('Includes/footer');
?>