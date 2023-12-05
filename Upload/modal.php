<?php
function modal($index_char)
{
    $characterIcons = [
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
    ];
?>
<!-- <script>
    const characterIconsjs = [
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
    ]; -->
</script>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <title>Document</title>
        <style>
            .img {
                width: 80px;
                /* img size */
                height: 80px;
                border-radius: 10px;
            }

            option.avatar {
                background-repeat: no-repeat !important;
                padding-left: 20px;
            }

            .avatar .ui-icon {
                background-position: left top;
            }
        </style>
        <link rel="stylesheet" href="CSS/styles.css">



        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

        <script>
            // $(function() {
            //     $.widget("custom.iconselectmenu", $.ui.selectmenu, {
            //         _renderItem: function(ul, item) {
            //             var li = $("<li>"),
            //                 wrapper = $("<div>", {
            //                     text: item.label
            //                 });

            //             if (item.disabled) {
            //                 li.addClass("ui-state-disabled");
            //             }

            //             $("<span>", {
            //                     style: item.element.attr("data-style"),
            //                     "class": "ui-icon " + item.element.attr("data-class")
            //                 })
            //                 .appendTo(wrapper);

            //             return li.append(wrapper).appendTo(ul);
            //         }
            //     });
            //     // mana error
            //     $("#test<?= $index_char ?>")
            //         .iconselectmenu()
            //         .iconselectmenu("menuWidget")
            //         .addClass("ui-menu-icons");
            // });
        </script>
    </head>

    <body>

        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $index_char; ?>" >
            <img src="../images/visisonHolder/<?= $characterIcons[2] ?>" alt="" width="120px" height="120px" id="buttonModal">
        </button>
        <form action="">
            <div class="modal fade" id="exampleModal<?php echo $index_char; ?>" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">CHAR IN <?php echo $index_char; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <select name="test" id="test<?php echo $index_char; ?>">
                                <?php foreach ($characterIcons as $charIcon) : ?>
                                    <option data-class="avatar" value="<?php echo array_search($charIcon, $characterIcons); ?>" data-style="background-image:url(' ../images/visionHolder/<?= $charIcon; ?>')">
                                        <?= $charIcon; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="upload.php?c=" id="btnsub<?php echo $index_char; ?>" data-bs-dismiss="modal" class="btn btn-primary">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
    <?php

    ?>
    <script>
        var test<?php echo $index_char; ?> = document.getElementById('test<?php echo $index_char; ?>')
        var btnsub<?php echo $index_char; ?> = document.getElementById('btnsub<?php echo $index_char; ?>');

        btnsub<?php echo $index_char; ?>.addEventListener('click', function(event) {
            event.preventDefault()
            console.log("<?php echo $index_char; ?>")
            charinchaar[<?php echo $index_char; ?>] = test<?php echo $index_char; ?>.value
            console.log(test<?php echo $index_char; ?>.value)
            window.location.href = 'upload.php?id=' + test<?php echo $index_char; ?>.value + '&team=<?php echo $_GET['team']; ?>&indexchar=<?php echo $index_char; ?>';
        })
    </script>


    </html>
<?php
}
?>