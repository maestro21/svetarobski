<!-- Header -->
<div class="section-image" style="background-image:url('<?php echo UPLOADS_URL . 'pics/1.jpg';?>');">

    <div class="header fixed">
        <div class="wrap">
            <div class="introtext">
                <h1>СВЕТЛАНА РОБСКИ</h1>
                SMM, MLM, Blogging, ESSENS style
            </div>
            <div class="menu">
                <?php echo menu(); ?>
            </div>
        </div>
    </div>
</div>

<div class="section-image" style="background-image:url('<?php echo UPLOADS_URL . 'pics/3.jpg';?>');background-attachment:initial !important"></div>


<div class="section first">
    <div class="wrap">
        <?php if(!empty($data['name'])) echo '<h1>' . $data['name'] . '</h1>'; ?>
        <?php echo parse_tags($data['content']);?>
    </div>
</div>


<div class="footer">
    <div class="wrap table">
        <div class="half">
            <p><b>Адрес</b><br>
            Россия, г. Ростов-на-Дону, пр-т Космонавтов 23б<br>
            ТЦ "Космос", 2 этаж, офис №4 Тренинг-центр ESSENS</p>
        </div>
        <div class="half">
            <p><b>Часы</b><br>
            Вторник—пятница: 11:00–19:00<br>
            Суббота и воскресенье: 11:00–17:00
            </p>
        </div>
    </div>
    <div class="copy wrap">&copy 2017 Светлана Робски | Дизайн и разработка Maestro Studio</div>
</div>