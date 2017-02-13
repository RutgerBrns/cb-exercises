<?php 

$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    
    <table>
        <thead>
            <tr style="text-align: left;"><th>Author</th><th>Title</th><th>Price</th></tr>
        </thead>
         
        <tbody>
        <?php foreach($books as $arrays) : ?>
            <tr>
            <?php foreach($arrays as $details => $values) : ?>
                <td><?php echo $values; ?></td>
             <?php endforeach; ?>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>