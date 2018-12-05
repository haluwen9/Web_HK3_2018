var txt = "";

var data = [
	{LinkImageSP: "images/small/img1.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img2.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img3.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img4.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img5.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img6.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img7.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img8.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img9.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/small/img10.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông nhỏ", LuotMua: 0, tag: ["gấu bông", "gấu nhỏ"]},
	{LinkImageSP: "images/large/img11.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img12.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img13.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img14.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img15.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img16.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img17.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img18.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img19.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img20.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img21.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/large/img22.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông lớn", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img31.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img32.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img33.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img34.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img35.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img36.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img37.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img38.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img39.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img40.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img41.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img42.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img43.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img44.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img45.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img46.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img47.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img48.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img49.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img50.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img51.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img52.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img53.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img54.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img55.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img56.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img57.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img58.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img59.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img60.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img61.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img62.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img63.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img64.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img65.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]},
	{LinkImageSP: "images/pokemon/img66.jpg", NameSP: "Gấu nâu nhỏ", SaleSP: "$100", money: "$110", Category: "Thú bông POKEMON", LuotMua: 0, tag: ["gấu bông", "gấu lớn"]}
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
            s.setAttribute('display','block');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('display','none'); 
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
            s.setAttribute('display','block');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('display','none'); 
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
            s.setAttribute('display','block');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('display','none'); 
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
            s.setAttribute('display','block');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('display','none'); 
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
            s.setAttribute('display','block');  
          }
          else 
          {
            s = document.getElementById(String(i));
            s.setAttribute('display','none'); 
          }
        }
      }