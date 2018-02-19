<?php
    
        $redPanda = array(
            'name' => 'Red Panda',
            'pic' => './img/redPanda.jpg',
            'facts' => array('Red Pandas are notorious escape artists', 
                             'There are less than 10,000 red pandas left in the wild', 
                             'Red Pandas have a fake thumb'
                            )
            );
            
        $fennec = array(
            'name' => 'Fennec Fox',
            'pic' => './img/fennecFox.jpg',
            'facts' => array('Smallest known fox species with most only growing up to 8 inches tall',
                             'Fennec foxes mate for life and the males are very protective of their pregnant mates',
                             'Their 6 inch ears are used to triangulate the position of prey and dissipate the dessert heat'
                            )
            );
            
        $capybara = array(
            'name' => 'Capybara',
            'pic' => './img/Capybara.jpg',
            'facts' => array('The capybara holds the record for the worlds largest rodent',
                             'They eat more than 3 kilograms of grasses and aquatic plants a day',
                             'Capybaras are very social animals, living in groups of up to 20 capybaras'
                            )
            );
            
        $animals = array(
             $redPanda,
             $fennec,
             $capybara
            );
            
        $sources = array(
            'http://mentalfloss.com/article/63578/12-furry-facts-about-red-pandas',
            'https://www.mnn.com/earth-matters/animals/stories/7-fun-facts-about-fennec-fox',
            'http://www.cbc.ca/kidscbc2/the-feed/fun-facts-about-cute-animals-capybara-edition'
            );
            
        $index = rand(0,2);
        $title = $animals[$index]['name'];
        $img = $animals[$index]['pic'];
        
    function genMain(){ 
        
        echo '<figure id="mainPic">';
            echo '<img src="' . $GLOBALS['img'] . '">';
        echo '</figure>';
        
        $numFacts = 0;
        echo '<div id="text">';
            echo '<table id="infoTable">';
                while($numFacts < count($GLOBALS['animals'][$GLOBALS['index']]['facts'])){
                    shuffle($GLOBALS['animals'][$GLOBALS['index']]['facts']);
                    if ($GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts] != null && $numFacts == 1){
                        echo '<tr id="secondFact" >';
                            echo "<td>" . $GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts] . "</td>";
                        echo "</tr>";
                        
                        unset($GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts]);
                        ++$numFacts;
                    }
                    elseif($GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts] != null){
                        echo '<tr id="firstFact" >';
                            echo "<td>" . $GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts] . "<br/><br/></td>";
                        echo "</tr>";
                        
                        unset($GLOBALS['animals'][$GLOBALS['index']]['facts'][$numFacts]);
                        ++$numFacts;
                    }
                }
            echo "</table>";
            
        echo "</div>";
        echo '<div id="button">';
            echo '<form>';
                echo '<input id="newAnimal" type="submit" value="Random Animal!"/>';
            echo "</form>";
        echo "</div>";
        
    }
    
    function generateTitle(){
        echo $GLOBALS['title'];
    }
    
    function genFoot(){
        $source = 0;
        while($source != $GLOBALS['index']){
            $source = array_rand($GLOBALS['sources']);
        }
        
        echo '<a id="foot" href="' . $GLOBALS['sources'][$source] . '">';
            echo $GLOBALS['sources'][$source];
        echo '</a>';
    }
?>