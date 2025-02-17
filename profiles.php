<?php
$title = "Main page";
require_once "header.php";
?>
<div class="content_groups">
    <div class="groups_title">
        <strong><?php echo $trad['profiles']; ?></strong>
        <ul class="groups_list">
            <li>
                <button class="tablinks" onclick="openGroup(event, 'skz')">STRAY KIDS</button>
            </li>
            <li>
                <button class="tablinks" onclick="openGroup(event, 'ateez')">ATEEZ</button>
            </li>
            <li>
                <button class="tablinks" onclick="openGroup(event, 'txt')">TXT</button>
            </li>
        </ul>
    </div>
    <div class="groups">
        <div id="skz" class="tabcontent">
            <div class="members_menu">
                <ul class="members_list">
                    <li>
                        <button class="member_link" onclick="openMember(event, '11')">BANGCHAN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '12')">LEEKNOW</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '13')">CHANGBIN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '14')">HYUNJIN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '15')">HAN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '16')">FELIX</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '17')">SEUNGMIN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '18')">I.N</button>
                    </li>
                </ul>
            </div>
            <div class="cont_profile">
                <div id="11" class="pf_inner" >
                    <div class="profile_img">
                        <div class="color_bg"></div>
                        <div class="artist_img"><img alt="BANG CHAN" width="455" height="580" src="https://pbs.twimg.com/media/FmbnPK9agAACYXe?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">BANG CHAN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Bang Chan (방찬)</li>
                                <li>BIRTH NAME: Christopher Bang</li>
                                <li>KOREAN NAME: Bang Chan (방 찬)</li>
                                <li>POSITION: Leader, Producer, Vocalist, Dancer, Rapper</li>
                                <li>BIRTHDAY: October 3, 1997</li>
                                <li>ZODIAC SIGN: Libra</li>
                                <li>HEIGHT: 171 cm</li>
                                <li>BlOOD TYPE: O</li>
                                <li>MBTI TYPE: ENFJ</li>
                                <li>UNIT: 3RACHA</li>
                                <li>NATIONALITY: Korean Australian</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="12">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="LEE KNOW" width="455" height="580" src="https://pbs.twimg.com/media/FmbnPK_aYAoB-it?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">LEE KNOW</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Lee Know (리노)</li>
                                <li>BIRTH NAME: Lee Min Ho (이 민호)</li>
                                <li>POSITION: Dancer, Vocalist, Rapper</li>
                                <li>BIRTHDAY: October 25, 1998</li>
                                <li>ZODIAC SIGN: Scorpio</li>
                                <li>HEIGHT: 172 cm</li>
                                <li>BLOOD TYPE: O</li>
                                <li>MBTI TYPE: ISFP</li>
                                <li>UNIT: DANCERACHA</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="13">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="CHANGBIN" width="455" height="580" src="https://pbs.twimg.com/media/FmbnYAAacAIdHkf?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">CHANGBIN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Changbin (창빈)</li>
                                <li>BIRTH NAME: Seo Chang Bin (서 창빈)</li>
                                <li>POSITION: Rapper, Vocalist, Producer</li>
                                <li>BIRTHDAY: August 11, 1999</li>
                                <li>ZODIAC SIGN: Leo</li>
                                <li>HEIGHT: 167 cm</li>
                                <li>BLOOD TYPE: O</li>
                                <li>MBTI TYPE: ESFP</li>
                                <li>UNIT: 3RACHA</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="14">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="HYUNJIN" width="455" height="580" src="https://pbs.twimg.com/media/FmbnYAKakAIwTpR?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">HYUNJIN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Hyunjin (현진)</li>
                                <li>BIRTH NAME: Hwang Hyun Jin (황 현진)</li>
                                <li>POSITION: Dancer, Rapper, Vocalist, Visual</li>
                                <li>BIRTHDAY: March 20, 2000</li>
                                <li>ZODIAC SIGN: Pisces</li>
                                <li>HEIGHT: 179 cm</li>
                                <li>BLOOD TYPE: B</li>
                                <li>MBTI TYPE: INFP</li>
                                <li>UNIT: DANCERACHA</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="15">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="HAN" width="455" height="580" src="https://pbs.twimg.com/media/Fmgv23CaEAAKwJ-?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">HAN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Han (한)</li>
                                <li>BIRTH NAME: Han Ji Sung (한 지성)</li>
                                <li>ENGLISH NAME: Peter Han</li>
                                <li>POSITION: Rapper, Vocalist, Producer</li>
                                <li>BIRTHDAY: September 14, 2000</li>
                                <li>ZODIAC SIGN: Virgo</li>
                                <li>HEIGHT: 169 cm</li>
                                <li>BLOOD TYPE: B</li>
                                <li>MBTI TYPE: ISTP</li>
                                <li>UNIT: 3RACHA</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="16">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="FELIX" width="455" height="580" src="https://pbs.twimg.com/media/Fmgv3Y-aEAIE8wz?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">FELIX</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Felix (필릭스)</li>
                                <li>BIRTH NAME: Felix Lee (이 필릭스)</li>
                                <li>KOREAN NAME: Lee Yong Bok (이 용복)</li>
                                <li>POSITION: Dancer, Rapper, Vocalist</li>
                                <li>BIRTHDAY: September 15, 2000</li>
                                <li>ZODIAC SIGN: Virgo</li>
                                <li>HEIGHT: 171 cm</li>
                                <li>BLOOD TYPE: AB</li>
                                <li>MBTI TYPE: ESFJ</li>
                                <li>UNIT: DANCERACHA</li>
                                <li>NATIONALITY: Korean Australian</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="17">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="SEUNGMIN" width="455" height="580" src="https://pbs.twimg.com/media/FmgwDaLaAAY3qjh?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">SEUNGMIN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Seungmin (승민)</li>
                                <li>BIRTH NAME: Kim Seung Min (김 승민)</li>
                                <li>POSITION: Vocalist</li>
                                <li>BIRTHDAY: September 22, 2000</li>
                                <li>ZODIAC SIGN: Virgo</li>
                                <li>HEIGHT: 178 cm</li>
                                <li>WEIGHT: 56 kg</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ESFJ</li>
                                <li>UNIT: VOCALRACHA</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="18">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="I.N" width="455" height="580" src="https://pbs.twimg.com/media/FmgwEN7aAAAlf-w?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">I.N</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: I.N (아이엔)</li>
                                <li>BIRTH NAME: Yang Jeong In (양 정인)</li>
                                <li>POSITION: Vocalist, Maknae</li>
                                <li>BIRTHDAY: February 8, 2001</li>
                                <li>ZODIAC SIGN: Aquarius</li>
                                <li>HEIGHT: 172 cm</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ISFJ</li>
                                <li>UNIT: VOCALRACHA</li>
                                <li>NATIONALITY: Korean </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="voting" id="member_vote1">
                <h2>Choose your favorite member from STRAY KIDS</h2>
                <form id="vote-form1">
                    <input type="radio" name="vote1" value="0" id="name1">
                    <label for="name1">BANGCHAN</label><br>
                    <input type="radio" name="vote1" value="1"  id="name2">
                    <label for="name2">LEEKNOW</label><br>
                    <input type="radio" name="vote1" value="2"  id="name3">
                    <label for="name3">CHANGBIN</label><br>
                    <input type="radio" name="vote1" value="3"  id="name4">
                    <label for="name4">HYUNJIN</label><br>
                    <input type="radio" name="vote1" value="4"  id="name5">
                    <label for="name5">HAN</label><br>
                    <input type="radio" name="vote1" value="5"  id="name6">
                    <label for="name6">FELIX</label><br>
                    <input type="radio" name="vote1" value="6"  id="name7">
                    <label for="name7">SEUNGMIN</label><br>
                    <input type="radio" name="vote1" value="7"  id="name8">
                    <label for="name8">I.N</label><br>
                    <input type="button" value="Submit" onclick="submitVote1()" />
                </form>
            </div>
            <div class="voting" id="vote_res1" style="display:none;">
            </div>
        </div>

        <div id="ateez" class="tabcontent">
            <div class="members_menu">
                <ul class="members_list">
                    <li>
                        <button class="member_link" onclick="openMember(event, '21')">HONGJOONG</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '22')">SEONGHWA</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '23')">YUNHO</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '24')">YEOSANG</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '25')">SAN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '26')">MINGI</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '27')">WOOYOUNG</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '28')">JONGHO</button>
                    </li>
                </ul>
            </div>
            <div class="cont_profile">
                <div class="pf_inner" id="21">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="HONGJOONG" width="455" height="580" src="https://pbs.twimg.com/media/FkBvvgaaMAMxnuc?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">HONGJOONG</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Hongjoong (홍중)</li>
                                <li>BIRTH NAME: Kim Hong Joong (김 홍중)</li>
                                <li>POSITION: Captain, Main Rapper, Vocalist, Composer, Center</li>
                                <li>BIRTHDAY: November 7th, 1998</li>
                                <li>ZODIAC SIGN: Scorpio</li>
                                <li>HEIGHT: 172 cm</li>
                                <li>WEIGHT: – </li>
                                <li>BLOOD TYPE: B</li>
                                <li>MBTI TYPE: INFP</li>
                                <li>NATIONALITY: Korean </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="22">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="SEONGHWA" width="455" height="580" src="https://pbs.twimg.com/media/FkBwcFmWIAAMnBt?format=jpg&name=large"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">SEONGHWA</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Seonghwa (성화)</li>
                                <li>BIRTH NAME: Park Seong Hwa (박 성화)</li>
                                <li>POSITION: Lead Dancer, Vocalist, Sub-Rapper, Visual</li>
                                <li>BIRTHDAY: April 3rd, 1998</li>
                                <li>ZODIAC SIGN: Aries</li>
                                <li>HEIGHT: 178 cm</li>
                                <li>WEIGHT: 61 kg</li>
                                <li>BLOOD TYPE: O</li>
                                <li>MBTI Type: ENFJ</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="23">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="YUNHO" width="455" height="580" src="https://pbs.twimg.com/media/FkBwceLXwAE20AD?format=jpg&name=large"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">YUNHO</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Yunho (윤호)</li>
                                <li>BIRTH NAME: Jeong Yun Ho (정 윤호)</li>
                                <li>POSITION: Main Dancer, Vocalist</li>
                                <li>BIRTHDAY: March 23rd, 1999</li>
                                <li>ZODIAC SIGN: Aries</li>
                                <li>HEIGHT: 185 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ENFJ</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="24">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="YEOSANG" width="455" height="580" src="https://pbs.twimg.com/media/FkBwc0HX0AE0Sw7?format=jpg&name=large"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">YEOSANG</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Yeosang (여상)</li>
                                <li>BIRTH NAME: Kang Yeo Sang (강 여상)</li>
                                <li>POSITION: Lead Dancer, Vocalist, Visual</li>
                                <li>BIRTHDAY: June 15th, 1999</li>
                                <li>ZODIAC SIGN: Gemini</li>
                                <li>HEIGHT: 175 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ISFP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="25">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="SAN" width="455" height="580" src="https://pbs.twimg.com/media/FkG216UaYAs0SaS?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">SAN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: San (산)</li>
                                <li>BIRTH NAME: Choi San (최 산)</li>
                                <li>POSITION: Lead Vocalist, Main Dancer</li>
                                <li>BIRTHDAY: July 10th, 1999</li>
                                <li>ZODIAC SIGN: Cancer</li>
                                <li>HEIGHT: 176 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: B</li>
                                <li>MBTI TYPE: INFP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="26">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="MINGI" width="455" height="580" src="https://pbs.twimg.com/media/FkG-m4bVQAAaPR1?format=jpg&name=4096x4096"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">MINGI</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Mingi (민기)</li>
                                <li>BIRTH NAME: Song Min Gi (송 민기)</li>
                                <li>POSITION: Main Dancer, Main Rapper</li>
                                <li>BIRTHDAY: August 9th, 1999</li>
                                <li>ZODIAC SIGN: Leo</li>
                                <li>HEIGHT: 184 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: B</li>
                                <li>MBTI TYPE: ENTP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="27">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="WOOYOUNG" width="455" height="580" src="https://pbs.twimg.com/media/FkG6BoVUYAIRw0k?format=jpg&name=large"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">WOOYOUNG</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Wooyoung (우영)</li>
                                <li>BIRTH NAME: Jung Woo Young (정 우영)</li>
                                <li>POSITION: Main Dancer, Vocalist, Visual</li>
                                <li>BIRTHDAY: November 26th, 1999</li>
                                <li>ZODIAC SIGN: Sagittarius</li>
                                <li>HEIGHT: 173 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ISFJ</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="28">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="JONGHO" width="455" height="580" src="https://pbs.twimg.com/media/FkG6CmiUAAEqTMy?format=jpg&name=large"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">JONGHO</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Jongho (종호)</li>
                                <li>BIRTH NAME: Choi Jong Ho (최 종호)</li>
                                <li>POSITION: Main Vocalist, Maknae</li>
                                <li>BIRTHDAY: October 12th, 2000</li>
                                <li>ZODIAC SIGN: Libra</li>
                                <li>HEIGHT: 176 cm</li>
                                <li>WEIGHT: –</li>
                                <li>BLOOD TYPE: O</li>
                                <li>MBTI TYPE: ISFP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="voting" id="member_vote2">
                <h2>Choose your favorite member from ATEEZ</h2>
                <form id="vote-form2">
                    <input type="radio" name="vote2" value="0" id="name21">
                    <label for="name21">HONGJOONG</label><br>
                    <input type="radio" name="vote2" value="1" id="name22">
                    <label for="name22">SEONGHWA</label><br>
                    <input type="radio" name="vote2" value="2" id="name23">
                    <label for="name23">YUNHO</label><br>
                    <input type="radio" name="vote2" value="3" id="name24">
                    <label for="name24">YEOSANG</label><br>
                    <input type="radio" name="vote2" value="4" id="name25">
                    <label for="name25">SAN</label><br>
                    <input type="radio" name="vote2" value="5" id="name26">
                    <label for="name26">MINGI</label><br>
                    <input type="radio" name="vote2" value="6" id="name27">
                    <label for="name27">WOOYOUNG</label><br>
                    <input type="radio" name="vote2" value="7" id="name28">
                    <label for="name28">JONGHO</label><br>
                    <input type="button" value="Submit"  onclick="submitVote2()"/>
                </form>
            </div>
            <div class="voting" id="vote_res2" style="display:none;">
            </div>
        </div>

        <div id="txt" class="tabcontent">
            <div class="members_menu">
                <ul class="members_list">
                    <li>
                        <button class="member_link" onclick="openMember(event, '31')">YEONJUN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '32')">SOOBIN</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '33')">BEOMGYU</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '34')">TAEHYUNG</button>
                    </li>
                    <li>
                        <button class="member_link" onclick="openMember(event, '35')">HUENING KAI</button>
                    </li>
                </ul>
            </div>
                <div class="cont profile">
                <div class="pf_inner" id="31">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="YEONJUN" width="455" height="580" src="https://ibighit.com/txt/images/txt/discography/temptation/concept-photo/photos/1-daydream/2-yj/8-39e36bbd8c035d9513642128ecd82f90.jpg"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">YEONJUN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Yeonjun (연준)</li>
                                <li>BIRTH NAME: Choi Yeon Jun (최 연준)</li>
                                <li>ENGLISH NAME: Daniel Choi</li>
                                <li>POSITION: Vocalist, Rapper</li>
                                <li>BIRTHDAY: September 13th, 1999</li>
                                <li>ZODIAC SIGN: Virgo</li>
                                <li>HEIGHT: 181.5 cm</li>
                                <li>WEIGHT: 62 kg</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ENFP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="32" style="display:none;">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="SOOBIN" width="455" height="580" src="https://ibighit.com/txt/images/txt/discography/temptation/concept-photo/photos/1-daydream/1-sb/4-a6ede5a741087b2e6fc22541fd1b5316.jpg"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">SOOBIN</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Soobin (수빈)</li>
                                <li>BIRTH NAME: Choi Soo Bin (최 수빈)</li>
                                <li>ENGLISH NAME: Steve Choi</li>
                                <li>POSITION: Leader, Vocalist, Rapper</li>
                                <li>BIRTHDAY: December 5th, 2000</li>
                                <li>ZODIAC SIGN: Sagittarius</li>
                                <li>HEIGHT: 185 cm</li>
                                <li>WEIGHT: 67 kg</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ISFP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="33" style="display:none;">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="BEOMGYU" width="455" height="580" src="https://ibighit.com/txt/images/txt/discography/temptation/concept-photo/photos/1-daydream/3-bg/4-19142eb271856ccaf993d30ae4de3d28.jpg"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">BEOMGYU</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Beomgyu (범규)</li>
                                <li>BIRTH NAME: Choi Beom Gyu (최 범규)</li>
                                <li>ENGLISH NAME: Ben Choi</li>
                                <li>POSITION: Visual, Vocalist, Rapper</li>
                                <li>BIRTHDAY: March 13th, 2001</li>
                                <li>ZODIAC SIGN: Pisces</li>
                                <li>HEIGHT: 180 cm</li>
                                <li>WEIGHT: 56 kg</li>
                                <li>BLOOD TYPE: AB</li>
                                <li>MBTI TYPE: INFJ</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="pf_inner" id="34" style="display:none;">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="TAEHYUNG" width="455" height="580" src="https://ibighit.com/txt/images/txt/discography/temptation/concept-photo/photos/1-daydream/4-th/3-141fbaf840646aa7b897e0a0ce45cd39.jpg"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">TAEHYUNG</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Taehyun (태현)</li>
                                <li>BIRTH NAME: Kang Tae Hyun (강 태현)</li>
                                <li>ENGLISH NAME: Terry Kang</li>
                                <li>POSITION: Vocalist, Rapper</li>
                                <li>BIRTHDAY: February 5th, 2002</li>
                                <li>ZODIAC SIGN: Aquarius</li>
                                <li>HEIGHT: 177 cm</li>
                                <li>WEIGHT: 57 kg</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ESTP</li>
                                <li>NATIONALITY: Korean</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="pf_inner" id="35" style="display:none;">
                    <div class="profile_img">
                        <div class="color_bg artist_crbg"></div>
                        <div class="artist_img"><img alt="HUENING KAI" width="455" height="580" src="https://ibighit.com/txt/images/txt/discography/temptation/concept-photo/photos/1-daydream/5-hnk/7-6cd4204413bbfd59ae1c031fd9ca70bf.jpg"></div>
                    </div>
                    <div class="profile_txt">
                        <div class="name_tt">HUENING KAI</div>
                        <div class="mm_info">
                            <ul>
                                <li>STAGE NAME: Huening Kai (휴닝카이)</li>
                                <li>BIRTH NAME: Kai Kamal Huening</li>
                                <li>KOREAN NAME: Jung Kai (정 카이)</li>
                                <li>POSITIN: Maknae, Vocalist, Rapper</li>
                                <li>BIRTHDAY: August 14th, 2002</li>
                                <li>ZODIAC SIGN: Leo</li>
                                <li>HEIGHT: 183 cm</li>
                                <li>WEIGHT: 67 kg</li>
                                <li>BLOOD TYPE: A</li>
                                <li>MBTI TYPE: ISTP</li>
                                <li>NATIONALITY: Korean American</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="voting" id="member_vote3">
                <h2>Choose your favorite member from TXT</h2>
                <form id="vote-form3">
                    <input type="radio" name="vote3" value="0" id="name31">
                    <label for="name31">YEONJUN</label><br>
                    <input type="radio" name="vote3" value="1" id="name32">
                    <label for="name32">SOOBIN</label><br>
                    <input type="radio" name="vote3" value="2" id="name33">
                    <label for="name33">BEOMGYU</label><br>
                    <input type="radio" name="vote3" value="3" id="name34">
                    <label for="name34">TAEHYUNG</label><br>
                    <input type="radio" name="vote3" value="4" id="name35">
                    <label for="name35">HUENING KAI</label><br>
                    <input type="button" value="Submit" onclick="submitVote3()"/>
                </form>
            </div>
            <div class="voting" id="vote_res3" style="display:none;"></div>
        </div>
    </div>
</div>
<script src="show_group.js"></script>
<script src="vote.js"></script>
<script src="members.js"></script>
<?php
require_once "footer.php";
?>

