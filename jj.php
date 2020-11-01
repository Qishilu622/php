<?php
        $quiz = array(
            "Q1" => array(
                "question"=>"Máte rád sushi?",
                "options" => array(
                   "Ano" => 'Ano',
                   "Ne" => 'Ne',
                   "Nevím" => 'Nevím'
                ),
            ),
 
           "q2" => array(
                "question"=>"Kolik máte dětí?",
                "options" => array(
                    "Jedno" => 'Jedno',
                    "Dvě" => 'Dvě',
                    "Tři" => 'Tři'),
            ),
 
            "q3" =>array(
            "question"=>"Máte zlé sny?",
            "options" => array(
                "Často" => 'Často',
                "Občas" => 'Občas',
                "Nikdy" => 'Nikdy'
            ),
            )
        );
        echo "<form name='quiz' method='post'>";
        foreach( $quiz as $index => $arr ){
            $question=$arr['question'];
            $options=$arr['options'];
            echo $question.'</h3>';
            echo '<ul>';
            foreach( $options as $i => $option ) 
            echo "<li><input type='radio' name='{$index}' value='{$i}'/>{$option}";
            echo '</ul>';
        }
        echo "<input type='submit' value='Submit'/></form>";
        
 
 
		foreach($_POST as $item){
    	echo $item . "\n"; 
		}
 
		if (count($_POST) > 0) {
         //show answers
        } else {
         // show form
        }
    ?>
