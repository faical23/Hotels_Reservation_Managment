<?php
session_start();
$url = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */

include "../model/db.php";
if(!empty($_SESSION['login_users'])){
    $id = $_SESSION['id'];
    $user = $_SESSION['role'];
    $execustion = new CRUD($user);
    $result =  $execustion->select("",["ID_client" => $id]);
    foreach($result as $value){
        $name = $value["Fname"];
    }  
}


?>
<div class="menu_mobile" id="menu_mobile_off">
    <ul>

        <li>
            <a href="index.php">
                Home
            </a>
        </li>
        <li><a href="contact.php">
            Contact</a>
        </li>
        <li >
        <?php
                                        if(empty($_SESSION['login_users']))
                                        {
                                        ?>
                                          <a href="home.php?login=inscription" class="login">Conexion</a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <div class="dropdown">
                                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $name ?>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <?php
                                                    if($user == 'admine'){
                                                    ?>
                                                        <li><a class="dropdown-item" href="dashboard.php?manage=tarifs">Dashboard</a></li>
                                                    <?php
                                                     }
                                                    ?>
                                                    <li><a class="dropdown-item" href="../controller/logic_logout.php">Logout</a></li>
                                                </ul>
                                        </div>
                                        <?php
                                        }
                                        ?>

    </ul>
