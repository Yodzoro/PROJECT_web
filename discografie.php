<?php
require_once "header.php";
?>
<div class="content_groups">
    <div class="groups_title">
        <strong><?php echo $trad['discography']; ?></strong>
        <ul class="groups_list">
            <li>
                <!--<a href="/StrayKids" class="active">STRAY KIDS</a>-->
                <button class="tablinks" onclick="openGroup(event, 'skz')">STRAY KIDS</button>
            </li>
            <li>
                <!--<a href="/Ateez" class>ATEEZ</a>-->
                <button class="tablinks" onclick="openGroup(event, 'ateez')">ATEEZ</button>
            </li>
            <li>
                <!--<a href="/TXT" class>TXT</a>-->
                <button class="tablinks" onclick="openGroup(event, 'txt')">TXT</button>
            </li>
        </ul>
    </div>
    <div class="groups">
        <div id="skz" class="tabcontent disco">
                <strong>CURRENTLY UNDER DEVELOPMENT, SORRY</strong>
                <img src="https://i.pinimg.com/564x/4c/ef/ea/4cefeaf9649c11c31fe120e4cc23b0e4.jpg">
        </div>

        <div id="ateez" class="tabcontent disco">
            <!--<h3>ATEEZ</h3>-->
                <strong>CURRENTLY UNDER DEVELOPMENT, SORRY</strong>
                <img src="https://i.pinimg.com/564x/3e/77/9c/3e779c66b33eca0cb6446fd2b6a1eb6b.jpg">

        </div>

        <div id="txt" class="tabcontent disco">
                <strong>CURRENTLY UNDER DEVELOPMENT, SORRY</strong>
                <img src="https://i.pinimg.com/564x/00/e1/2c/00e12cecdd88446000c8d2a53a9f6286.jpg">
            <!--<h3>Tomorrow by Together</h3>-->
        </div>
    </div>
</div>

<script src="show_group.js"></script>
<?php
require_once "footer.php";
?>

