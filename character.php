<html>
    <head>
        <title>角色</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style>
            @import "character.css";
        </style>
    </head>
    <body>
        <div id="sidebaropen">
            <button onclick="opensidebar('content','sidebaropen','ch','kd')"></button>
        </div>
        <div id="content" style=display:none>
            <button id="c1" onclick="closesidebar('content','sidebaropen','ch','kd')"></button>
            <button><a href="index.html">首頁</a></button>
            <button><a href="character.php">角色</a></button>
            <button><a href="weapon.html">武器</a></button>
            <button><a href="HL.html">關卡資訊</a></button>
            <button onclick="end()">結束</button>
        </div>
        <div id="kd">
            <button onclick="display('a')" style="background-color:#f57e7e">火</button>
            <button onclick="display('b')" style="background-color:#6d6df7">水</button>
            <button onclick="display('c')" style="background-color:#a57a2b">土</button>
            <button onclick="display('d')" style="background-color:#4db34d">風</button>
            <button onclick="display('e')" style="background-color:#f7f77f">光</button>
            <button onclick="display('f')" style="background-color:#d845d8">暗</button>
        </div>
        <div id="ch" display="">
            <div id="a" display="">
                <?php
                    for($i=1;$i<=71;$i++){
                        echo "<a href='character/1-$i.html'><img src='character/1-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=3;$i++){
                        echo "<a href='character/1-ex$i.html'><img src='character/1-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
            <br>
            <div id="b" display="">
                <?php
                    for($i=1;$i<=63;$i++){
                        echo "<a href='character/2-$i.html'><img src='character/2-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=4;$i++){
                        echo "<a href='character/2-ex$i.html'><img src='character/2-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
            <br>
            <div id="c" display="">
            <?php
                    for($i=1;$i<=68;$i++){
                        echo "<a href='character/3-$i.html'><img src='character/3-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=4;$i++){
                        echo "<a href='character/3-ex$i.html'><img src='character/3-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
            <br>
            <div id="d" display="">
            <?php
                    for($i=1;$i<=71;$i++){
                        echo "<a href='character/4-$i.html'><img src='character/4-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=4;$i++){
                        echo "<a href='character/4-ex$i.html'><img src='character/4-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
            <br>
            <div id="e" display="">
            <?php
                    for($i=1;$i<=77;$i++){
                        echo "<a href='character/5-$i.html'><img src='character/5-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=3;$i++){
                        echo "<a href='character/5-ex$i.html'><img src='character/5-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
            <br>
            <div id="f" display="">
            <?php
                    for($i=1;$i<=63;$i++){
                        echo "<a href='character/6-$i.html'><img src='character/6-$i.jpg'></img></a>";
                    }
                    for($i=1;$i<=2;$i++){
                        echo "<a href='character/6-ex$i.html'><img src='character/6-ex$i.jpg'></img></a>";
                    }
                ?>
            </div>
        </div>
    </body>
    <script>
        function opensidebar(id,id2,id3,id4){
            var x=document.getElementById(id);
            var y=document.getElementById(id2);
            var z=document.getElementById(id3);
            var k=document.getElementById(id4);
            x.style.display="";
            y.style.display="none";
            z.style.display="none";
            k.style.display="none";
        }
        function end(){
            alert('不准離開!!!');
        }
        function closesidebar(id,id2,id3,id4){
            var x=document.getElementById(id);
            var y=document.getElementById(id2);
            var z=document.getElementById(id3);
            var k=document.getElementById(id4);
            x.style.display="none";
            y.style.display="";
            z.style.display="";
            k.style.display="";
        }
        function display(id){
            var x=document.getElementById(id);
            if(x.style.display=="")x.style.display="none";
            else x.style.display="";
        }
    </script>
</html>