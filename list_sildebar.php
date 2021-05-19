<div class="list_sildebar" style="margin-top: 20px;">
    <div class="left" style="background-color:rgb(12, 12, 12); font-size: 40px;">
      <h2 style="color: aliceblue;">Menu</h2>
      <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
      <ul id="myMenu">
        <li><a href="index.php?quanly=banphimco" style="font-size: 30px; font-family: Times, serif;">Bàn Phím Cơ</a></li>
        <li><a href="index.php?quanly=chuot "style="font-size: 30px ; font-family: Times, serif;">Chuột Gaming</a></li>
        <li><a href="index.php?quanly=pad"style="font-size: 30px ; font-family: Times, serif;">Pad Chuột Max size</a></li>
        <li><a href="index.php?quanly=tainghe"style="font-size: 30px ; font-family: Times, serif;">Tai Nghe Gaming</a></li>
        <li><a href="index.php?quanly=phukien"style="font-size: 30px ; font-family: Times, serif;">Phụ Kiện rời</a></li>
        
      </ul>
    </div>
    <script>
      function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
      </script>
     </div> 