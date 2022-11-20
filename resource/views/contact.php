<?php
resource_include('Includes/header',['page_name'=>'contact_page']);

?>
<section class=text-center>
<form action="/contact/submit" method="POST" >

<input type="text" value="php mvc class" name="fullname">
<button>submit</button>
</form>

</section>

<?php
resource_include('Includes/footer');
?>