</div>
<nav>
            <header class="container">
                <nav class="navbar_menu">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-3 col-3">
                            <div class="menu">
                                <ul class="row">
                                    <li class="col-3">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 192.756 192.756"><g fill-rule="evenodd" clip-rule="evenodd"><path fill="transparent" d="M0 0h192.756v192.756H0V0z"/><path d="M96.24 33.679c8.364 14.086 14.967 25.531 22.999 39.286.551.33.441.99.881 1.43 3.852 6.713 8.254 13.976 11.775 20.028l-.33.22-72.959.11c-.22-.771.44-1.101.66-1.761 12.325-20.688 23.55-40.386 35.654-60.634.77-.109.99.991 1.32 1.321z" fill="#509ee2"/><path d="M101.742 70.543l24.209 19.147 1.982 1.761h-.662l-25.859-15.626c-2.531-1.101-4.622-3.852-7.813-2.421-10.674 6.384-21.238 12.876-31.912 19.259h-.44c2.091-2.201 4.622-3.961 6.933-5.833l24.1-18.817c1.32-.77 3.081-1.101 4.731-.77 1.87.44 3.19 2.2 4.731 3.3z" fill="#fff"/><path d="M101.303 78.247c8.582 4.512 17.275 9.024 25.859 13.536l.109.22h-.879c-9.684-3.632-19.479-7.263-29.162-10.895-1.101-.44-2.42-.22-3.411 0L63.227 92.663h-.33l1.21-.991c10.014-4.952 19.698-10.344 29.602-15.516 2.971-1.21 5.172 1.1 7.594 2.091z" fill="#fff"/><path d="M101.521 85.18l25.75 7.593c.332.22.771.33.992.55l-4.402-.33-27.401-3.632h-3.191l-30.702 4.292c-.11-.11-.331 0-.44-.11.22-.22.66-.55 1.101-.66 9.904-2.751 19.698-5.722 29.602-8.694 3.08-.33 6.051.11 8.691.991z" fill="#fff"/><path fill="#509ee2" d="M65.863 109.834h4.584v4.41h2.917v-4.41h4.584v13.09h-4.584v-4.549h-2.917v4.549h-4.584v-13.09zM94.094 116.414c0 4.201-3.247 6.719-7.24 6.719-3.994 0-7.24-2.518-7.24-6.719 0-4.115 3.264-6.789 7.24-6.789 3.976 0 7.24 2.674 7.24 6.789zm-9.688.068c0 1.494 1.007 2.518 2.448 2.518s2.448-1.023 2.448-2.518c0-1.389-.937-2.553-2.448-2.553-1.51.001-2.448 1.165-2.448 2.553zM94.875 109.834h10v4.252l-2.623-.121v8.959h-4.756v-8.959l-2.621.121v-4.252zM106.057 109.834h8.802v3.576h-4.011v1.25h3.664v3.402h-3.664v1.286h4.15v3.576h-8.941v-13.09zM116.957 109.834h4.758v8.889h3.992v4.201h-8.75v-13.09z"/><path fill="#509ee2" d="M2.834 138.68h7.573l-.17 9.275h.17c.17-.881.652-1.646 1.078-2.412l3.744-6.863h8.48l-6.693 10.408 7.402 10.977h-9.019l-3.687-6.467c-.454-.822-1.134-1.617-1.304-2.496h-.17l.17 8.963H2.834V138.68z" fill="#509ee2"/><path d="M32.36 160.064h-8.225l7.43-21.385h8.593l7.629 21.385h-8.225l-.709-2.666h-5.871l-.622 2.666zm5.133-7.742l-.907-3.771c-.227-.908-.369-1.844-.511-2.752h-.283l-1.418 6.523h3.119zM50.688 152.406l.397.312c1.39 1.078 3.063 1.957 4.85 1.957.766 0 1.985-.312 1.985-1.277 0-.963-1.021-1.049-1.73-1.189l-1.56-.285c-3.034-.537-5.586-2.324-5.586-5.672 0-5.076 4.623-7.912 9.273-7.912 2.439 0 4.68.596 6.778 1.871l-2.099 5.475c-1.333-.908-2.836-1.617-4.509-1.617-.681 0-1.673.256-1.673 1.135 0 .795.964.908 1.56 1.049l1.758.398c3.29.736 5.672 2.494 5.672 6.125 0 5.105-4.651 7.629-9.274 7.629-2.694 0-5.814-.736-8.224-1.957l2.382-6.042zM68.216 138.68h9.841c4.991 0 8.678 2.553 8.678 7.857 0 4.367-2.723 7.09-7.062 7.09h-3.971v6.438h-7.487V138.68h.001zm7.487 9.558h.766c1.361 0 2.836-.227 2.836-1.957 0-1.674-1.588-1.758-2.864-1.758h-.738v3.715zM88.863 138.68h9.387c4.82 0 8.904 2.043 8.904 7.432 0 3.232-1.248 4.594-4.141 5.559v.17c.398.312.879.652 1.305 1.275l4.652 6.949h-8.963l-3.403-6.863h-.142v6.863h-7.6V138.68h.001zm7.6 9.472h.539c1.275 0 2.553-.197 2.553-1.787 0-1.645-1.164-1.842-2.496-1.842h-.596v3.629zM133.221 149.43c0 6.863-5.305 10.975-11.826 10.975-6.523 0-11.828-4.111-11.828-10.975 0-6.723 5.332-11.09 11.828-11.09 6.494 0 11.826 4.367 11.826 11.09zm-15.826.113c0 2.438 1.645 4.111 4 4.111 2.354 0 3.998-1.674 3.998-4.111 0-2.27-1.531-4.17-3.998-4.17-2.469 0-4 1.9-4 4.17zM142.213 138.68l2.693 12.764h.17c.143-1.305.312-2.666.652-3.943l2.27-8.82h5.955l2.922 12.764h.17c.113-1.248.256-2.553.539-3.773l2.156-8.99h8.082l-7.543 21.385H153.5l-2.439-11.629h-.254c-.086 1.107-.143 2.186-.398 3.234l-2.154 8.395h-6.609l-7.486-21.385h8.053v-.002z" fill="#509ee2"/><path d="M176.336 138.68l2.383 5.588h.227c.227-.682.426-1.361.709-2.014l1.531-3.574h8.736l-7.318 12.168v9.217h-7.6v-9.217l-7.459-12.168h8.791z" fill="#509ee2"/></g></svg>                   

                                        </div>
                                    </li>
                                    <li class="col-2">
                                        <a href="index.php" class="item_navbar_menu"> Home</a></li>
                                    <li class="col-2">
                                        <a href="contact.php" class="item_navbar_menu"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-sm-6 col-md-9 col-9">
                            <div class="menu_buttons">
                                <ul class="row">
                                    <li class="col login">
        <?php
                                        if(empty($_SESSION['login_users']))
                                        {
  
                                            ?>
                                          <a href="<?php echo $url ?>?login=inscription" class="login">Conexion</a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <div class="dropdown">
                                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $name ?>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <?php
                                                    if($user == 'admine'){
                                                    ?>
                                                        <li><a class="dropdown-item" href="dashboard.php?manage=tarifs">Dashboard</a></li>
                                                    <?php
                                                     }
                                                    ?>
                                                    <li><a class="dropdown-item" href="../controller/logic_logout.php">Logout</a></li>
                                                </ul>
                                        </div>
                                        <?php
                                        }
                                        ?>

        <li>
                                    <li class="col">
                                    <a href="book.php" class="book_btn_header">
                                        <button type="button" class="btn btn-primary start_free" href="book.php">Book</button>
                                    </a>
                                    </li>
                                    <li class="col">
                                        <div class=" burger_menu">
                                        <svg id="mostache" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m347.829 38.679h-76.829v-38.679h-30v38.679h-76.829v42.815h183.658z"/><path d="m392.647 482v-370.506h-273.294v370.506h-68.065v30h409.424v-30zm-153.458-332.885h33.622v30h-33.622zm0 67.62h33.622v30h-33.622zm0 67.621h33.622v30h-33.622zm-84.403-135.241h33.622v30h-33.622zm0 67.62h33.622v30h-33.622zm0 67.621h33.622v30h-33.622zm200.618 197.644h-30v-96.485h-54.404v96.485h-30v-96.485h-54.404v96.485h-30v-126.485h198.808zm1.811-167.644h-33.622v-30h33.622zm0-67.621h-33.622v-30h33.622zm0-67.62h-33.622v-30h33.622z"/></g></svg>
                                </ul>
                                </div>
                            </div>
                        </div>

                </nav>
            </header>
        </nav>