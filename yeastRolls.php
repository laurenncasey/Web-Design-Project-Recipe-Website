
<?php


echo "<!DOCTYPE html>
<html> <head> <link rel='stylesheet' href='css/style.css'> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> <meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'> <meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' type='image/x-icon' href='images/export2White.png'>
            <title>Casey's Yeast Rolls Recipe</title>
            </head>


<body>
    <body class='mainbody'>
    <div class='header'>
    <a class='nav' href='about.html'>About</a>
    <a class='homenav' href='index.html'><img class='logo' src='images/export 2.png' alt='The Casey Journals Home Page'></a>
    <a class = 'nav' href='recipes.html'>Recipes</a>
</div>

    <div class = 'totalPage'>

        <div class='content2'>
            <img class = 'food2' src='../WebsiteProject/images/IMG_0041.heic' alt='bread rolls'>
            <img class = 'food2' src='../WebsiteProject/images/DinnerRolls.jpeg' alt='bread rolls'>
            <img class = 'food2' src='../WebsiteProject/images/IMG_0048.heic' alt='bread rolls'>

        </div>

        <h1 class = 'recipeNameh1'>Yeast Dinner Rolls</h1>

        <div class='book'>
            <div class='ingr'>
            <h2 class='label'>Ingredients</h2>
            <p class='para'>";

            
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
            <div class='instr'>
                <h2 class='label'>Directions</h2>
                <p>";

            
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
            </div>


        </div>
    </div>
    </body>


        <div class='footer'>
            <a class='icons' href = 'https://www.linkedin.com/in/alaina-casey-5229a317a' target='_blank'><i class='fa fa-linkedin'></i></a>
            <a class='icons' href='https://instagram.com/thecaseyjournals?igshid=YmMyMTA2M2Y=' target='_blank'><i class='fa fa-instagram'></i></a>
            <a class='icons' href='' target='_blank'><i class='fa fa-youtube'></i></a>
        </div>
</body>
</html>";


mysqli_close($dbc);
?>






