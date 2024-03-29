/**
 * @description typecho后台编辑器插入的js
 * @author ihewro Sun个性(http://blog.acef.tk)
 * @version 5.1.1
 */

window.onload = function () {
    /* 样式栏 */
    $(document).ready(function(){
        if ($("#wmd-button-row").length >0){
            $('#wmd-button-row').append(
               '<li class="wmd-spacer wmd-spacer4" id="wmd-spacer4"></li>'+
                '<li class="wmd-button" id="wmd-post-button" style="" title="调用其他文章"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAixJREFUSMfFlcFLG0EUxr+3iCKCGAo20CiWgkcv4i1EIsX6B6ybFPewp4Kn0EvwluRstAcpXhQUVOhsY+glxdIIplCam7IByckEpaQoHgQNZNN9PaQxoWm62zTQ7zAM3wzz/eY9mAH+s+hXI5FKpBIpj6fqrXqr3oUFKSgFEXa5Og2wVqwVhAoFMsggY3tbURRFUcrlFoAkJznJQ0OmbuqVV6enAIBHbnfXbhqmMB4cHMwX5guBp3NzdV+qT0xhClNMTXU7uC6e5Em8np0VQggh+vvrfs894RiNWZm+Pi5ykXxN5Iu0iImTEwxgAN8uL1sOjnMcn8fHAQBPRkfbEgQQQJAIDAb39tbMcrkHNuJ1Xidjf59AsL7/bE1zaWMUo8eyzBGOAH8AaCNbAABgjsUYDJJ+sxhBpKOe/A0A8mdnAICv19dODyaNNESHh3mLt3A0MtIxAPvYhxdra4giiqhhOAXgW77FQ6+XdNKBSNsq2QJQhjI4Wl3FDGbgdxoPQIcOYb/NHkAlFc+urtjPfkzc3DjNp0M6RM7l4l3exfv2D5l9C3Z4hz4sLQEA4sfHTgGsPWuPTb+f0pQGlpdtAbjIRWmaGQBqYxMEb2w4Db6vQJrS+NjqV0qVUqXUSGhUgMHgfJ4CFIBsWSxY4K0kOUpzAqSRhunzc/VOvVPdjVa2fEa1p1LTAIA/hULYxCbeDQ52HJyjHN5cXJCHPNaXcFjOytnnL7PZbl3sn/UD10Xalv87/NwAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDEtMDFUMjI6MjE6NTcrMDg6MDDT97faAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTAxLTAxVDIyOjIxOjU3KzA4OjAwoqoPZgAAAEx0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25fNnk3cmlmbWRvcGovd2VuemhhbmcyLnN2Z1cC2g4AAAAASUVORK5CYII="/></li>'+
               /**  '<li class="wmd-button" id="wmd-button-button" style="" title="插入按钮"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAyFJREFUSMfVVU1oU1kU/s57rQnY1DBgtTsR+wLqQhDymIjVggWTgIESEiz4s5CmTKUkCDIzi1mUYVZK88RFq4VCbZvemydSpWkXFhrBQNyJLjTp6IC72aSgixjbd2ZRbrSRklEE8W7O491zv3vud77vXuBHHeNj42PjY62tKn4tDjVLmLamrWmrvd312PW4dSWVwhKWMNrfzxM8gaJhbEl++vIlANCR2VlX2pV2pUdHI4VIIVJ4+/aLC5gbmhuaGzIMfUqfol9zOejQUavVMIxhHLAsPsyHSRSLdaDn9JzjpskFLuCnZBIDGMBQS4t2Rjuj/x4KRd1Rd9RdLjelRJ0468l6xJvVVemTPunLZHKlXClXcrmarVd52UPZQyIjhJRSij/K5fnAfGA+4PE05muNP+pUqxOPYAQjFy6EjJARMt6/F6YwhXnsmJRSit1TUyraXtub+fv4cZW3897Oe56j588DANY3Nqr5ar6aTyabFqB6rKiOxWPxWLxWs/fb+zNLgQBdoSsYzucBADfPnVOR13hN27eyIoIiKILd3aqQTU1YFgUpiL39/dsWIIUUUuzYwb3ci1RXV2OPHTjQf0kkAAAtut4IxJIlbE2jMpWpPDBQXxd2wk64WKSH9BD/Gkaja+oFVCqVSqXCTHfpLmxmbVlb3viT6iIlL3n5KnMzDVAbtfFvH/O0BW1BW/iIYySMhJH4ZF59JAYTg4nBDx/Qjna8WV3lPbxHe+b314HXaM3Zd+uW6ulnG8cohqjjOJ1OJ+zbt7fO+v18ik+ho1TqoR7qofX1bTXAEzxBT2ZmlJ2UqqOvoq/Oni4U+Dpfx40TJwAAl+/cUZG85HX+OXkyvhhfjC8+ejTJkzzJbjddokvsTyapgzrgn5lpxiCUXZR9lJ3+rw3VxlJKKQ5ms7JX9orOUmlTY21tnzG3HZBdtat2tavLue/c3/grl/uUejpiWUpcW3ttmurEbLKJn4m0B9oD/XU4vN1F1PQqVpVzH/dxXypVt9Mu7EK3z1cHWqZlXHvxAiGEcHl2liMcoYvp9KaN371rSv2Xjm/1GH338R+qMJyHQpNoiQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOS0wMS0wMVQyMjoyMTo1NyswODowMNP3t9oAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTktMDEtMDFUMjI6MjE6NTcrMDg6MDCiqg9mAAAASHRFWHRzdmc6YmFzZS11cmkAZmlsZTovLy9ob21lL2FkbWluL2ljb24tZm9udC90bXAvaWNvbl82eTdyaWZtZG9wai9hbm5pdS5zdmcI/9trAAAAAElFTkSuQmCC"/></li>'+**/
                '<li class="wmd-button" id="wmd-text-button" style="" title="插入高亮文本"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAtJJREFUSMftlD1Im1EUht/zJSkUHBwEBwXxBzrUEFHM0M3GUg2BKqnfZ6BUcLD+xUkXFRUiLaXqYKIRB5Eo6PeFkMGf+oNdBKGLQqtFcVCLij8FFTIZc0+HNoKmxdiWduk7nnve+z7ce+4F/usfiwLTgenAdGqqKBElFw9WVniURzGblPTD7o2tLVqmZbzp6uJczuXh5GQMYpCqZBlVqCJvY6Msy7IsT03FCyBFQpFQJJSZeRnci15yv39PbnJjo6/vSve99HTe5E0Uejy0Sqv0dH+fu7kb73p6SCGFS4NBTdM0TVOUuAFiKg1oQENHR9li2aLSVl8PANjZ27tcV6CgnIjXeA0lXq8UkALIkSS44OLz2tpvICMjfp/fNz5bXn57AAC86nZrJs2kmSYmAABpKSkxTddAhF3Y6bNezyqrFKypQQUq6KHPdxOIJI7FsTg+OrpSvZ+VhRa0cLPNduMZfgehVmpFc38/G9nIRoPhOog6qU6qkw7HdTsxMzMT+c1+s988P48mNHGjxRLvHcZIhYpxZu7kTrysrUUIIYTOzyWzZEbOwICYEBOYrahQbIpNsY2NUdQX5CAHOTHxIvki+fzD3Bx72IP1/PzfBYEMmcpNJvKQhzdevGAnO5FZXQ0Gkz4jg677/ijI3sFB5G3krfiYl6ef089JVWNjnM3ZUFJTDTOGmTs7eXkxQ1hKpVRKp6fsZjetP3oUfZZxh/rgw+ujI2lBWhDDVquuWFcsffJ62chGPEtLi8xEZsSOxRLNkX62j6zIiqycncEJJ5yPH98EQs/pOQoPD6UUKUVcFBUJi7BIdzs6MIQhfDGZUIlKelVQ4CAHOWh7O+r7KUC8INFg9rGPFoqKxJJY0nF7OwDgSU5ONPjbD7m1FQN+22uNzkjYH/aH/XV1YDBYVQ1thjZD28lJ2BV2hV11dboEXYIuYWjIbrVb7dbd3V+aob+hr36lc2X51FNiAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTAxLTAxVDIyOjIxOjU3KzA4OjAw0/e32gAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wMS0wMVQyMjoyMTo1NyswODowMKKqD2YAAABLdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uXzZ5N3JpZm1kb3BqL2JpYW9xaWFuLnN2ZynJOh0AAAAASUVORK5CYII="/></li>'+
               /**    '<li class="wmd-button" id="wmd-ss-button" style="" title="插入收缩框"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAcdJREFUSMftlLFLI2EQxd/EwwQ3rKyQg4sIxkIEba5JKySptxCTDUkqA4cIwcI/QAJWVywJpAs2YY/c9y0INhohjcVymC5E2OJIWAPWciBZNyt+Vxzn2SZNivNXzTDF4808Bvjfob8F55yz5OUlTnGKn+vrKKKIgu+/XL9ci1+q6tbcmlsbDqWElJASNzeYx7zoh8MTK+5hD58dJ6NlNO08mfzwOhAQ9EXXUUQRFIuJqIiKqOfJh/Kh/PHuLktZypLnmdzk35snJwICgTlFmc73cAgAOJ/1/t/BmxAym9nM3t8PHAWOUF1dFVfiiuq+7zf8ht/Q9XFunBvnXDe8El5ZsC4uhC50GLI8seAxHSPpOGk7bWvp3d3XEFKPeiKyuYlb3FJ2YwNb2MKPp6eQElJCiiTlKU95enhgXdZl3WYTMcTwdWlpKtctx0EGmVlv/x0Ab0PYZm3WLhQQRxzx5WVqUYtavh+sBCvBSr2uWqqlWo+PfMAHfHBwgAgiiEzxCTvooHN/r6W0lJYyjH8hLFGJSqqKMspie20NVVTR87yRNbJG1tmZaZqmaT4/kyCBbzs7IBA+LS5O7LhMZWz3+386w5j1BWbPb/OHsYTTDyKOAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTAxLTAxVDIyOjIxOjU3KzA4OjAw0/e32gAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wMS0wMVQyMjoyMTo1NyswODowMKKqD2YAAABJdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uXzZ5N3JpZm1kb3BqL2NhaWRhbi5zdmfHIwUIAAAAAElFTkSuQmCC"/></li>'+**/
                '<li class="wmd-button" id="wmd-yc1-button" style="" title="插入隐藏内容（评论可见）"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAoFJREFUSMftlE1IVHEUxX/3jTWbKY1ZZWiB4cKNm2qCXAgRoQsp6c1TmI2Ii1mkoTMSbVqMgTWMxYAu3LxFH/reiBAtNEoIG5cRJSKzyEkiW2kZs7I3c1v0nQwEIbXwbA/33nPPPf8/7OJ/x1RoKjRxMxTaqf5SjnBd13Vdnw9AU9PTALwtFEiTliN1dfTSq+2HDwPgFYsAPM/nAeT87GxxpjhTnLHtTrvT7rTX1srNMcoRWq3VWh2JaEpTcOOGXJWr3PT76aVXo8eOSb/0c2J5GYCHi4tMMMGH48cBVIeGfC2+FuNULpdJZpKT77q6/tgBZ91Zd9ZjMZmTOR4nkwC839xUW23ut7XJiqzISjRKgkQp/eoVgLE5MlJqLDWWGmtqjBfGC3mazQKwLxD4sREqDA6GrbAVtr72/dmBjGZ0QpubjaARpOr69V9UHaislJzkJNfdTYIEiUgEQCK1tQD6cXVV85rX/MYGgHbdu7dtU0ssvTA87Dqu4zpnzmwToK66PtfztF3bOVcqlU2NomggYKSMVOnK6CgAUcepGK4YNrKxmNySW5IsXy9n5Wwp9oP/LuCLNdms1Es9T/r6thW+lte6HA4jCNLQ4P/k/xS4vbhomqYZ3urpYYstAnv36iW9RE1PzzbdjjoydfmyWWVWdbyZmyubge9ZyDgZJxMOi4qyPj7+7RRMMskdz6ODDvwLCyRJyqrnESdOPJ2WMRnTl6dPa1CDLF28KCflpI51d5txM95x0LZ/n1P2FVimZVqm63qPvEfFZ0ePAogMDGBhYczPA9Bw6JAsyZI+qK9HUb3b1+dr9bXu2X/tmhSkQG0qhYsrU01N/Cvs9Ee2i7/GZ0fjDN8XfZq1AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTAxLTAxVDIyOjIxOjU3KzA4OjAw0/e32gAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wMS0wMVQyMjoyMTo1NyswODowMKKqD2YAAABSdEVYdHN2ZzpiYXNlLXVyaQBmaWxlOi8vL2hvbWUvYWRtaW4vaWNvbi1mb250L3RtcC9pY29uXzZ5N3JpZm1kb3BqL3lpbmNhbmdidWtlamlhbi5zdmd9LUM+AAAAAElFTkSuQmCC"/></li>'+
               /**   '<li class="wmd-button" id="wmd-yc2-button" style="" title="插入隐藏内容（登陆可见）"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAiNJREFUSMfFlL9LG2EYx5/nLhniEIwuJg4GJMTBFoQOF7eISS2CoNFcBh06XVwUnaz/QLcWoUMChYBBTV5PRcyohgwOndohiKC9JU45JT+GXEhMng71IsWWJDXid3x5nu/z+T7wvAAvLGy3QS7LZbnscNQqtUqtMjPDrXAr4CEiL3lxdX/fL/pFv3h11XEAFmdxFvd4AAGpdHgIAABdJtMfRSVNo1M6hW9TU2JIDImh4+NmvlzLpBJK9GZj46+DdXWZTDiGY2C+r2tBTQGSlKQkGQyQhzzYnc6moH70w8ehoUbfUwHc6EY33t0RIwYfLi6aRrKABX6en+t9TwZoJPOil3aWlmAbtuFrqfSo4P6dwhTGH8vLLfu2Wqgr5oq5Yq7BQUxgAhPT09w6tw5uIu6MOzPUDw58aV/al1aUdn1fTP/cABERESITmMCE0VFugBsA2/g4zdIsFAUBF3ERvlitoIEGlp4eEkgAR7GI13gN0cvL+lZ9C/qPjlBBBZW9vd//Q6HQFECWZGnn9cgIMWKcvLlJYQrD9+Hh/044j/Pw9uYGspClV4HAXPdcdyBzcvIIQD8bdVfdzX7OZAAAoL+vr2O7jkIUPt3e5iZzk/n3VqsUlIJSsFptXIHKVKYym63jg3UtwAKs9vaa7Wa72f7g3wDgU3yKT2HbV9Gu+AJf4AsPcxo/lebUnJozlzNOGCeM79bWngugGqlGKpF8/rmDtqxfzBLd7dgv6jsAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDEtMDFUMjI6MjE6NTcrMDg6MDDT97faAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTAxLTAxVDIyOjIxOjU3KzA4OjAwoqoPZgAAAEl0RVh0c3ZnOmJhc2UtdXJpAGZpbGU6Ly8vaG9tZS9hZG1pbi9pY29uLWZvbnQvdG1wL2ljb25fNnk3cmlmbWRvcGovZGVuZ2x1LnN2Z+iQ6bQAAAAASUVORK5CYII="/></li>'+**/


                '<style>' +
                '.wmd-button-row{height: 100%!important;}.OwO .OwO-logo { position: relative; display: inline-block;padding: 0; width: 50px; height: 24px; color: #99a2aa; border: 1px solid #e5e9ef; border-radius: 4px; position: relative; z-index: 101;font-size: 12px; text-align: center;line-height: 23px; margin-top: 3px;cursor: pointer; background: #fff;}</style>');

            $('#text').before('<div class="wmd-button OwO" style="" title="插入表情"></div>');

            var owo = new OwO({
                logo: '表情',
                container: document.getElementsByClassName('OwO')[0],
                target: document.getElementById('text'),
                api: '/usr/themes/spimes/owo/OwO.json',
                position: 'down',
                width: '100%',
                maxHeight: '220px'
            });



           /** $(document).on('click', '#wmd-hplayer-button', function() {

                $('body').append(
                    '<div id="MetingPanel">'+
                    '<div class="wmd-prompt-background" style="position: fixed; top: 0px; z-index: 1000; opacity: 0.5; height: 100%; left: 0px; width: 100%;"></div>'+
                    '<div class="wmd-prompt-dialog">'+
                    '<div>'+
                    '<p><b>插入音乐</b></p>'+
                    '<p>请在下方的输入框内输入要插入的音乐地址 <p style="color: #ff0012">支持云解析歌曲地址和本地歌曲资源，不支持歌单地址</p> <a target="_blank" href="https://handsome.ihewro.com/#/functions?id=%e6%96%87%e7%ab%a0%e5%86%85%e6%8f%92%e5%85%a5%e9%9f%b3%e4%b9%90">使用文档</a>'+
                    '<p><labe>输入音乐地址</labe><input type="text"></input><label style="display: none">是否自动播放</label><input' +
                    ' type="checkbox" id="autoplay" style="display: none"></input></p>'+
                    '</div>'+
                    '<form>'+
                    '<button type="button" class="btn btn-s primary" id="hplayer_ok">确定</button>'+
                    '<button type="button" class="btn btn-s" id="hplayer_cancel">取消</button>'+
                    '</form>'+
                    '</div>'+
                    '</div>');
                $('.wmd-prompt-dialog input').val('http://').select();

            });**/


            $(document).on('click', '#wmd-post-button', function() {

                $('body').append(
                    '<div id="postPanel">'+
                    '<div class="wmd-prompt-background" style="position: fixed; top: 0px; z-index: 1000; opacity: 0.5; height: 100%; left: 0px; width: 100%;"></div>'+
                    '<div class="wmd-prompt-dialog">'+
                    '<div>'+
                    '<p><b>调用其他文章</b></p><p>你可以在当前文章中调用另一篇文章，达到文章之间的交流体验。</p>'+
                    '<labe>输入文章cid</labe><input type="text" name="cid" placeholder="必填"></input></p>'+                    
                    '</div>'+
                    '<form>'+
                    '<button type="button" class="btn btn-s primary" id="post_ok">确定</button>'+
                    '<button type="button" class="btn btn-s" id="post_cancel">取消</button>'+
                    '</form>'+
                    '</div>'+
                    '</div>');
            });

            /** $(document).on('click', '#wmd-video-button', function() {

                $('body').append(
                    '<div id="videoPanel">'+
                    '<div class="wmd-prompt-background" style="position: fixed; top: 0px; z-index: 1000; opacity: 0.5; height: 100%; left: 0px; width: 100%;"></div>'+
                    '<div class="wmd-prompt-dialog">'+
                    '<div>'+
                    '<p><b>插入视频</b></p>'+
                    '<p>可以向文章中插入一个简约美观的视频播放器<a target="_blank" href="https://handsome.ihewro.com/#/functions?id=%e6%96%87%e7%ab%a0%e5%86%85%e6%8f%92%e5%85%a5%e8%a7%86%e9%a2%91">使用文档</a></p>'+
                    '<labe>输入视频地址</labe><input type="text" name="url"' +
                    ' placeholder="必填，不支持云解析（比如xxx.com/xxx.mp4）"></input>'+
                    '<labe>输入视频封面</labe><input type="text" name="pic" placeholder="选填，不填则显示主题内置的一张背景图片"></input></input>'+
                    '</div>'+
                    '<form>'+
                    '<button type="button" class="btn btn-s primary" id="video_ok">确定</button>'+
                    '<button type="button" class="btn btn-s" id="video_cancel">取消</button>'+
                    '</form>'+
                    '</div>'+
                    '</div>');
                $('.wmd-prompt-dialog input').select();
            });**/

           /**  $(document).on('click', '#wmd-button-button', function() {//按钮

                $('body').append(
                    '<div id="buttonPanel">'+//按钮
                    '<div class="wmd-prompt-background" style="position: fixed; top: 0px; z-index: 1000; opacity: 0.5; height: 100%; left: 0px; width: 100%;"></div>'+
                    '<div class="wmd-prompt-dialog">'+
                    '<div>'+
                    '<p><b>插入按钮</b></p>'+
                    '<p>基本</p>'+
                    '<p><input type="text" name="te" placeholder="内容"></input><input type="text" name="url" placeholder="链接"></input></p>' +
                    '<p><input type="text" name="ic" placeholder="图标"></input></p>'+
                    '<p><labe>样式</labe></p>'+
                    '<p><select id="co" style="width: 80%"><option value="light">白色</option><option value="info">蓝色</option><option value="dark">深色</option><option value="success">绿色</option><option value="black">黑色</option><option value="warning">黄色</option><option value="primary">紫色</option><option value="danger">红色</option></select>'+
                    '<select id="ty" style="width: 20%"><option value="">矩形</option><option value="round">椭圆形</option></select></p>'+
                    '</div>'+
                    '<form>'+
                    '<button type="button" class="btn btn-s primary" id="button_ok">确定</button>'+//按钮
                    '<button type="button" class="btn btn-s" id="button_cancel">取消</button>'+//按钮
                    '</form>'+
                    '</div>'+
                    '</div>');
                $('.wmd-prompt-dialog input').select();

            });**/


            $(document).on('click', '#wmd-text-button', function() {//标签

                textContent = '[scode]这里编辑标签内容[/scode]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent);

            });


           /** $(document).on('click', '#wmd-ss-button', function() {//收缩框

                $('body').append(
                    '<div id="ssPanel">'+//收缩框
                    '<div class="wmd-prompt-background" style="position: fixed; top: 0px; z-index: 1000; opacity: 0.5; height: 100%; left: 0px; width: 100%;"></div>'+
                    '<div class="wmd-prompt-dialog">'+
                    '<div>'+
                    '<p><select id="sst" style="width: 20%"><option value="true">展开</option><option value="false">合上</option></select><input type="text" name="bt" placeholder="标题" style="width: 80%"></input></p>'+
                    '</div>'+
                    '<form>'+
                    '<button type="button" class="btn btn-s primary" id="ss_ok">确定</button>'+//收缩框
                    '<button type="button" class="btn btn-s" id="ss_cancel">取消</button>'+//收缩框
                    '</form>'+
                    '</div>'+
                    '</div>');
                $('.wmd-prompt-dialog input').select();

            });**/


            $(document).on('click', '#wmd-yc1-button', function() {

                textContent = '[hide]这里编辑隐藏文本（评论可见）[/hide]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent);

            });

           /** $(document).on('click', '#wmd-yc2-button', function() {

                textContent = '[login]这里编辑隐藏文本（登陆可见）[/login]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent);

            });**/



            /* 执行区 *///否定
            $(document).on('click','#hplayer_cancel',function() {
                $('#MetingPanel').remove();
                $('textarea').focus();
            });
            $(document).on('click','#video_cancel',function() {
                $('#videoPanel').remove();
                $('textarea').focus();
            });
            $(document).on('click','#post_cancel',function() {
                $('#postPanel').remove();
                $('textarea').focus();
            });
            $(document).on('click','#button_cancel',function() {//按钮
                $('#buttonPanel').remove();//按钮
                $('textarea').focus();
            });
            $(document).on('click','#text_cancel',function() {//标签
                $('#textPanel').remove();//标签
                $('textarea').focus();
            });
            $(document).on('click','#ss_cancel',function() {//收缩框
                $('#ssPanel').remove();//收缩框
                $('textarea').focus();
            });

            /* 代码块 *///肯定
         /**   $(document).on('click','#hplayer_ok',function() {
                //执行一个ajax请求获取解析歌单地址的音频信息
                callback=$.ajax({
                    type:'POST',
                    url: hplayerUrl,
                    data:{data:$('.wmd-prompt-dialog input').val(),size:"large",autoplay:$("#autoplay").is(':checked')},
                    async:false
                });

                myField = document.getElementById('text');
                var textMetingContent = callback.responseText;
                inserContentToTextArea(myField,textMetingContent,'#MetingPanel');

            });**/


          /**   $(document).on('click','#button_ok',function() {//按钮
//内容
                var textContent = $('.wmd-prompt-dialog input[name="te"]').val();
//颜色
                var obj_co = document.getElementById("co"); //定位id
                var index_co = obj_co.selectedIndex; // 选中索引
                var color = obj_co.options[index_co].value; // 选中值
//形状
                var obj_ty = document.getElementById("ty"); //定位id
                var index_ty = obj_ty.selectedIndex; // 选中索引
                var type = obj_ty.options[index_ty].value; // 选中值
//ICON
                var icon = $('.wmd-prompt-dialog input[name="ic"]').val();
//URL
                var url = $('.wmd-prompt-dialog input[name="url"]').val();
//输出格式
                textContent = '[button color="' + color + '" icon="' + icon + '" url="' + url + '" type="' + type + '"]' + textContent + '[/button]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent,'#buttonPanel');//按钮

            });**/


            $(document).on('click','#text_ok',function() {//标签

                var obj_ty = document.getElementById("type"); //定位id
                var index_ty = obj_ty.selectedIndex; // 选中索引
                var type = obj_ty.options[index_ty].value; // 选中值
//输出格式
                textContent = '[scode class="' + type + '"]这里编辑标签内容[/scode]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent,'#textPanel');//标签

            });


           /** $(document).on('click','#ss_ok',function() {//收缩框

                var obj_ty = document.getElementById("sst"); //定位id
                var index_ty = obj_ty.selectedIndex; // 选中索引
                var type = obj_ty.options[index_ty].value; // 选中值
                var t = $('.wmd-prompt-dialog input[name="bt"]').val();
//输出格式
                textContent = '[collapse status="' + type + '" title="' + t + '"]这里编辑收缩框内容[/collapse]';

                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent,'#ssPanel');//收缩框

            });**/



           /** $(document).on('click', '#video_ok',function () {
                var textContent = $('.wmd-prompt-dialog input[name="url"]').val();
                var pic = $('.wmd-prompt-dialog input[name="pic"]').val();
                var picHtml = "";
                var reg = new RegExp("\/","g");//g,表示全部替换。
                if (pic !== ""){
                    pic = pic.replace(reg,'\\/');
                    picHtml = 'pic="' + pic + '"';
                }
                textContent=textContent.replace(reg,'\\/');

                textContent = '[vplayer url="' + textContent + '" '+ picHtml +' /]';
                myField = document.getElementById('text');

                inserContentToTextArea(myField,textContent,'#videoPanel');
            }) **/

            $(document).on('click', '#post_ok',function () {
                var cid = '' + $('.wmd-prompt-dialog input[name = "cid"]').val() + '';               

                var textContent = '[post]' + cid + '[/post]';
                myField = document.getElementById('text');
                inserContentToTextArea(myField,textContent,'#postPanel');           
        
              
              
            })
        }
    });

};

function inserContentToTextArea(myField,textContent,modelId) {
    $(modelId).remove();
    if (document.selection) {//IE浏览器
        myField.focus();
        var sel = document.selection.createRange();
        sel.text = textContent;
        myField.focus();
    } else if (myField.selectionStart || myField.selectionStart == '0') {
        //FireFox、Chrome
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        var cursorPos = startPos;
        myField.value = myField.value.substring(0, startPos)
            + textContent
            + myField.value.substring(endPos, myField.value.length);
        cursorPos += textContent.length;

        myField.selectionStart = cursorPos;
        myField.selectionEnd = cursorPos;
        myField.focus();
    }
    else{//其他环境
        myField.value += textContent;
        myField.focus();
    }
}


