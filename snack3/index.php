<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array date</title>
</head>
<body>

<?php



$posts = [
    '10/01/2019' => [  /* post */


        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',   /* pos */
            'text' => 'Testo post 1'
        ],


        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],


    ],
    '10/02/2019' => [ /* post */
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni', /* pos */
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [ /* post */
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',/* pos */
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>


<pre>
<?php print_r(array_keys($posts)[0]) ?>
</pre>

<ul>
<?php foreach($posts['10/01/2019'] as $post) {?>
    <li><?php echo($post['title'])?></li>
    <li><?php echo($post['author'])?></li>
    <li><?php echo($post['text'])?></li>
<?php }?>
</ul>

<pre>
<?php print_r(array_keys($posts)[1]) ?>
</pre>

<ul>
<?php foreach($posts['10/02/2019'] as $post) {?>
    <li><?php echo($post['title'])?></li>
    <li><?php echo($post['author'])?></li>
    <li><?php echo($post['text'])?></li>
<?php }?>
</ul>

<pre>
<?php print_r(array_keys($posts)[2]) ?>
</pre>

<ul>
<?php foreach($posts['15/05/2019'] as $post) {?>
    <li><?php echo($post['title'])?></li>
    <li><?php echo($post['author'])?></li>
    <li><?php echo($post['text'])?></li>
<?php }?>
</ul>
    
</body>
</html>