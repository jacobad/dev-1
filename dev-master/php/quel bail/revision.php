$tab = [
			[
            	'name' => 'Thib',
                'age' => 29,
                'job' => 'dev',
            ],
           
            [
            	'name' => 'Sophie',
                'age' => 21,
                'job' => 'étudiante',
            ],
            [
            	'name' => 'Bernard',
                'age' => 67,
                'job' => 'retraite',
            ],
            [
            	'name' => 'Josianne',
                'age' => 52,
                'job' => 'prof',
            ],
            [
            	'name' => 'Pierre',
                'age' => 31,
                'job' => 'gilet jaune',
            ],
            
            [
            	'name' => 'martine',
                'age' => 45,
                'job' => 'flic',
            ],
            
       ];
       
  
 // $tab[4]['job'] // gilet jaune
 
 // $tab[1]['name'] // sophie
 
 // $tab[4]['age'] // 31
 
 
// $tab[3]['name'] // Josiane

// $tab[5]['job'] // flic

?>


<ul>
	<?php foreach($tab as $canard) {?>
    	
        <li> <?= $canard['name'] ?> </li>
    
    <?php } ?>







$tab = [
            [
                'name' => 'Thib',
                'age' => 29,
                'job' => 'dev',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
           
            [
                'name' => 'Sophie',
                'age' => 21,
                'job' => 'étudiante',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
                'name' => 'Bernard',
                'age' => 67,
                'job' => 'retraite',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
                'name' => 'Josianne',
                'age' => 52,
                'job' => 'prof',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
                'name' => 'Pierre',
                'age' => 31,
                'job' => 'gilet jaune',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            
            [
                'name' => 'martine',
                'age' => 45,
                'job' => 'flic',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            
       ];
       
  
 // $tab[4]['job'] // gilet jaune
 
 // $tab[1]['name'] // sophie
 
 // $tab[4]['age'] // 31
 
 
// $tab[3]['name'] // Josiane

// $tab[5]['job'] // flic

?>


<ul>
    <?php foreach($tab as $canard) {?>
        
        <li> <?= $canard['name'] ?> 
        
        <?php foreach ($canard['alphabet'] as $index => $alpha ) {?>
            <span><?= $index ?></span> 
            <span> <?= $alpha ?> </span>
        
        <?php } ?>
        </li>
        
    
    <?php } ?>



</ul>










<ul>
    <li> Thib 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Sophie 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Bernard 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Josiane 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Pierre 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Martine 
        <span>0</span>
        <span>a</span>
        <span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
</ul>

// training 2



$tab = [
            [
                'name' => 'Thib',
                'age' => 29,
                'job' => 'dev',
                'aplhabet' => ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            
            'coucou',
            
            [
                [ 
                    ['a'], 
                    [
                        'chat' => 'cat'
                    ] 
                ],
                
                524,
                
                [
                    'animals' => ['poulpe', 'canard', 'chien'],
                    'country' => [
                                    'France', 
                                    'Allemagne', 
                                    'Italie', 
                                    [ 
                                        'Serbie', 
                                        'Montenegro', 
                                        'Macédoine'  
                                    ] 
                                 ]
                ]
            ]

       ];
       
       
// $tab[1] // coucou

// $tab[2][0][1]['chat'] // cat

// array_search('cat', $tab[2][0][1]); 

// $tab[2][2]['country'][3][1] // Montenegro





<?php

foreach ($tab[2][2]['country'][3] as $country ) {
    
    echo $country;

}

foreach ($tab[2][2]['animals'] as $animal) {

    echo $animal;
}

?>

<ul>
    <?php foreach ($tab[0]['alphabet'] as $alpha):  ?>
        <li><?= $alpha ?></li>
        
    <?php endforeach ?>
</ul>


<ul>
    <?php foreach($tab[2][2]['country'] as $i => $country): ?>
        
        <li>
            <?php if($i == 3) { ?>
                
                <?php foreach ($country as $soloCountry ): ?>
                        
                        <span><?= soloCountry.' '?></span>
                    
                <?php endforeach?>
            
            <?php } else { ?>
                
                <?= $country ?>
            
            <?php } ?>
        </li>
    
    <?php endforeach  ?>

</ul>