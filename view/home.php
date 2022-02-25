<?php 
    require_once '../controller/contact.controller.php';
    if(isset($_POST['send_msg'])){
        $my_msg=new send_message();
        $my_msg->send_msg();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/home/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/contact/main.css">
	<link rel="stylesheet" href="../styles/contact/util.css">
    
</head>
<body>
    <?php require_once './inc/nav.php' ?>
    <div class="mycontainer">
        <div class="heading">
        <h1>CINE MASTER </h1>
        <h2>The best comunity of movies lover</h2>
        </div>
    </div>
    <section class="type_watch">
        <a href="#movies">Movies</a>

        <a href="#series">series</a>

        <a href="#animation"> animation</a>
    </section>
    <div class="post">
        <h2>share with us </h2>
        <div class="semi_container">
            <div class="paragraph_btn">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis 
                 <br> reprehenderit quasi tenetur culpa cumque iure similique ratione 
                 <br> voluptatem maiores consectetur adipisci corporis, id ipsam alias 
                 <br> assumenda tempora, quos pariatur ex. </p>
                    <div class="container-login100-form-btn">
                    <a href="http://localhost/cine_master/view/posts.php"><button class="login100-form-btn">
                        Let's go
                    </button></a></div>
            </div>
            <img src="../images/dead.jpg" alt="">
        </div>
    </div>

    <H2>Movies to watch <hr> </H2>
    <div id="movies" class="movies" >
        <div ><img src="../images/shawshenk.jpg" alt="">
        <p>The Shawshank Redemption (1994)</p></div>
        <div><img src="../images/darknight.jpeg" alt="">
        <p>The Dark Knight (2008) </p></div>
        <div ><img src="../images/troy.jpg" alt="">
        <p>Troy (2004)</p></div>
        <div><img src="../images/Leviathan.jpeg" alt="">
        <p>Leviathan (2014)</p></div>
        <div><img src="../images/lord.jfif" alt="">
        <p>The Lord of the Rings (2001) </p></div>
        <div><img src="../images/Se7en.jpg" alt="">
        <p>Seven (1995)</p></div>
    </div>
    

    <H2>Series to watch <hr> </H2>
    <div id="series" class="movies">
    <div><img src="../images/haunting.jpg" alt="">
        <p>The Haunting of Hill House (2018)</p></div>
        <div><img src="../images/Game_of_Thrones.jpg" alt="">
        <p>Game of Thrones (2011)</p></div>
        <div><img src="../images/dexter.jfif" alt="">
        <p>Dexter (2006)</p></div>
        <div><img src="../images/vikings.jpg" alt="">
        <p>Vikings (2013)</p></div>
        <div><img src="../images/the witcher.jfif" alt="">
        <p>The witcher (2019)</p></div>
        <div><img src="../images//priso.jpg" alt="">
        <p>Prison break (2005)</p></div>
    </div>

    <H2>Animation to watch <hr> </H2>

    <div id="animation" class="movies" >
    <div><img src="../images/UP2009.jpg" alt="">
        <p>Up (2009)</p></div>
        <div><img src="../images/TOY.jpg" alt="">
        <p>Toy Story 3 (2010)</p></div>
        <div><img src="../images/PRINS.jpg" alt="">
        <p>Princess Mononoke (1997)</p></div>
        <div><img src="../images/WALL.jpg" alt="">
        <p>WALL-E (2008)</p></div>
        <div><img src="../images/COC.jpg" alt="">
        <p>Coco (2017)</p></div>
        <div><img src="../images/YOUR.jpg" alt="">
        <p>Your Name (2016)</p></div>
    </div>
    </div>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-40 p-b-30">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Contact us 
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-21" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-21" data-validate = "email is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
                    <span class="txt1 p-b-11">
						Your message
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<textarea class="input100" type="text" name="message"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="send_msg">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
   <?php require './inc/footer.php' ?>
</body>
</html>