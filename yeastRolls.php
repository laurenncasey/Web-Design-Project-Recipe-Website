
<?php


echo "<!DOCTYPE html>
<html>
    <head>
    <link rel='stylesheet' href='css/testStyle.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='icon' type='image/x-icon' href='images/export2White.png'>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Recipe</title>
</head>
<body class = 'bodyTest'>


    <div class='header'>
        <a class='nav' href='about.html'>About</a>
        <a class='homenav' href='index.html'><img class='logo' src='images/export 2.png' alt='The Casey Journals Home Page'></a>
        <a class = 'nav' href='recipes.html'>Recipes</a>
    </div>


    <div class = 'constantImages'>
    <img class = 'imgHeader' src='../WebsiteProject/images/ball.jpeg' alt = 'ball of dough'>
    <img class = 'imgHeader' src='../WebsiteProject/images/babkaBread.jpeg' alt = 'loaf of babka'>
    <img class = 'imgHeader' src='../WebsiteProject/images/lemonpound.jpg' alt = 'lemon pound cake'>
    <img class = 'imgHeader' src='../WebsiteProject/images/macarons.jpg' alt = 'french macarons'>
    <img class = 'imgHeader' src='../WebsiteProject/images/sourDough.jpg' alt = 'sour dough baked bread'>
</div>


    <div class = 'recipenameholder'>
    <h1 class='title'>Yeast Rolls</h1>
    </div>

    <div class ='imgs'>
        <img class= 'imagerec' style = 'width: calc((100vw - 25px )/ 3);' src = '../WebsiteProject/images/ball.jpeg' alt = 'ball of dough'>
        <img class= 'imagerec' style = 'width: calc((100vw - 25px )/ 3);' src = '../WebsiteProject/images/dough.jpeg' alt = 'dough being pulled apart'>
        <img class= 'imagerec' style = 'width: calc((100vw - 25px )/ 3);' src = '../WebsiteProject/images/DinnerRolls.jpeg' alt = 'baked yeast rolls'>
    </div>
    <div class = 'book'>

        <div class = 'left'>
        </div>

    <div class = 'middle'>
    <h2 class = 'label'>Ingredients</h2>
    <div class='divIngr'>
    <p class='ingr'>";

            
                        require_once('sql_conn.php');
        
                        $sql = "SELECT ingredients FROM recipes WHERE title = 'Yeast Rolls'";

                        $response = @mysqli_query($dbc, $sql);
                        if (mysqli_num_rows($response) > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($response)) {
                                echo $row["ingredients"];
                            }
                        } else {
                            echo "Cannot find recipe...";
                        }
            

                        echo "</p>
                        </div>
                        
                            <h2 class = 'label'>Directions</h2>
                            <p class='dir'>";

            
            require_once('sql_conn.php');

            $sql = "SELECT directions FROM recipes WHERE title = 'Yeast Rolls'";

            $response = @mysqli_query($dbc, $sql);
            if (mysqli_num_rows($response) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($response)) {
                    echo $row["directions"];
                }
            } else {
                echo "Cannot find recipe...";
            }
           

                
                

            echo "</p>
            </div>
        
            <div class = 'right'>
            </div>
        
            </div>
            <div class='separator'></div>
        
        
           
            <form class = 'formclass' method='post' target='_blank' action='submitReview.php'>
                <h1 class='formHeader'>Would you like to leave a review?</h1>
                <input class='textbox' type='text' name='review'><br/><br/>
                <input class = 'submitbtn' type='submit'>
            </form>
        
            <div class='footer'>
                <a class='icons' href = 'https://www.linkedin.com/in/alaina-casey-5229a317a' target='_blank'><i class='fa fa-linkedin'></i></a>
                <a class='icons' href='https://instagram.com/thecaseyjournals?igshid=YmMyMTA2M2Y=' target='_blank'><i class='fa fa-instagram'></i></a>
                <a class='icons' href='' target='_blank'><i class='fa fa-youtube'></i></a>
            </div>
        
        </body>
        </html>";


mysqli_close($dbc);
?>




