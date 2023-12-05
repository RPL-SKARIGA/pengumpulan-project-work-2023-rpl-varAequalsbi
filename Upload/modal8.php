<?php
function modal8($index_char)
{

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Document</title>
        <style>
            .img {
                width: 80px;
                /* img size */
                height: 80px;
                border-radius: 10px;
            }
        </style>
        <link rel="stylesheet" href="CSS/styles.css">
    </head>

    <body>

        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $index_char ?>">
            <img class="img" src="../images/Hydrangeas.jpg" alt="">
        </button>
        <form action="">
            <div class="modal fade" id="exampleModal<?= $index_char ?>" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal <?= $index_char ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="test" id="test<?= $index_char ?>">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="upload.php?c=" id="btnsub<?= $index_char ?>" data-bs-dismiss="modal" class="btn btn-primary">Save changes</a>
                            <button type="submit" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
    <?php

    ?>
    <script>
        var test<?= $index_char ?> = document.getElementById('test<?= $index_char ?>')
        var btnsub<?= $index_char ?> = document.getElementById('btnsub<?= $index_char ?>');

        btnsub<?= $index_char ?>.addEventListener('click', function(event) {
            event.preventDefault()
            console.log("<?= $index_char ?>")
            charinchaar[<?= $index_char  ?>] = test<?= $index_char ?>.value
            console.log(test<?= $index_char ?>.value)
            window.location.href = 'upload.php?id=' + test<?= $index_char ?>.value + '&team=<?= $_GET['team'] ?>&indexchar=<?= $index_char ?>';
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </html>
<?php
}
?>