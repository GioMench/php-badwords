<?php
$badWord = $_GET["badword"];
$paragraph = $_GET["paragraph"];
//var_dump($badWord, $paragraph);

//length of paragraph
$lengthParagraph = strlen($paragraph);
//number of words in paragraph
$wordsParagraph = explode(" ", $paragraph);

$censoredParagraph = str_replace($badWord, "***", $paragraph);


?>

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
        <main>
            <div class="container">
                <!--replace-text-->
                <div>                    
                    <h3>Your text:</h3>
                    <p><?php echo $paragraph ?></p>
                    <!--n-words-->
                    <div class="fw-semibold">
                        Number of words:
                        <span class="fw-light"><?php echo count($wordsParagraph) ?></span>
                    </div>
                    <!--n-letters-->
                    <div class="fw-semibold">
                        Number of letters:
                        <span class="fw-light"><?php echo $lengthParagraph ?></span>
                    </div>
                </div>
                <!--replace-censured-text-->
                <div>
                    <h3>Your censured text:</h3>
                    <p><?php echo $censoredParagraph ?></p>
                    <!--n-words-->
                    <div class="fw-semibold">
                        Number of words:
                        <span class="fw-light"><?php echo count($wordsParagraph) ?></span>
                    </div>
                    <!--n-letters-->
                    <div class="fw-semibold">
                        Number of letters:
                        <span class="fw-light"><?php echo $lengthParagraph ?></span>
                    </div>
                </div>
            </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>