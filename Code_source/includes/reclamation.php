<?php

if(!empty($_GET["login"])){
    if($_GET["login"] =="reclamation" ){

?>
 <section class="zone_connexion_1 reclamation">
    <div class="back_to_home">
                    <a href="home.php">back to home <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	width="30px" height="30px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
</div>

<div class="container">

    <h2>Reclamation</h2>


    <form action="../controller/logic_reclamation.php" method="POST">
            <div class="mb-3">
                <input name="Name" type="text" placeholder="Name">
            </div> 
           <div class="mb-3">
                <input name="Email" type="text" placeholder="Email">
            </div>
            <div class="mb-3">
                <input name="Subject" type="text" placeholder="Subject">
            </div> 
            <div class="mb-3">
                <textarea  name="Messsage" type="text" placeholder="Message"></textarea >
            </div> 
            <div class="zone_btn">
                <button class="btn " name="valide_message">Send</button>
            </div>
            
        </form>

</div>

    </section>

    <?php
    
    }
}
    ?>