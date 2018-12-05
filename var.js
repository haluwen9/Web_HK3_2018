var txt = "";

var data = 
[
    {LinkImageSP: "images/small/img1.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img2.jpg", NameSP: "Khỉ nhỏ", SaleSP: "$100", money: "$120", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img3.jpg", NameSP: "Khỉ nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img4.jpg", NameSP: "Cặp gấu trắng nhỏ", SaleSP: "$160", money: "$170", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img5.jpg", NameSP: "Bộ gấu ngố", SaleSP: "$190", money: "$200", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img6.jpg", NameSP: "Gấu bông nhỏ loại 1", SaleSP: "$200", money: "$230", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img7.jpg", NameSP: "Gấu hồng", SaleSP: "$190", money: "$200", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img8.jpg", NameSP: "Gấu áo đỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img9.jpg", NameSP: "Cặp gấu trắng-nâu", SaleSP: "$270", money: "$300", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/small/img10.jpg", NameSP: "Gấu bông cặp VIOLET-PINK", SaleSP: "$300", money: "$600", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
    {LinkImageSP: "images/large/img11.jpg", NameSP: "Gấu nâu lớn 1", SaleSP: "$300", money: "$320", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img12.jpg", NameSP: "Gấu nâu lớn 2", SaleSP: "$400", money: "$410", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img13.jpg", NameSP: "Gấu nâu lớn 3", SaleSP: "$400", money: "$410", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img14.jpg", NameSP: "Gấu nâu lớn 4", SaleSP: "$400", money: "$410", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img15.jpg", NameSP: "Bộ Totoro", SaleSP: "$650", money: "$700", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img16.jpg", NameSP: "Cặp gấu Hồng-Xám lớn", SaleSP: "$700", money: "$730", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img17.jpg", NameSP: "Gấu bông to loại 1", SaleSP: "$280", money: "$400", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img18.jpg", NameSP: "Cặp gấu bông Cam-Trắng", SaleSP: "$700", money: "$720", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img19.jpg", NameSP: "Cá sấu lớn", SaleSP: "$380", money: "$400", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img20.jpg", NameSP: "Gấu bông to VIOLET", SaleSP: "$400", money: "$450", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img21.jpg", NameSP: "Bộ Stitch", SaleSP: "$700", money: "$720", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/large/img22.jpg", NameSP: "Bộ chó Husky Nga", SaleSP: "$600", money: "$800", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
    {LinkImageSP: "images/pokemon/img31.jpg", NameSP: "Pikaca", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]}, 
    {LinkImageSP: "images/pokemon/img32.jpg", NameSP: "Squirtl", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img33.jpg", NameSP: "Lapra", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img34.jpg", NameSP: "Charmande", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img35.jpg", NameSP: "Eeva", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img36.jpg", NameSP: "Glaceo", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img37.jpg", NameSP: "Snorla", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img38.jpg", NameSP: "Manaph", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img39.jpg", NameSP: "Suicua", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img40.jpg", NameSP: "Ponyt", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img41.jpg", NameSP: "Pikachu đặc biệt", SaleSP: "$120", money: "$129", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img42.jpg", NameSP: "Raich", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img43.jpg", NameSP: "Jigglypua", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img44.jpg", NameSP: "Cleff", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img45.jpg", NameSP: "Genga", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img46.jpg", NameSP: "Togep", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img47.jpg", NameSP: "Ma", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img48.jpg", NameSP: "Mega Gardevoi", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img49.jpg", NameSP: "Oshawot", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img50.jpg", NameSP: "Plusle và Minu", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img51.jpg", NameSP: "Bulbasaa", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img51.png", NameSP: "Pich", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img52.jpg", NameSP: "Froaki", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img53.jpg", NameSP: "Lucari", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img54.jpg", NameSP: "Rentora", SaleSP: "$69", money: "$79", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img55.jpg", NameSP: "Sylveo", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img56.jpg", NameSP: "Sniv", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img57.jpg", NameSP: "Blastois", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img58.jpg", NameSP: "Mega Charizard X", SaleSP: "$129", money: "$139", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img59.jpg", NameSP: "Meowt", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img60.jpg", NameSP: "Dragonit", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img61.jpg", NameSP: "Pokemon starter Sinnoh", SaleSP: "$1000", money: "$1100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img62.jpg", NameSP: "Eevee và các hệ tiến hóa", SaleSP: "$5000", money: "$5200", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img63.jpg", NameSP: "Bộ Pikachu đặc biệt", SaleSP: "$450", money: "$499", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img64.jpg", NameSP: "Bộ Pokemon 1", SaleSP: "$499", money: "$549", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img65.jpg", NameSP: "Bộ Pokemon 2", SaleSP: "$999", money: "$1000", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img66.jpg", NameSP: "Bộ Pokemon 3", SaleSP: "$499", money: "$549", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]},
    {LinkImageSP: "images/pokemon/img67.jpg", NameSP: "Aceu", SaleSP: "$99", money: "$100", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu POKEMON"]}
]
// Chi so SP trong mang data duoc load o trang single-product.html
var LoadSP;
var tensp = "";
function khongBietDatTenGi(value)
{
    return value.LinkImageSP == tensp;
}

function setLoadSP(tsp)
{
    tensp = tsp;
    LoadSP = data.findIndex(khongBietDatTenGi);
}

function load1()
      {
        var s;
        for (i=1; i<=60; i++)
        {
          if (i <= 12)
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','dispaly:block;');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','display:none;'); 
          }
        }
      }

      function load2()
      {
        var s;
        for (i=1; i<=60; i++)
        {
          if (i <= 24 && i >= 13)
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','dispaly:block;');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','display:none;'); 
          }
        }
      }

      function load3()
      {
        var s;
        for (i=1; i<=60; i++)
        {
          if (i <= 36 && i >= 25)
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','dispaly:block;');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','display:none;'); 
          }
        }
      }

      function load4()
      {
        var s;
        for (i=1; i<=60; i++)
        {
          if (i <= 48 && i >= 37)
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','dispaly:block;');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','display:none;'); 
          }
        }
      }

      function load5()
      {
        var s;
        for (i=1; i<=60; i++)
        {
          if (i >= 49)
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','dispaly:block;');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('style','display:none;'); 
          }
        }
      }