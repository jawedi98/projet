<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['id'])){
  $clientC=new clientC();
    $result=$clientC->recupererClient($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Splite-Admin Dashboard</title>
     <script src="js/client.js">
   </script>
   <script src="js/form.js">
   </script>
    <!--Favicon -->
    <link rel="icon" href="favicon.html" type="image/x-icon"/>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

  </head>

  <body class="bg-primary">

      <!--app open-->
    <div id="app" class="page">
      <section class="section section-2">
                <div class="container">
          <div class="">

            <!--single-page open-->
            <div class="single-page">
              <div class="">
                <div class="wrapper wrapper2">
                  <form id="login" class="card-body" tabindex="500" name="f" method="POST" >
                    <h3 class="text-dark">vos modifications</h3>
                    <div class="id">
                      <input type="text" class="form-control" id="exampleInputNom" placeholder="Entrer identifiant" name="id" value="<?PHP echo $_GET['id'] ?>" readonly >
                    </div>
                    <div class="nom">
                      <input type="text" class="form-control" id="exampleInputNom" placeholder="Entrer nom" name="nom" onblur="verifnom(this)">
                    </div>
                    <div class="prenom">
                      <input type="text" class="form-control" id="exampleInputPrenom" placeholder="Entrer prenom" name="prenom"onblur="verifnom(this)">
                    </div>
                    <div class="telephone">
                      <input type="number" class="form-control" id="exampleInputTelephone" placeholder="Entrer telephone" name="telephone" onblur="veriftel(this)">
                    </div>
                    <div class="mail">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer email" name="adresse" onblur="verifMail(this)">
                    </div>
                    <div class="passwd">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" onblur="verifpass(this)">
                    </div>
                    
                    <input class="btn btn-primary btn-block"  type="submit" name="modifier" value="modifier">
                   <input type="hidden" name="idd" value="<?PHP echo $_GET['id'];?>">
                  </form>
                  <?PHP
  
}
if (isset($_POST['modifier'])){
  $client=new Client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['telephone'],$_POST['password']);
  $clientC->modifierClient($client,$_POST['idd']);
  echo "<META http-equiv='refresh' content='0;URL=editable.php'>";
  
  
}
?>
                </div>
              </div>
            </div>
            <!--single-page closed-->

          </div>
        </div>
      </section>
    </div>
    <!--app closed-->

    <!--Jquery.min js-->
    <script src="assets/js/jquery.min.js"></script>

    <!--popper js-->
    <script src="assets/js/popper.js"></script>

    <!--Tooltip js-->
    <script src="assets/js/tooltip.js"></script>

    <!--Bootstrap.min js-->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Jquery star rating-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Jquery.nicescroll.min js-->
    <script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!--Scroll-up-bar.min js-->
    <script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

    <script src="assets/js/moment.min.js"></script>

    <!--mCustomScrollbar js-->
    <script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Sidemenu js-->
    <script src="assets/plugins/toggle-menu/sidemenu.js"></script>

    <!--Scripts js-->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.showmore.js"></script>
  </body>

<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
</html>