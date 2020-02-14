
<script>
    var boton=document.getElementById("boton");
$(document).ready(function(){
    $(boton).click(function(){
        $(this).button('toggle');
    });
});
</script>
<div class="footer jumbotron text-center">
    <p>Con la tecnología de nuestra imaginación &#x2122; <button id="boton" class="btn btn-primary">Oscuro</button>
    </p>
   
</div>
