<?php
require_once "header.php";
?>
<div class="conten  t_groups">
    <div class="groups_title">
        <strong><?php echo $trad['groups']; ?></strong>
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
        <div id="skz" class="tabcontent">
            <div class="wrap_group">
                <h1>STRAY KIDS</h1>
                <div class="group_img">
                    <img height="455" width="700" src="https://www.billboard.com/wp-content/uploads/2022/09/feature-stray-kids-billboard-2022-bb-ssam-kim-3-1260-9703712295569.jpg">
                </div>
                <div class="group_discription">
                    <p><strong>Stray Kids (스트레이 키즈)</strong> is a South Korean boy group under JYP Entertainment. The group consists of 8 members: <u>Bang Chan, Lee Know, Changbin, Hyunjin, Han, Felix, Seungmin, and I.N</u>. Stray Kids was created through the survival program with the same name, Stray Kids. Stray Kids debuted on <strong>March 25, 2018</strong>. As of February 10th, 2022, they are also signed under Republic Records.</p>
                </div>
                <div class="group_links">

                </div>
            </div>
        </div>

        <div id="ateez" class="tabcontent">
            <div class="wrap_group">
                <h1>ATEEZ</h1>
                <div class="group_img">
                    <img height="450" width="650" src="https://i0.wp.com/kstationtv.com/wp-content/uploads/2021/10/ATEEZ-2-4.jpg?resize=800%2C564&ssl=1">
                </div>
                <div class="group_discription">
                    <p><strong>ATEEZ (에이티즈)</strong>, known pre-debut as KQ Fellaz, is an 8-member boy group under KQ Entertainment. The group consists of: <u>Seonghwa, Hongjoong, Yunho, Yeosang, San, Mingi, Wooyoung and Jongho</u>. They released the pre-debut song ‘From’ on <strong>July 9, 2018</strong> with another trainee named Junyoung. The group debuted on <strong>October 24, 2018</strong> with the mini-album “Treasure Ep.1: All to Zero” and the title songs ‘Pirate King’ and ‘Treasure’. On July 8, 2019, ATEEZ signed with USA record label RCA Records. They are also signed to the Japanese record label Nippon Columbia since 2019.</p>
                </div>
                <div class="group_links">

                </div>
            </div>

        </div>

        <div id="txt" class="tabcontent">
            <div class="wrap_group">
                <h1>Tomorrow by Together</h1>
                <div class="group_img">
                    <img height="400" width="715" src="https://rare-gallery.com/uploads/posts/304263-TXT-Group-Members-Dream-Chapter-Magic-8K.jpg">
                </div>
                <div class="group_discription">
                    <p><strong>TXT (투모로우바이투게더)</strong>, also known as <u>TOMORROW X TOGETHER</u>, is a 5-member boy group formed by Big Hit Music (part of HYBE Labels). The group consists of: <u>Yeonjun, Soobin, Beomgyu, Taehyun and Huening Kai</u>. They debuted on <strong>March 4th, 2019</strong> with their first mini-album ‘The Dream Chapter: STAR’. There are no set positions within the group, it changes each comeback/song.</p>
                </div>
                <div class="group_links">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="show_group.js"></script>
<?php
require_once "footer.php";
?>
