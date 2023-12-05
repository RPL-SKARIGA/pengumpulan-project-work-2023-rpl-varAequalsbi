<?php include 'modal.php' ?>
<?php include '../app/header_1.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Upload</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <form action="uploadLanjutan/uploadDetail.php" method="POST">
                    <div class="card-header">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Name of team" id="judul" onkeydown="cek()" name="judul">
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="postTitle" class="form-label">1st team here</label>
                                <div class="col-sm-12">
                                    <?php modal(4001)?>
                                    <input type="hidden" id="4001" value="" name="4001">
                                    <?php modal(4002)?>
                                    <input type="hidden" id="4002" value="" name="4002">
                                    <?php modal(4003)?>
                                    <input type="hidden" id="4003" value="" name="4003">
                                    <?php modal(4004)?>
                                    <input type="hidden" id="4004" value="" name="4004">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">write some description for it</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" onkeydown="cek()" name="desc"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" disabled id="NextBTN">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
<script>
    const judul = document.getElementById("judul")
    const modal = [document.getElementById("4001"), document.getElementById("4002"),document.getElementById("4003"),document.getElementById("4004")]
    const textarea = document.getElementById("exampleFormControlTextarea1")
    function cek() {
        // console.log([judul.value.length, textarea.value.length])
        if (judul.value.length > 0 && textarea.value.length > 0) {
            console.log("pass filter 1")
            modal.forEach(i => {
                console.log(i.value)
                console.log("pass filter 2")
                if (i.value.length > 0) {
                    document.getElementById("NextBTN").disabled = false
                }else{
                    document.getElementById("NextBTN").disabled = true
                }
            })
        }else{
            document.getElementById("NextBTN").disabled = true
        }
    }
</script>
</body>
</html>