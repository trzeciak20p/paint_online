<?php

if( !isset($_SESSION["login"]) ){

    echo "<h2>Twoje projekty</h2><a href='login.php'><h3>Zaloguj się aby zobaczyć swoje projekty!</h3></a>";

}else{

    echo '
    <h2>Twoje projekty</h2>

    
        <div class="pls_center">
            <div>
                <form method="POST" action="editor.php" id="new_project_form">
                    <input type="text" name="project_name" required="required">
                    <input type="submit" name="new_project" value="utwórz nowy projekt">
                </form>
            </div>
            <form method="POST" action="editor.php" id="loaded_projects_form">
            
    ';

    
    $f = scandir("data/" . $_SESSION["login"]);
    foreach($f as $key => $value){
        if($value != "." && $value != ".."){
            echo "
                <input type='submit' name='open_project' value=". $value ." >
            ";

        }
    }

    echo '
            </form>
        </div>
    ';        

}