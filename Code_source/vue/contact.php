<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Contact</title>
</head>
<body>

<div class="navbar_contact">

    <?php 
            // include  '../includes/navbar.php';
    ?>
</div>


<section class="contact_us">
    <div class="row">
         <div class=" col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
             <div class="img__contact_us">
                <img src="../assets/img/contact_2.jpg">
             </div>
        </div>
        <div class=" col-xxl-6 col-xl-6 col-sm-6 col-md-6 col-12">
            <div class="zone_form">
                <h2>Contact us</h2>
                <form action="../controller/cantact_logic.php" method="POST">
                    <div class="zone_input">
                        <label>Full Name <span>*</span></label>
                        <input name="Name" type="text">
                    </div>
                    <div class="zone_input">
                        <label>Email <span>*</span></label>
                        <input name="Email" type="text">
                    </div>
                    <div class="zone_input">
                        <label>Subject <span>*</span></label>
                        <input name="Subject" type="text">
                    </div>
                    <div class="zone_input">
                        <label>Message <span>*</span></label>
                        <textarea  name="Messsage" type="text"></textarea>
                    </div>
                    <button name="valide_message">Send</button>


                </form>
                <div class="follow_us">
                        <h2>Follow us</h2>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
	 viewBox="0 0 382 382" style="enable-background:new 0 0 382 382;" xml:space="preserve">
