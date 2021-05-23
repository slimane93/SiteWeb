<?php if($_COOKIE['login']=='ok')
	{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> star W Especes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css"> <!--css pour le fond noir -->
    
</head>
<body>
    <main role="main">
        <?php include("header.php");?>


        <div class="p-3 mb-2 bg-transparent text-black">
        <br>
            <div class="accordion" id="accordionExample">

                <div class="card border">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                         Mammal
                        </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                        <div class="row row-cols-1 row-cols-sm-3">

                            <div class="card border-light mb-3" style="max-width: 20rem;max-height:20rem;">
                                <img src="species\Dug.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Dug</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 15rem;max-height:22rem;">
                                <img src="species\Twilek.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Twi'lek</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 20rem;max-height:20rem;">
                                <img src="species\Toydarian.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Toydarian</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 20rem;max-height:22rem;">
                                <img src="species\Yoda.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Yoda's species</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 18rem;max-height:22rem;">
                                <img src="species\Human.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                  <h5 class="card-title text-center">Human</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 20rem;max-height:22rem;">
                                <img src="species\Wookie.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Wookie</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 20rem;max-height:22rem;">
                                <img src="species\Ewok.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Ewok</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 18rem;max-height:20rem;">
                                <img src="species\Sullustan.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Sullustan</h5>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Amphibian
                        </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card-deck">

                            <div class="card border-light mb-3" style="max-width: 18rem;">
                                <img src="species\Gungan.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Gungan</h5>
                                </div>
                            </div>

                            <div class="card border-light mb-3" style="max-width: 18rem;">
                                <img src="species\MonCalamari.jpeg" alt="test" >
                                <div class="card-body text-dark">
                                    <h5 class="card-title text-center">Mon Calamari</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Reptile
                        </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-deck">

                                <div class="card border-light mb-3" style="max-width: 18rem;max-height:22rem;">
                                    <img src="species\Trandoshan.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Trandoshan</h5>
                                    </div>
                                </div>

                                <div class="card border-light mb-3" style="max-width: 18rem;max-height:22rem;">
                                    <img src="species\Aleena.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Aleena</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Artificial
                        </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-deck">

                                <div class="card border-light mb-3" style="max-width: 15rem;max-height:22rem;">
                                    <img src="species\Droid.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Droid</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Gastropod
                        </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-deck">

                                <div class="card border-light mb-3" style="max-width: 15rem;">
                                    <img src="species\Hutt.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Hutt</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Reptilian
                        </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-deck">

                                <div class="card border-light mb-3" style="max-width: 19rem;">
                                    <img src="species\Rodian.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Rodian</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Unknown
                        </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-deck">

                                <div class="card border-light mb-3" style="max-width: 18rem;">
                                    <img src="species\Neimodian.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Neimodian</h5>
                                    </div>
                                </div>

                                <div class="card border-light mb-3" style="max-width: 18rem;">
                                    <img src="species\Vulptereen.jpeg" alt="test" >
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-center">Vulptereen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php include('footer.php')?>
    <?php include('footer.php')?>
    </main>
    <script src="bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
<?php }else{
	header('Location: starW_co.php');
}?>