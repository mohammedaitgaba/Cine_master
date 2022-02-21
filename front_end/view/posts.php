<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/post/post.css">
    <link rel="stylesheet" href="../styles/contact/main.css">
	<link rel="stylesheet" href="../styles/contact/util.css">
    
</head>
<body>
    <?php require_once "./inc/nav.php" ?>
    <div class="container-login100-form-btn">
			<button class="login100-form-btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
				Add post 
			</button>
	</div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Fill the infos below</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body inputss">
                <div class="">
                    <input type="text" name="title" placeholder="Title" required>
                </div>
            </div>

            <div class="modal-body" inputss>
                <div>
                    <input type="text" name="title" placeholder="Description" required>
                </div>
            </div>
            <div class="modal-body" inputss>
                <label> Select category</label>
                <select name="" id="">
                    <option value="fantasy">Fantasy</option>
                    <option value="Action">Action</option>
                    <option value="horror">horror</option>
                    <option value="Drama">Drama</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div class="modal-body" inputss>
                <div>
                    <input type="file" name="post_img" accept="image/png, image/jpeg">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" type="submit">Add</button>
            </div>
            </div>
        </div>
        </div>
    <section id="post_section">
    <!-- <form class="post">
        <div class="pic_user">
            <div class="pic"><img src="../images/téléchargement.png" alt="movies user"></div>
            <div class="user"> <label >Med_gaba</label> </div>
        </div>
        <div class="title"> Seven </div>
    </form> -->
    </section>

    <div>

    </div>

    <div class="container col-lg-6 col-sm-12 this_post">
        <div class="col-lg-12 col-sm-12">
            <div class="pic_user">
            <div class="pic_user_in">
                <div class="pic"><img src="../images/téléchargement.png" alt=""></div>
                <div class="user"> <label > Med_gaba</label></div>
            </div>
             
             <div class="crud" >
                 <button><img src="../images/menu.png" alt=""></button>
                 
             </div>
            </div> 
        </div>
        <div class="title">
            <label > The best movie ever </label>
        </div>
        <div class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis autem, aliquid eaque in laudantium pariatur est veniam 
            libero fuga ad perspiciatis, ipsum hic culpa labore et dolore, impedit deserunt sint.</div>
        
            <div class="post_pic">
                <img src="../images/darknight.jpeg" alt="">
            </div>
        
        <div class="post_comnt">
            <input type="text" name="comment" placeholder="Comment">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-send btn_send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
            </svg></a>
        </div>
    </div>

    <?php include "./inc/footer.php" ?>

    
    
</body>
</html>