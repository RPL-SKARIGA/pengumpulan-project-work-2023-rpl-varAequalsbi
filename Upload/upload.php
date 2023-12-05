<?php include '../APP/header_1.php';
include 'modal.php'; 

// $characterIcons = [
//     'Dehya_Icon.png',
//     'Diluc_Icon.png',
//     'Diluc_Skin_Red_Dead_of_Night_Icon.png',
//     'Diona_Icon.png',
//     'Dori_Icon.png',
//     'Eula_Icon.png',
//     'Faruzan_Icon.png',
//     'Fischl_Icon.png',
//     'Fischl_Skin_Ein_Immernachtstraum_Icon.png',
//     'Freminet_Icon.png',
//     'Ganyu_Icon.png',
//     'Gorou_Icon.png',
//     'Hu_Tao_Icon.png',
//     'Jean_Icon.png',
//     'Jean_Skin_Gunnhildr_s_Legacy_Icon.png',
//     'Jean_Skin_Sea_Breeze_Dandelion_Icon.png',
//     'Kaedehara_Kazuha_Icon.png',
//     'Kaeya_Icon.png',
//     'Kaeya_Skin_Sailwind_Shadow_Icon.png',
//     'Kamisato_Ayaka_Icon.png',
//     'Kamisato_Ayaka_Skin_Springbloom_Missive_Icon.png',
//     'Kamisato_Ayato_Icon.png',
//     'Kaveh_Icon.png',
//     'Keqing_Icon.png',
//     'Keqing_Skin_Opulent_Splendor_Icon.png',
//     'Kirara_Icon.png',
//     'Klee_Icon.png',
//     'Klee_Skin_Blossoming_Starlight_Icon.png',
//     'Kujou_Sara_Icon.png',
//     'Kuki_Shinobu_Icon.png',
//     'Layla_Icon.png',
//     'Lisa_Icon.png',
//     'Lisa_Skin_A_Sobriquet_Under_Shade_Icon.png',
//     'Lumine_Icon.png',
//     'Lynette_Icon.png',
//     'Lyney_Icon.png',
//     'Mika_Icon.png',
//     'Mona_Icon.png',
//     'Mona_Skin_Pact_of_Stars_and_Moon_Icon.png',
//     'Nahida_Icon.png',
//     'Neuvillette_Icon.png',
//     'Nilou_Icon.png',
//     'Ningguang_Icon.png',
//     'Ningguang_Skin_Orchid_s_Evening_Gown_Icon.png',
//     'Noelle_Icon.png',
//     'Paimon_Icon.png',
//     'Qiqi_Icon.png',
//     'Raiden_Shogun_Icon.png',
//     'Razor_Icon.png',
//     'Rosaria_Icon.png',
//     'Rosaria_Skin_To_the_Church_s_Free_Spirit_Icon.png',
//     'Sangonomiya_Kokomi_Icon.png',
//     'Sayu_Icon.png',
//     'Shenhe_Icon.png',
//     'Shikanoin_Heizou_Icon.png',
//     'Sucrose_Icon.png',
//     'Tartaglia_Icon.png',
//     'Thoma_Icon.png',
//     'Tighnari_Icon.png',
//     'Traveler_Icon.png',
//     'Venti_Icon.png',
//     'Wanderer_Icon.png',
//     'Wriothesley_Icon.png',
//     'Xiangling_Icon.png',
//     'Xiao_Icon.png',
//     'Xingqiu_Icon.png',
//     'Xinyan_Icon.png',
//     'Yae_Miko_Icon.png',
//     'Yanfei_Icon.png',
//     'Yaoyao_Icon.png',
//     'Yelan_Icon.png',
//     'Yoimiya_Icon.png',
//     'Yun_Jin_Icon.png',
//     'Zhongli_Icon.png',
//     'Aether_Icon.png',
//     'Albedo_Icon.png',
//     'Alhaitham_Icon.png',
//     'Aloy_Icon.png',
//     'Amber_Icon.png',
//     'Amber_Skin_100__Outrider_Icon.png',
//     'Arataki_Itto_Icon.png',
//     'Baizhu_Icon.png',
//     'Barbara_Icon.png',
//     'Barbara_Skin_Summertime_Sparkle_Icon.png',
//     'Beidou_Icon.png',
//     'Bennett_Icon.png',
//     'Candace_Icon.png',
//     'Chongyun_Icon.png',
//     'Collei_Icon.png',
//     'Cyno_Icon.png',
// ];?>
<script>
const characterIcons = [
    'Dehya_Icon.png',
    'Diluc_Icon.png',
    'Diluc_Skin_Red_Dead_of_Night_Icon.png',
    'Diona_Icon.png',
    'Dori_Icon.png',
    'Eula_Icon.png',
    'Faruzan_Icon.png',
    'Fischl_Icon.png',
    'Fischl_Skin_Ein_Immernachtstraum_Icon.png',
    'Freminet_Icon.png',
    'Ganyu_Icon.png',
    'Gorou_Icon.png',
    'Hu_Tao_Icon.png',
    'Jean_Icon.png',
    'Jean_Skin_Gunnhildr_s_Legacy_Icon.png',
    'Jean_Skin_Sea_Breeze_Dandelion_Icon.png',
    'Kaedehara_Kazuha_Icon.png',
    'Kaeya_Icon.png',
    'Kaeya_Skin_Sailwind_Shadow_Icon.png',
    'Kamisato_Ayaka_Icon.png',
    'Kamisato_Ayaka_Skin_Springbloom_Missive_Icon.png',
    'Kamisato_Ayato_Icon.png',
    'Kaveh_Icon.png',
    'Keqing_Icon.png',
    'Keqing_Skin_Opulent_Splendor_Icon.png',
    'Kirara_Icon.png',
    'Klee_Icon.png',
    'Klee_Skin_Blossoming_Starlight_Icon.png',
    'Kujou_Sara_Icon.png',
    'Kuki_Shinobu_Icon.png',
    'Layla_Icon.png',
    'Lisa_Icon.png',
    'Lisa_Skin_A_Sobriquet_Under_Shade_Icon.png',
    'Lumine_Icon.png',
    'Lynette_Icon.png',
    'Lyney_Icon.png',
    'Mika_Icon.png',
    'Mona_Icon.png',
    'Mona_Skin_Pact_of_Stars_and_Moon_Icon.png',
    'Nahida_Icon.png',
    'Neuvillette_Icon.png',
    'Nilou_Icon.png',
    'Ningguang_Icon.png',
    'Ningguang_Skin_Orchid_s_Evening_Gown_Icon.png',
    'Noelle_Icon.png',
    'Paimon_Icon.png',
    'Qiqi_Icon.png',
    'Raiden_Shogun_Icon.png',
    'Razor_Icon.png',
    'Rosaria_Icon.png',
    'Rosaria_Skin_To_the_Church_s_Free_Spirit_Icon.png',
    'Sangonomiya_Kokomi_Icon.png',
    'Sayu_Icon.png',
    'Shenhe_Icon.png',
    'Shikanoin_Heizou_Icon.png',
    'Sucrose_Icon.png',
    'Tartaglia_Icon.png',
    'Thoma_Icon.png',
    'Tighnari_Icon.png',
    'Traveler_Icon.png',
    'Venti_Icon.png',
    'Wanderer_Icon.png',
    'Wriothesley_Icon.png',
    'Xiangling_Icon.png',
    'Xiao_Icon.png',
    'Xingqiu_Icon.png',
    'Xinyan_Icon.png',
    'Yae_Miko_Icon.png',
    'Yanfei_Icon.png',
    'Yaoyao_Icon.png',
    'Yelan_Icon.png',
    'Yoimiya_Icon.png',
    'Yun_Jin_Icon.png',
    'Zhongli_Icon.png',
    'Aether_Icon.png',
    'Albedo_Icon.png',
    'Alhaitham_Icon.png',
    'Aloy_Icon.png',
    'Amber_Icon.png',
    'Amber_Skin_100__Outrider_Icon.png',
    'Arataki_Itto_Icon.png',
    'Baizhu_Icon.png',
    'Barbara_Icon.png',
    'Barbara_Skin_Summertime_Sparkle_Icon.png',
    'Beidou_Icon.png',
    'Bennett_Icon.png',
    'Candace_Icon.png',
    'Chongyun_Icon.png',
    'Collei_Icon.png',
    'Cyno_Icon.png',
]
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <?php
    if (isset($_GET['indexchar'])) {
        $indexchar = $_GET['indexchar'];
            $id = $_GET['id'];
    }else{$id = 0; $indexchar = 0;}

    ?>