<path style="fill:#0077B7;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
	C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
	H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
	c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
	s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
	c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
	c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
	c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
	L341.91,330.654L341.91,330.654z"/>
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
<svg enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)" gradientUnits="userSpaceOnUse" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"><stop offset="0" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><path d="m1.5 1.633c-1.886 1.959-1.5 4.04-1.5 10.362 0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091-.559-.081-.671-.105-3.539-.11-10.173.005-12.403-.448-14.41 1.633z" fill="url(#SVGID_1_)"/><path d="m11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471c-.587 0-1.063.476-1.063 1.063s.476 1.063 1.063 1.063 1.063-.476 1.063-1.063-.476-1.063-1.063-1.063zm-4.73 1.243c-2.513 0-4.55 2.038-4.55 4.551s2.037 4.55 4.55 4.55 4.549-2.037 4.549-4.55-2.036-4.551-4.549-4.551zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z" fill="#fff"/></svg>
<svg height="40px" viewBox="0 0 512 512.00038" width="40px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="169.9940010834" x2="299.4934135904" y1="71.98622701" y2="349.0548448864"><stop offset="0" stop-color="#00c3ff"/><stop offset="1" stop-color="#00b0ed"/></linearGradient><linearGradient id="b"><stop offset="0" stop-color="#00b0ed" stop-opacity="0"/><stop offset="1" stop-color="#00a2ce"/></linearGradient><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="364.2825237824" x2="-379.5864327114" xlink:href="#b" y1="314.0868361356" y2="-84.9521808166"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="256.0003" x2="256.0003" xlink:href="#b" y1="437.383215389" y2="504.4720097064"/><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="489.4209995136" x2="239.2937328214" xlink:href="#b" y1="482.0724016502" y2="231.945134958"/><path d="m420.421875 503.234375c-109.503906 11.6875-219.339844 11.6875-328.84375 0-43.664063-4.660156-78.152344-39.148437-82.8125-82.816406-11.6875-109.503907-11.6875-219.335938 0-328.839844 4.660156-43.664063 39.148437-78.152344 82.8125-82.8125 109.503906-11.6875 219.335937-11.6875 328.839844 0 43.667969 4.660156 78.15625 39.148437 82.816406 82.8125 11.6875 109.503906 11.6875 219.335937 0 328.839844-4.660156 43.667969-39.144531 78.15625-82.8125 82.816406zm0 0" fill="url(#a)"/><path d="m475.386719 110.097656c-4.132813-38.746094-34.734375-69.351562-73.484375-73.488281-97.171875-10.367187-194.632813-10.367187-291.804688 0-38.746094 4.136719-69.351562 34.742187-73.488281 73.488281-10.367187 97.171875-10.367187 194.632813 0 291.800782 4.136719 38.75 34.742187 69.355468 73.488281 73.488281 97.171875 10.371093 194.632813 10.371093 291.800782 0 38.75-4.132813 69.355468-34.738281 73.488281-73.488281 10.371093-97.167969 10.371093-194.628907 0-291.800782zm0 0" fill="url(#c)"/><path d="m7.671875 409.804688c.351563 3.539062.714844 7.078124 1.09375 10.617187 4.660156 43.664063 39.148437 78.152344 82.816406 82.8125 109.503907 11.6875 219.335938 11.6875 328.839844 0 43.667969-4.660156 78.152344-39.148437 82.8125-82.8125.378906-3.539063.742187-7.078125 1.097656-10.617187zm0 0" fill="url(#d)"/><path d="m511.890625 238.007812-106.277344-106.273437c-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.839844-10.683593 2.195313-11.984376-12.285156-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.546876-65.996094 66 0 1.316407.035156 2.617188.121094 3.914063.175781 3.160156.578125 6.265625 1.199219 9.285156-15.214844-.226562-64.667969-4.289062-111.832031-44.71875-.003907 0-.003907-.003906-.003907-.003906h-.003906l-22.242187-22.246094s-26.09375 45.542969 12.269531 80.101563c1.683593 1.878906 3.535156 3.734375 5.5625 5.558594.160156.179687.328125.355468.488281.535156-5.035156-.339844-20.179688-1.847656-28.945312-8.039063 0 0-1.761719 27.835938 21.429687 48.328125l18.726563 18.886719c-5.703126.472656-12.011719.359375-16.398438-1.5625 0 0 3.882812 16.488281 18.890625 29.683594l26.234375 26.371093c-15.738281 9.167969-43.289062 20.640626-79.554688 17.710938l159.144532 155.5c54.679687-.015625 109.359375-2.9375 163.957031-8.765625 43.667969-4.660156 78.15625-39.148437 82.816406-82.8125 6.480469-60.742187 9.359375-121.585937 8.652344-182.414063zm0 0" fill="url(#e)"/><path d="m414.683594 157.367188c-11.328125 5.925781-28.390625 8.664062-34.046875 9.453124-.046875-.273437-.09375-.535156-.140625-.796874 19.230468-11.894532 25.117187-34.289063 25.117187-34.289063-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.835938-10.683593 2.195313-11.984376-12.289063-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.542969-65.996094 66 0 1.3125.035156 2.617188.121094 3.910157.175781 3.160156.578125 6.265625 1.199219 9.285156-17.640625-.261719-81.316407-5.671875-134.082031-66.964844 0 0-29.382813 51.265625 20.015624 86.285157 0 0-20.015624-.625-30.640624-8.128907 0 0-3.125 49.398438 53.769531 65.023438 0 0-20.003907 5.007812-30.015625.628906 0 0 10.007812 42.515625 60.027344 45.648437 0 0-35.875 32.84375-94.457032 28.117188 28.8125 18.242188 62.972656 28.800781 99.597656 28.800781 102.980469 0 186.464844-83.480469 186.464844-186.460937 0-1.285156-.011718-2.570313-.039062-3.855469.027344-.761719.039062-1.519531.039062-2.289063 0-.535156-.011718-1.070312-.019531-1.605468 19.039063-12.6875 31.324219-33.722656 31.324219-33.722656zm0 0" fill="#fff"/></svg>
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#1976D2;" d="M448,0H64C28.704,0,0,28.704,0,64v384c0,35.296,28.704,64,64,64h384c35.296,0,64-28.704,64-64V64
	C512,28.704,483.296,0,448,0z"/>
<path style="fill:#FAFAFA;" d="M432,256h-80v-64c0-17.664,14.336-16,32-16h32V96h-64l0,0c-53.024,0-96,42.976-96,96v64h-64v80h64
	v176h96V336h48L432,256z"/>
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
   
                </div>
                <div class="back_to_home">
                    <a href="index.php">back to home <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
            </div>
            
    </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/navbar.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/popup.js"></script>

<!-- pop up if message sent -->

<?php
    if(!empty($_SESSION['message_send'])){
?>
    <script>
        success("message success");
    </script>
<?php
        unset($_SESSION['message_send']);
    }
?>


<!-- pop up if message Not sent -->

<?php
    if(!empty($_SESSION['message_not_send'])){
?>
    <script>
        error("Message not send please check if all field is Full");
    </script>
<?php
        unset($_SESSION['message_not_send']);
    }
?>



</body>
</html>