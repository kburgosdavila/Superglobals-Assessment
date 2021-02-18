
<!DOCTYPE html>

<html>

    <head>

 <!-- CSS -->
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>

    
       <body>
    
    
    <h2>Movie title: <?php echo htmlspecialchars($_GET['title']); ?></h2>
      <h3>Year: <?php echo htmlspecialchars($_GET['year']); ?></h3>
        <h4>Gross revenue: <?php echo htmlspecialchars($_GET['gross']); ?></h4>
          <img src="https://upload.wikimedia.org/wikipedia/en/a/a0/Howls-moving-castleposter.jpg"> <?php echo htmlspecialchars($_GET['Poster']); ?>
       
       </body>

</html>