</head>

<script>
    var charinchaar = []

    function printChar(event) {
        event.preventDefault();
        console.log(charinchaar)
    }
</script>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Upload Post
                    </div>
                    <!-- <button onclick="printChar">a</button> -->
                    <?php
                    if ($_GET['team'] == "4") {
                    ?>
                        <div class="card-body">
                            <form action="uploadProcess.php?team=4" method="post">
                                <div class="mb-3 row">
                                    <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                    <div class="col-sm-3">
                                    <img src="../images/visisonHolder/<?= $characterIcons[2] ?>" alt="" width="120px" height="120px" style="display:none" id="image<?php echo $index_char; ?>">
                                        <?php modal(41) ?>
                                        <?php if($indexchar == 41){ ?>
                                            <script>
                                            const img<?php echo $index_char; ?> = document.querySelector('#image<?php echo $index_char; ?>')
                                            function img<?php echo $index_char; ?>fun (img<?php echo $index_char; ?>){
                                                    img<?php echo $index_char; ?>.setAttribute('src', '/../images/visionHolder/'+ characterIcons[<?= $id?>])
                                                    img<?php echo $index_char; ?>.style.display = 'inline'
                                                    document.querySelector('buttonModal').style.visibility = 'hidden'
                                                } (img<?php echo $index_char; ?>)
                                            </script>
                                            <input type="hidden" name="41" value="<?= $id ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                    <div class="col-sm-3">
                                        <?php modal(42) ?>
                                        <input type="hidden" name="42" value="<?php if($indexchar == 42) echo $id?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                    <div class="col-sm-3">
                                        <?php modal(43) ?>
                                        <input type="hidden" name="43" value="<?php if($indexchar == 43) echo $id?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                    <div class="col-sm-3">
                                        <?php modal(44) ?>
                                        <input type="hidden" name="44" value="<?php if($indexchar == 44) echo $id?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="postTitle" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" id="postTitle" name="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="postSubtitle" class="form-label">Post Tags</label>
                                    <input type="text" class="form-control" id="postSubtitle" name="Tags">
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="printChar">Upload</button>
                            </form>
                        <?php } elseif ($_GET['team'] == "8") {
                        header('location: upload8.php');
                    } ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script>
        const img = document.querySelector("img")
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/CRUD.js"></script>
</body>



</html>