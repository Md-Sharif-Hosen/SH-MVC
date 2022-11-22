<?php
resource_include('Includes/header',['page_name'=>'contact_page']);

?>
<section class= "py-5 my-5 text-center">
    <h1 class="py-5 my-5">Submit your Content</h1>
<form action="/contact/submit" method="POST" >

<input type="text" value="php mvc class" name="fullname">
<button>submit</button>
</form>

</section>

<?php
resource_include('Includes/footer');
?>