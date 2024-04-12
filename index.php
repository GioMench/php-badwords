<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-uppercase text-center">badword</h1>
        <form action="./script.php" method="get">
            <!--text-area-paragraph-->
            <div class="mb-3">
                <label for="paragraph" class="form-label">Write your text:</label>
                <textarea class="form-control" id="paragraph" name="paragraph"></textarea>
            </div>

            <!--input-badword-->
            <div class="mb-3">
                <label for="bad-word" class="form-label">Your word to censored:</label>
                <input type="text" class="form-control" id="badword" name="badword">
            </div>

            <!--submit-btn -->
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>