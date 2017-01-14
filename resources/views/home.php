<html xmlns="http://www.w3.org/1999/html">
<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->

</header>
    <body>

        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1><?php echo $mainWorld->ua ?></h1>
                <?php foreach($words as $word ): ?>
                    <div class="form-group">
                        <button class="btn btn-default variant
                            <?php echo ($word->id == $mainWorld->id)?'select':'' ?>
                            "> <?php echo $word->eng; ?> </button>
                    </div>
                <?php endforeach; ?>

                <button id="next" class="btn btn-info"> Next >> </button>
            </div>

        </div>
    </body>
</html>


