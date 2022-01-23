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

    <div class="card" style="width: 28rem; margin:0 auto;margin-top:200px;box-shadow:1px 1px 1px 1px">
        <div class="card-body">
            <h5 class="card-title">Ask Me</h5>
            <small>Get The Latest Information About Corona Virus In the World</small>
            <br>
            <br>
            <form action="getCompnayyInfo.php" method="Post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Country Name</label>
                    <input type="text" name="countryName" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Search By Country...">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>

</body>

</html>