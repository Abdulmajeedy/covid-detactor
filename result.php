<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>Ask Me</title>
</head>

<body>
    <?php 
     ini_set ('display_errors', 1);
 error_reporting (E_ALL | E_STRICT);
    session_start();
    $response = json_decode($_REQUEST['response']);
    foreach($response as $resp){

        $country = $resp->country;
        $recovered = $resp->recovered;
        $dead = $resp->deaths;
        $critical = $resp->critical;
        $confirmed = $resp->country;
       

    }

    ?>

    <div class="card" style="width: 28rem; margin:0 auto;margin-top:200px;box-shadow:1px 1px 1px 1px">
        <div class="card-body">
            <center>
                <h5 class="card-title">Ask Me</h5>
            </center>
            <br>
            <form action="getCompnayyInfo.php" method="Post">
                <h2>Covid Info For: <b><?php  echo $country;?></b></h2>
                <div class="mb-3">
                    <h4>
                        <p>Patient Recovered: <span class="badge bg-success"><?php echo $recovered;?></span>
                        <p>Patient Confirmed: <span class="badge bg-warning"><?php echo $confirmed;?></span>
                        <p>Deaths: <span class="badge bg-danger"><?php echo $dead;?></span>
                            </h2>


                        </p>
            </form>
        </div>
    </div>
    <?php
    // session_unset();
    //https://www.youtube.com/watch?v=yYIm_swpCoY
    ?>

</body>

</html>