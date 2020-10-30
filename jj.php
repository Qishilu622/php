  <?php
        $quiz = array(
            "Q1" => array(
                "question"=>"Máte rád sushi?",
                "options" => array(
                    "Ano",
                    "Ne",
                    "Nevím"
                ),
            ),

           "q2" => array(
                "question"=>"Kolik máte dětí",
                "options" => array(
                    "Jedno",
                    "Dvě",
                    "Tři"),
            ),

            "q3" =>array(
            "question"=>"Máte zlé sny",
            "options" => array(
                "Často",
                "Občas",
                "Nikdy"
            ),
            )
        );



        echo "<form name='quiz' method='post'>";

        foreach( $quiz as $index => $arr ){

            $question=$arr['question'];
            $options=$arr['options'];

            echo '<h3>Question: '.$index.': '.$question.'</h3>';
            echo '<ul>';
            foreach( $options as $i => $option ) 
            echo "<li><input type='radio' name='{$index}[]' value='{$i}'/>{$option}";
            echo '</ul>';
        }

        echo "<input type='submit' name='sub' value='Submit'/></form>";
        

    ?>