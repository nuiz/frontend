<?php
require_once "bootstrap.php";
$list_category = Api::get("/category");
$category = Api::get("/category/".$_GET["category_id"])->body;
$contents = Api::get("/content")->body;
$contents = $contents->data;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="GrpReserch.css">
    <script src="prettyPhoto_compressed/js/jquery-1.6.1.min.js"></script>
    <script src="prettyPhoto_compressed/js/jquery.prettyPhoto.js"></script>
    <link rel="stylesheet" href="prettyPhoto_compressed/css/prettyPhoto.css">
    <meta charset="UTF-8">
    <meta name="viewport" runat="viewportid" content="width=1366, initial-scale=1"/>
</head>
<body>

<div class="body"></div>
<div class="Tinews">
    <a href="images/G_reserch/Image.jpeg" rel="prettyPhoto[pp_gal]"
       title="Google.com opened at 100%">
        <a href="<?php echo $contents[0]->content_type == "video"? $contents[0]->video_url: $contents[0]->book_url;?>?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]"
        title="<?php echo $contents[0]->content_description;?>">
        <div class="CaptionNews">
<!--            <span>หัวข้อ</span>-->
<!--            <div class="PictureNews">-->
<!--            </div>-->
            <div style="margin-top: 10px;">
                <img src="<?php echo $contents[0]->content_type == "video"? $contents[0]->video_thumb_url: $contents[0]->book_cover_url;?>" height="196">
            </div>
            <div class="TextPN"><?php echo $contents[0]->content_name;?></div>
        </div>
        </a>
    </a>

    <div class="sum">
        <div class="material">รวมเนื้อหา</div>
        <div class="video">รวมวีดีโอ</div>
    </div>


    <div class="Tinews-right">
        <div class="Caption">
<!--            <div>หัวข้อ</div>-->
            <?php foreach($contents as $i => $item){?>
            <a href="<?php echo $item->video_url;?>?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]"
               title="<?php echo $item->content_description;?>">
                <div class="Pic">
                    <div class="Pic-img" style="background-image: url(<?php echo $item->content_type == "video"? $item->video_thumb_url: $item->book_cover_url;?>);"></div>
                    <div class="TextPic"><?php echo $item->content_name;?></div>
                </div>
            </a>
            <?php }?>
            <div style="clear: both;"></div>
        </div>
    </div>

</div>
<div class="BgGR"></div>


<div class="CaptionOther">
    <?php foreach($contents as $i => $item){ if($item->category_id != $_GET["category_id"]) continue; ?>
        <a href="<?php echo $item->video_url;?>?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]"
               title="<?php echo $item->content_description;?>">
            <div class="Pic_other Pic_other-item">
                <div class="Pic_other-item-picture" style="background-image: url(<?php echo $item->content_type == "video"? $item->video_thumb_url: $item->book_cover_url;?>);"></div>
                <div class="TextPicOther"><?php echo $item->content_name;?></div>
            </div>
        </a>
    <?php }?>
</div>


<!--<div class="buttonleft_small"></div>-->
<!--<div class="buttonright_small"></div>-->

<div class="select">
    <div class="Krongthip">
<!--        <div class="TextKt">กรองทิพย์</div>-->
    </div>

    <div class="ResCig">
<!--        <div class="TextRc">วิจัยบุหรี่</div>-->
    </div>

    <div class="SaiFon">
<!--        <div class="textSf">สายฝน</div>-->
    </div>

    <div class="DejaVu">
<!--        <div class="TextDv">เดจาวู</div>-->
    </div>

    <div class="develop">
<!--        <div class="TextDl">การพัฒนาการ<br>บุหรี่ยุคก่อนจน<br>ถึงปัจจุบัน</div>-->
    </div>

    <div class="line">
        <div class="Textline">หมวดหมู่ <?php echo $category->category_name;?></div>
    </div>

    <div class="buttonleft"></div>
    <div class="buttonright"></div>

    <a href="group.html"><div class="icon_grp"></div></a>

    <div class="groups">
        <div class="on"></div>
        <div class="grps">หมวดหมู่ย่อย <?php echo $category->category_name;?></div>
    </div>

    <div class="mass"></div>
    <div class="pack"></div>
    <div class="tobacco"></div>
    <div class="total"></div>
    <div class="cigN"></div>
    <div class="cigNe"></div>
    <div class="cig"></div>
    <div class="cigs"></div>
    <div class="receipts"></div>
    <div class="receiptsII"></div>


    <div class="down"></div>


</div>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
            social_tools: false
        });
    });
</script>
</body>
</html>