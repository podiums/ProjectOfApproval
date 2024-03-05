<?php 
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./frontpage/main.css">
</head>
<body>
    <nav>
        <label for="logo" class="logo">Art Gallery</label>
        <ul>
            <li><a href="resister/resister.php">Sign up</a></li>
        </ul>
    </nav>
    <div class="show-content-name"><ul> <li id="catogory-dis">Home</li></ul></div>
    <section>
        <div class="art-piece">
            <img src="artwork1.jpg" alt="Artwork 1">
            <p>Artwork Title 1</p>
            <p>Artist: Artist Name 1</p>
        </div>
        <div class="art-piece">
            <img src="artwork2.jpg" alt="Artwork 2">
            <p>Artwork Title 2</p>
            <p>Artist: Artist Name 2</p>
        </div>
        <div class="art-piece">
            <img src="artwork3.jpg" alt="Artwork 3">
            <p>Artwork Title 3</p>
            <p>Artist: Artist Name 3</p>
        </div>
        <!-- Add more art pieces as needed -->
    </section>
    <div class="scroll-container">
        <div class="content">
            <!-- <label for="content-bar">contents</label> -->
            <ul>
                <label for="content-bar">contents</label>
                <li class="liBtn"><img src="artwork1.jpg" alt="Artwork 1">a </li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory1">b</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory2">c</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory3">d</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory4">e</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory5">f</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory6">g</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory7">h</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory8">i</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory9">j</li>
                <li class="liBtn"><img src="artwork1.jpg" alt="catagory10">k</li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; 2024 Art Gallery. All rights reserved.
    </footer>
</body>
<script>
    let liBtns = document.querySelectorAll('.liBtn');
    let title = document.getElementById('catogory-dis')
    liBtns.forEach(libtn => {
        libtn.addEventListener('click',()=>{
            title.innerText = libtn.innerText;
        })
    });
</script>
</html>