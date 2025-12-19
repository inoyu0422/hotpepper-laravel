

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>ホットペッパーAPI検索</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $("#large_area").on("change", function(){
                    $(document).find("#middle_area option").remove();
                    if ($(this).val()) {
                        $.ajax({
                            url:'./middle_area_ajax.php',
                            type:'POST',
                            data:{
                                'token': '1',
                                'large_area': $(this).val()
                            }
                        })
                        .done(function(html, status, xhr){
                            $("#middle_area").append(html);
                        })
                        .fail(function(data, status, xhr){
                            console.log(data);
                        });
                    }
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <h1>ホットペッパーAPI検索</h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading linkPanelHeader">検索条件</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="./" method="post">
                                @csrf
						        <div class="form-group">
							        <label class="col-sm-3 control-label" for="large_area">大エリア</label>
							        <div class="col-sm-9">
								        <select name="large_area" id="large_area">
                                            <option value=""></option>
                                            <option value="Z011">東京</option>
                                            <option value="Z012">神奈川</option>
                                            <option value="Z013">埼玉</option>
                                            <option value="Z014">千葉</option>
                                            <option value="Z015">茨城</option>
                                            <option value="Z016">栃木</option>
                                            <option value="Z017">群馬</option>
                                            <option value="Z021">滋賀</option>
                                            <option value="Z022">京都</option>
                                            <option value="Z023">大阪</option>
                                            <option value="Z024">兵庫</option>
                                            <option value="Z025">奈良</option>
                                            <option value="Z026">和歌山</option>
                                            <option value="Z031">岐阜</option>
                                            <option value="Z032">静岡</option>
                                            <option value="Z033">愛知</option>
                                            <option value="Z034">三重</option>
                                            <option value="Z041">北海道</option>
                                            <option value="Z051">青森</option>
                                            <option value="Z052">岩手</option>
                                            <option value="Z053">宮城</option>
                                            <option value="Z054">秋田</option>
                                            <option value="Z055">山形</option>
                                            <option value="Z056">福島</option>
                                            <option value="Z061">新潟</option>
                                            <option value="Z062">富山</option>
                                            <option value="Z063">石川</option>
                                            <option value="Z064">福井</option>
                                            <option value="Z065">山梨</option>
                                            <option value="Z066">長野</option>
                                            <option value="Z071">鳥取</option>
                                            <option value="Z072">島根</option>
                                            <option value="Z073">岡山</option>
                                            <option value="Z074">広島</option>
                                            <option value="Z075">山口</option>
                                            <option value="Z081">徳島</option>
                                            <option value="Z082">香川</option>
                                            <option value="Z083">愛媛</option>
                                            <option value="Z084">高知</option>
                                            <option value="Z091">福岡</option>
                                            <option value="Z092">佐賀</option>
                                            <option value="Z093">長崎</option>
                                            <option value="Z094">熊本</option>
                                            <option value="Z095">大分</option>
                                            <option value="Z096">宮崎</option>
                                            <option value="Z097">鹿児島</option>
                                            <option value="Z098">沖縄</option>
                                        </select>
                                    </div>
						        </div>
						        <div class="form-group">
							        <label class="col-sm-3 control-label" for="middle_area">中エリア</label>
							        <div class="col-sm-9">
								        <select name="middle_area" id="middle_area">
                                            <option value=""></option>
                                            <option value="Y005">銀座・有楽町・新橋・築地・月島</option>
                                            <option value="Y006">水道橋・飯田橋・神楽坂</option>
                                            <option value="Y007">お台場</option>
                                            <option value="Y010">東京・大手町・日本橋・人形町</option>
                                            <option value="Y013">四ツ谷・麹町・市ヶ谷・九段下</option>
                                            <option value="Y015">上野・御徒町・浅草</option>
                                            <option value="Y016">北千住・日暮里・葛飾・荒川</option>
                                            <option value="Y017">錦糸町・浅草橋・両国・亀戸</option>
                                            <option value="Y018">門前仲町・東陽町・木場・葛西</option>
                                            <option value="Y020">神田・神保町・秋葉原・御茶ノ水</option>
                                            <option value="Y025">品川･目黒･田町･浜松町･五反田</option>
                                            <option value="Y026">蒲田・大森・大田区</option>
                                            <option value="Y030">渋谷</option>
                                            <option value="Y035">原宿・青山・表参道</option>
                                            <option value="Y040">恵比寿・中目黒・代官山・広尾</option>
                                            <option value="Y045">赤坂・六本木・麻布十番・西麻布</option>
                                            <option value="Y046">自由が丘・田園調布</option>
                                            <option value="Y050">池袋</option>
                                            <option value="Y051">赤羽・王子・十条</option>
                                            <option value="Y055">新宿</option>
                                            <option value="Y056">新大久保・大久保</option>
                                            <option value="Y057">巣鴨・大塚・駒込</option>
                                            <option value="Y060">中野・高円寺・阿佐ヶ谷・方南町</option>
                                            <option value="Y070">下北沢・代々木上原</option>
                                            <option value="Y072">高田馬場</option>
                                            <option value="Y073">池尻大橋・三軒茶屋・駒沢大学</option>
                                            <option value="Y074">桜新町・用賀・二子玉川</option>
                                            <option value="Y075">祐天寺・学芸大学・都立大学</option>
                                            <option value="Y076">幡ヶ谷・笹塚・明大前・下高井戸</option>
                                            <option value="Y077">調布・府中・千歳烏山・仙川</option>
                                            <option value="Y078">経堂・千歳船橋</option>
                                            <option value="Y079">祖師ヶ谷大蔵・成城学園前</option>
                                            <option value="Y080">大井町･中延･旗の台･戸越･馬込</option>
                                            <option value="Y081">不動前・武蔵小山</option>
                                            <option value="Y082">雪が谷大塚・池上</option>
                                            <option value="Y083">武蔵小金井</option>
                                            <option value="Y088">国立・国分寺</option>
                                            <option value="Y089">青梅・昭島・小作・青梅線沿線</option>
                                            <option value="Y090">多摩センター・南大沢</option>
                                            <option value="Y100">吉祥寺・荻窪・三鷹</option>
                                            <option value="Y105">町田</option>
                                            <option value="Y110">八王子・立川</option>
                                            <option value="Y111">西武池袋線（石神井公園～秋津）</option>
                                            <option value="Y112">西武新宿線(中井～田無～東村山)</option>
                                            <option value="Y113">練馬・板橋・成増・江古田</option>
                                            <option value="Y114">都営三田線（新板橋～西高島平）</option>
                                            <option value="Y119">聖蹟桜ヶ丘・高幡不動・分倍河原</option>
                                            <option value="Y852">東京都その他</option>
                                        </select>
                                    </div>
						        </div>
						        <div class="form-group">
							        <label class="col-sm-3 control-label" for="genre">ジャンル</label>
							        <div class="col-sm-9">
								        <select name="genre" id="genre">
                                            <option value=""></option>
                                            <option value="G001">居酒屋</option>
                                            <option value="G002">ダイニングバー・バル</option>
                                            <option value="G003">創作料理</option>
                                            <option value="G004">和食</option>
                                            <option value="G005">洋食</option>
                                            <option value="G006">イタリアン・フレンチ</option>
                                            <option value="G007">中華</option>
                                            <option value="G008">焼肉・ホルモン</option>
                                            <option value="G017">韓国料理</option>
                                            <option value="G009">アジア・エスニック料理</option>
                                            <option value="G010">各国料理</option>
                                            <option value="G011">カラオケ・パーティ</option>
                                            <option value="G012">バー・カクテル</option>
                                            <option value="G013">ラーメン</option>
                                            <option value="G016">お好み焼き・もんじゃ</option>
                                            <option value="G014">カフェ・スイーツ</option>
                                            <option value="G015">その他グルメ</option>
                                        </select>
                                    </div>
						        </div>
						        <div class="form-group">
							        <label class="col-sm-3 control-label" for="budget">予算</label>
							        <div class="col-sm-9">
								        <select name="budget" id="budget">
                                            <option value=""></option>
                                            <option value="B009">～500円</option>
                                            <option value="B010">501～1000円</option>
                                            <option value="B011">1001～1500円</option>
                                            <option value="B001">1501～2000円</option>
                                            <option value="B002">2001～3000円</option>
                                            <option value="B003">3001～4000円</option>
                                            <option value="B008">4001～5000円</option>
                                            <option value="B004">5001～7000円</option>
                                            <option value="B005">7001～10000円</option>
                                            <option value="B006">10001～15000円</option>
                                            <option value="B012">15001～20000円</option>
                                            <option value="B013">20001～30000円</option>
                                            <option value="B014">30001円～</option>
                                        </select>
                                    </div>
						        </div>
						        <div class="form-group">
							        <label class="col-sm-3 control-label" for="order">並び順</label>
							        <div class="col-sm-9">
								        <select name="order" id="order">
                                            <option value="1">店名かな順</option>
                                            <option value="2">ジャンル順</option>
                                            <option value="3">エリア順</option>
                                            <option value="4" selected="">おススメ順</option>
                                        </select>
                                    </div>
						        </div>
					            <div class="form-group">
							        <div class="col-sm-offset-3 col-sm-9">
								        <button type="submit" class="btn btn-default" name="search">検索</button>
							        </div>
						        </div>
						        Powered by <a href="http://webservice.recruit.co.jp/">ホットペッパー Webサービス</a>
					        </form>
				        </div>
                    </div>
                </div>

                <div class="col-sm-9">
			        <div class="panel panel-default">
				        <div class="panel-heading linkPanelHeader">検索結果一覧</div>
				        <div class="panel-body">
                            <!-- <table border="1">
                                <tr>
                                    <th>店舗名</th>
                                    <th>営業時間</th>
                                </tr>
                                @for ($i = 0; $i < $restaurants['results_returned']; $i++)
                                    <tr>
                                        <td><a href="{{{ $restaurants['shop'][$i]['urls']['pc'] }}}">{{{ $restaurants['shop'][$i]['name'] }}}</a></td>
                                        <td>{{{ $restaurants['shop'][$i]['open'] }}}</td>
                                    </tr>
                                @endfor
                            </table> -->
                            <table border="1">
                                <tr>
                                    <th>店舗名</th>
                                    <th>営業時間</th>
                                </tr>

                                @if (is_array($restaurants) && ($restaurants['results_returned'] ?? 0) > 0)
                                    @for ($i = 0; $i < $restaurants['results_returned']; $i++)
                                        <tr>
                                            <td>
                                                <a href="{{ $restaurants['shop'][$i]['urls']['pc'] }}">
                                                    {{ $restaurants['shop'][$i]['name'] }}
                                                </a>
                                            </td>
                                            <td>{{ $restaurants['shop'][$i]['open'] }}</td>
                                        </tr>
                                    @endfor
                                @else
                                    <tr>
                                        <td colspan="2">検索条件を選んで検索してください</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
			        </div>
		        </div>                
            </div>
            
        </div>
    </body>
</html>
