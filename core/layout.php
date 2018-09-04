<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <?php if(!empty($meta['title'])): ?>
            <title><?php echo $meta['title']; ?></title>
        <?php endif; ?>

        <?php if(!empty($meta['description'])): ?>
            <meta name="description" content="<?php echo $meta['description'] ?>">
        <?php endif; ?>

        <?php if(!empty($meta['keywords'])): ?>
            <meta name="keywords" content="<?php echo $meta['keywords'] ?>">
        <?php endif; ?>

        <link rel="stylesheet" type="text/css" href="dist/css/main.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <span class="logo">Jason Snider</span>
            <a id="toggleMenu">Menu</a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php 
                echo (!empty($message)?$message:null);
                echo $content; 
            ?>
        </main>
         
        
        <script>
            var toggleMenu = document.getElementById('toggleMenu');
            var nav = document.querySelector('nav');
            toggleMenu.addEventListener('click', function(){
                    if(nav.style.display=='block'){
                        nav.style.display='none';
                    }else{
                        nav.style.display='block';
                    }
                }
            );
        </script>
    </body>
</html>