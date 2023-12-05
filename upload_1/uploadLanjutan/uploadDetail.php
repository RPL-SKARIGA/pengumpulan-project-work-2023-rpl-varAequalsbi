<?php
$judul = $_POST['judul'];
$charid1 = $_POST['4001'];
$charid2 = $_POST['4002'];
$charid3 = $_POST['4003'];
$charid4 = $_POST['4004'];
$desc = $_POST['desc'];

include '../../APP/header_1.php';
include '../../Connection/koneksi.php';
include 'arteModal.php';
include 'weaponModal.php';
function getArteNameById($id)
{
    return mysqli_fetch_assoc(mysqli_query(koneksi(), "SELECT name FROM arte WHERE id = $id"))['path'];
}
function getImgById($id)
{
    $conn = koneksi();
    $query = "SELECT path from visionholder where id = $id";

    return mysqli_fetch_assoc(mysqli_query($conn, $query))['path'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="../../cute-alert-master/style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Upload Post
                    </div>
                    <div class="card-body">
                        <form action="proses/uploadProses.php?team=4" method="post">
                            <input type="hidden" name="judul" value="<?php echo $judul; ?>">
                            <input type="hidden" name="charid1" value="<?php echo $charid1; ?>">
                            <input type="hidden" name="charid2" value="<?php echo $charid2; ?>">
                            <input type="hidden" name="charid3" value="<?php echo $charid3; ?>">
                            <input type="hidden" name="charid4" value="<?php echo $charid4; ?>">
                            <input type="hidden" name="desc" value="<?php echo $desc; ?>">

                            <div class="mb-3 row">
                                <label for="selectedImage1" class="form-label col-sm-1">()</label>
                                <div class="col-sm-3">
                                    <img src="../../images/visionholder/<?php echo getImgById($charid1); ?>" alt="" class="" data-bs-toggle="modal" style="width: 100px; height: 100px;" id="4001">

                                    <span id="arte4001"><img src="" alt="" id="imgArte4001" style="min-width: 70px; max-width: 70px; min-height: 70px; max-height: 70px;"></span>
                                    
                                    <span id="wapon4001"><img src="" alt="" id="imgWeapon4001" style="min-width: 100px; max-width: 100px; min-height: 100px; max-height: 100px;"></span>
                                </div>
                                <div class="col-sm-6">
                                    <?php modal(4001); ?>
                                    <input type="hidden" name="arte4001" id="inptarte4001">
            
                                    <?php weaponModal(4001); ?>
                                    <input type="hidden" name="weapon4001" id="inptweapon4001">
                                    <div class="input-group">
                                        <span class="input-group-text">Select role</span>
                                        <select class="form-select" id="selectOption1" style="width: 200px;" name="role4001">
                                            <option value="mainDps" label="Main dps">mainDps</option>
                                            <option value="support" label="Support">support</option>
                                            <option value="subDps" label="Sub dps">subDps</option>
                                            <option value="Healer/Shielder" label="Healer/Shielder">Healer/shielder</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="selectedImage2" class="form-label col-sm-1">()</label>
                                <div class="col-sm-3">
                                    <img src="../../images/visionholder/<?php echo getImgById($charid2); ?>" alt="" class="" data-bs-toggle="modal" style="width: 100px; height: 100px;" id="4002">
                                    <span id="arte4002"><img src="" alt="" id="imgArte4002" style="min-width: 70px; max-width: 70px; min-height: 70px; max-height: 70px;"></span>
                                    <span id="wapon4002"><img src="" alt="" id="imgWeapon4002" style="min-width: 100px; max-width: 100px; min-height: 100px; max-height: 100px;"></span>
                            
                                </div>
                                <div class="col-sm-6">
                                    <?php modal(4002); ?>
                                    <input type="hidden" name="arte4002" id="inptarte4002">
            
                                    <?php weaponModal(4002); ?>
                                    <input type="hidden" name="weapon4002" id="inptweapon4002">
                                    <div class="input-group">
                                        <span class="input-group-text">Select role</span>
                                        <select class="form-select" id="selectOption1" style="width: 200px;"name="role4002">
                                            <option value="mainDps" label="Main dps">mainDps</option>
                                            <option value="support" label="Support">support</option>
                                            <option value="subDps" label="Sub dps">subDps</option>
                                            <option value="Healer/Shielder" label="Healer/Shielder">Healer/shielder</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="selectedImage3" class="form-label col-sm-1">()</label>
                                <div class="col-sm-3">
                                    <img src="../../images/visionholder/<?php echo getImgById($charid3); ?>" alt="" class="" data-bs-toggle="modal" style="width: 100px; height: 100px;" id="4003">
                                    <span id="arte4003"><img src="" alt="" id="imgArte4003" style="min-width: 70px; max-width: 70px; min-height: 70px; max-height: 70px;"></span>
                                    <span id="wapon4003"><img src="" alt="" id="imgWeapon4003" style="min-width: 100px; max-width: 100px; min-height: 100px; max-height: 100px;"></span>
                                
                                </div>
                                <div class="col-sm-6">
                                <?php modal(4003); ?>
                                    <input type="hidden" name="arte4003" id="inptarte4003">
            
                                    <?php weaponModal(4003); ?>
                                    <input type="hidden" name="weapon4003" id="inptweapon4003">
                                    <div class="input-group">
                                        <span class="input-group-text">Select role</span>
                                        <select class="form-select" id="selectOption1" style="width: 200px;"name="role4003">
                                            <option value="mainDps" label="Main dps">mainDps</option>
                                            <option value="support" label="Support">support</option>
                                            <option value="subDps" label="Sub dps">subDps</option>
                                            <option value="Healer/Shielder" label="Healer/Shielder">Healer/shielder</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="selectedImage4" class="form-label col-sm-1">()</label>
                                <div class="col-sm-3">
                                    <img src="../../images/visionholder/<?php echo getImgById($charid4); ?>" alt="" class="" data-bs-toggle="modal" style="width: 100px; height: 100px;" id="4004">
                                    <span id="arte4004"><img src="" alt="" id="imgArte4004" style="min-width: 70px; max-width: 70px; min-height: 70px; max-height: 70px;"></span>
                                    <span id="wapon4004"><img src="" alt="" id="imgWeapon4004" style="min-width: 100px; max-width: 100px; min-height: 100px; max-height: 100px;"></span>
                               
                                </div>
                                <div class="col-sm-6">
                                <?php modal(4004); ?>
                                    <input type="hidden" name="arte4004" id="inptarte4004">
            
                                    <?php weaponModal(4004); ?>
                                    <input type="hidden" name="weapon4004" id="inptweapon4004">
                                    <div class="input-group">
                                        <span class="input-group-text">Select role</span>
                                        <select class="form-select" id="selectOption1" style="width: 200px;"name="role4004">
                                            <option value="mainDps" label="Main dps">mainDps</option>
                                            <option value="support" label="Support">support</option>
                                            <option value="subDps" label="Sub dps">subDps</option>
                                            <option value="Healer/Shielder" label="Healer/Shielder">Healer/shielder</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3" id="tagcontainer">
                                <label for="postSubtitle" class="form-label">Tags</label>
                                <label for="postSubtitle" class=""><span id="addbutton">+</span></label>

                                <div style="display: flex; flex-direction: row;" id="tagscontent">
                                    <input type="text" class="form-control" id="postSubtitle" name="Tags" style="max-width: 100px; max-height: fit-content;  padding: 5px 10px; background-color: #34495e;  border: none; margin: 10px" placeholder="#">
                                </div>

                                <input type="hidden" name="tag_count" id="tag_count" value="">
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tagbutton = document.getElementById('addbutton')
        const tagcontainer = document.getElementById('tagscontent')
        var count = 1;

        tagbutton.addEventListener('click', function() {
            if (tagcontainer.children.length < 3) {
                const newtag = createTagelement(count)
                tagcontainer.appendChild(newtag)
                count++
                document.getElementById("tag_count").value = count;
            } else {
                cuteToast({
                    title: "EROR",
                    type: "error", // or 'info', 'error', 'warning'
                    message: "Cannot put more than 3 tags",
                    timer: 5000
                })
            }
        })
        
        function createTagelement(count) {
            const tagelement = document.createElement('input')
            tagelement.type = "text"
            tagelement.placeholder = "#"
            tagelement.class = "from-control"
            tagelement.name = `Tags${count}`
            tagelement.style = "max-width: 100px; max-height: fit-content;  padding: 5px 10px; background-color: #34495e;  border: none; margin: 10px; color: #ffffff;"
            return tagelement
        }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../../cute-alert-master/cute-alert.js"></script>
</body>

</html>