@extends('layouts.app')

@section('content')
<div id="bodyArea">
<header id="demoHeader" class="top">
	  <p class="logo"><a href="http://www.webcyou.com/" class="homeLnk"><img src="http://www.webcyou.com/wp-content/themes/webchou/favicon.ico" alt=""></a></p>
	  <h1>ドラゴンクエスト風戦闘シーン</h1>
	  <div class="configView">
		    <p class="sttngIco"></p>
		    <ul class="configLi">
				    <li class="top cur">TOPへ</li>
				    <li class="name">なまえをへんこう</li>
				    <li class="close">とじる</li>
		    </ul>
	  </div>
</header>
<div id="container" class="top">
    <div class="topView">
	     <div class="topHead">
			      <h3><img src="img/tit_main.gif" alt="" width="250"></h3>
			      <p class="tit"><img src="img/tit_battle_simulator.gif" alt="" width="395"></p>
			      <p class="topLogo"><img src="img/tit_css3.gif" alt="" width="80"></p>
		    </div>
		    <p class="topImg"><img src="img/pic_main.jpg" alt="" width="876"></p>
			  <p class="startBtn"><a href="#">バトルスタート</a></p>
			  <p class="noteTxt"><img src="img/txt_note_001.gif" alt="" width="481"></p>
    </div>
    
    <div class="nameSettingView">
	      <p class="yourName"></p>
	      <div class="inputView">
		        <p class="txt">なまえをいれてください</p>
		        <ul class="inputStrLi">
			          <li>あ</li>
			          <li>い</li>
			          <li>う</li>
			          <li>え</li>
			          <li>お</li>
			          <li>か</li>
			          <li>き</li>
			          <li>く</li>
			          <li>け</li>
			          <li>こ</li>
			          <li>さ</li>
			          <li>し</li>
			          <li>す</li>
			          <li>せ</li>
			          <li>そ</li>
			          <li>た</li>
			          <li>ち</li>
			          <li>つ</li>
			          <li>て</li>
			          <li>と</li>
			          <li>な</li>
			          <li>に</li>
			          <li>ぬ</li>
			          <li>ね</li>
			          <li>の</li>
		        </ul>
		        <ul class="inputStrLi">
			          <li>は</li>
			          <li>ひ</li>
			          <li>ふ</li>
			          <li>へ</li>
			          <li>ほ</li>
			          <li>ま</li>
			          <li>み</li>
			          <li>ぬ</li>
			          <li>め</li>
			          <li>も</li>
			          <li>ら</li>
			          <li>り</li>
			          <li>る</li>
			          <li>れ</li>
			          <li>ろ</li>
			          <li>や</li>
			          <li>ゆ</li>
			          <li>よ</li>
			          <li>わ</li>
			          <li>ん</li>
			          <li>ゃ</li>
			          <li>ゅ</li>
			          <li>ょ</li>
			          <li>っ</li>
			          <li>を</li>
		        </ul>
		        <ul class="inputStrLi">
		            <li>゛</li>
		            <li>゜</li>
		            <li>ー</li>
		            <li class="back">もどる</li>
		            <li class="end">おわり</li>
		        </ul>
	      </div>
    </div>
    
    <div class="settingView">
        <div class="wrap">
			      <div class="monsterView">
			          <div class="select">
				            <select name="" id="">
					              <option value="">スライム</option>
					              <option value="">キメラ</option>
					              <option value="">キメラ</option>
				            </select>
				        </div>
				        <p class="img"><img src="img/monster/18.gif" alt=""></p>
				        <ul class="statusLi">
					          <li class="hp"><span class="val">20</span></li>
					          <li class="atk"><span class="val">20</span></li>
					          <li class="def"><span class="val">20</span></li>
				        </ul>
			      </div>
			      <p class="vsImg"><img src="img/pic_vs.png" alt="" width="125"></p>
			      <p class="bttlStartBtn"><a href="#"><img src="img/btn_battle_start.png" alt="" width="147"></a></p>
			      <div class="playerView">
				        <div class="select">
				            <p class="name">ほげげ</p>
				            <label for="playerLv">LV:</label>
			              <select name="lv" id="playerLv">
					              <option value="">1</option>
					              <option value="">2</option>
					              <option value="">3</option>
				            </select>
				        </div>
				        <p class="img"><img src="img/pic_player.png" alt="" width="144"></p>
				        <ul class="statusLi">
					          <li class="hp"><span class="val">20</span></li>
					          <li class="atk"><span class="val">20</span></li>
					          <li class="def"><span class="val">20</span></li>
				        </ul>
				        <div class="weaponView">
					          <ul class="weaponLi">
						            <li><p class="tit">ぶき&nbsp;&nbsp;&nbsp;:</p>
						              <select name="" id="">
						                  <option value="">どうのつるぎ</option>
						              </select>
						            </li>
						            <li><p class="tit">よろい:</p>
						              <select name="" id="">
						                  <option value="">どうのつるぎ</option>
						              </select>
						            </li>
						            <li><p class="tit">たて&nbsp;&nbsp;&nbsp;:</p>
						              <select name="" id="">
						                  <option value="">どうのつるぎ</option>
						              </select>
						            </li>
						            <li><p class="tit">どうぐ:</p>
						              <select name="" id="">
						                  <option value="">やくそう</option>
						                  <option value="">やくそう 2個</option>
						              </select>
						            </li>
					          </ul>
				        </div>
		        </div>
	      </div><!-- /.settingView -->
    </div>
</div>
@endsection
