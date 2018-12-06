var txt = "";
var MaxSPShow = 12;
function getListItem() {
  return data;
}

function getItemById(id) {
  console.log('ID: ' + typeof(id) + ' - ' + id);
  for (var i = 0; i < data.length; i++) {
    // console.log(typeof(data[i].Id));
    // console.log(data[i]);
    if (data[i].Id === id) return data[i];
  }
  // return data[id];;
}

function getNameById(id) {
  for (var i = 0; i < data.length; i++) {
    if (data[i].Id === id) return data[i].NameSP;
  }
  // return data[id].NameSP;
}

function getPriceById(id) {
  for (var i = 0; i < data.length; i++) {
    if (data[i].Id === id) return data[i].SaleSP;
  }
  // return data[id].SaleSP;
}

var data = 
[
    {
        Id: "1", 
        LinkImageSP: "images/small/img1.jpg",
        NameSP: "Gấu nâu nhỏ", 
        SaleSP: 100000,
        money: 110000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "2", 
        LinkImageSP: "images/small/img2.jpg",
        NameSP: "Khỉ nhỏ", 
        SaleSP: 100000,
        money: 120000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "3", 
        LinkImageSP: "images/small/img3.jpg",
        NameSP: "Khỉ nâu nhỏ", 
        SaleSP: 100000,
        money: 110000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "4", 
        LinkImageSP: "images/small/img4.jpg",
        NameSP: "Cặp gấu trắng nhỏ", 
        SaleSP: 160000,
        money: 170000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "5", 
        LinkImageSP: "images/small/img5.jpg",
        NameSP: "Bộ gấu ngố", 
        SaleSP: 190000,
        money: 200000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "6", 
        LinkImageSP: "images/small/img6.jpg",
        NameSP: "Gấu bông nhỏ loại 1", 
        SaleSP: 200000,
        money: 230000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "7", 
        LinkImageSP: "images/small/img7.jpg",
        NameSP: "Gấu hồng", 
        SaleSP: 190000,
        money: 200000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "8", 
        LinkImageSP: "images/small/img8.jpg",
        NameSP: "Gấu áo đỏ", 
        SaleSP: 100000,
        money: 110000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "9", 
        LinkImageSP: "images/small/img9.jpg",
        NameSP: "Cặp gấu trắng-nâu", 
        SaleSP: 270000,
        money: 300000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "10", 
        LinkImageSP: "images/small/img10.jpg",
        NameSP: "Gấu bông cặp VIOLET-PINK", 
        SaleSP: 300000,
        money: 600000,
        Category: "Thú bông nhỏ", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu nhỏ"]
    },

    {
        Id: "11", 
        LinkImageSP: "images/large/img11.jpg",
        NameSP: "Gấu nâu lớn 1", 
        SaleSP: 300000,
        money: 320000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "12", 
        LinkImageSP: "images/large/img12.jpg",
        NameSP: "Gấu nâu lớn 2", 
        SaleSP: 400000,
        money: 410000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "13", 
        LinkImageSP: "images/large/img13.jpg",
        NameSP: "Gấu nâu lớn 3", 
        SaleSP: 400000,
        money: 410000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "14", 
        LinkImageSP: "images/large/img14.jpg",
        NameSP: "Gấu nâu lớn 4", 
        SaleSP: 400000,
        money: 410000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "15", 
        LinkImageSP: "images/large/img15.jpg",
        NameSP: "Bộ Totoro", 
        SaleSP: 650000,
        money: 700000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "16", 
        LinkImageSP: "images/large/img16.jpg",
        NameSP: "Cặp gấu Hồng-Xám lớn", 
        SaleSP: 700000,
        money: 730000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "17", 
        LinkImageSP: "images/large/img17.jpg",
        NameSP: "Gấu bông to loại 1", 
        SaleSP: 280000,
        money: 400000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "18", 
        LinkImageSP: "images/large/img18.jpg",
        NameSP: "Cặp gấu bông Cam-Trắng", 
        SaleSP: 700000,
        money: 720000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "19", 
        LinkImageSP: "images/large/img19.jpg",
        NameSP: "Cá sấu lớn", 
        SaleSP: 380000,
        money: 400000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "20", 
        LinkImageSP: "images/large/img20.jpg",
        NameSP: "Gấu bông to VIOLET", 
        SaleSP: 400000,
        money: 450000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "21", 
        LinkImageSP: "images/large/img21.jpg",
        NameSP: "Bộ Stitch", 
        SaleSP: 700000,
        money: 720000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "22", 
        LinkImageSP: "images/large/img22.jpg",
        NameSP: "Bộ chó Husky Nga", 
        SaleSP: 600000,
        money: 800000,
        Category: "Thú bông lớn", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu lớn"]
    },

    {
        Id: "23", 
        LinkImageSP: "images/pokemon/img31.jpg",
        NameSP: "Pikaca", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]}
        , 

    {
        Id: "24", 
        LinkImageSP: "images/pokemon/img32.jpg",
        NameSP: "Squirtl", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "25", 
        LinkImageSP: "images/pokemon/img33.jpg",
        NameSP: "Lapra", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "26", 
        LinkImageSP: "images/pokemon/img34.jpg",
        NameSP: "Charmande", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "27", 
        LinkImageSP: "images/pokemon/img35.jpg",
        NameSP: "Eeva", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "28", 
        LinkImageSP: "images/pokemon/img36.jpg",
        NameSP: "Glaceo", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "29", 
        LinkImageSP: "images/pokemon/img37.jpg",
        NameSP: "Snorla", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "30", 
        LinkImageSP: "images/pokemon/img38.jpg",
        NameSP: "Manaph", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "31", 
        LinkImageSP: "images/pokemon/img39.jpg",
        NameSP: "Suicua", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "32", 
        LinkImageSP: "images/pokemon/img40.jpg",
        NameSP: "Ponyt", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "33", 
        LinkImageSP: "images/pokemon/img41.jpg",
        NameSP: "Pikachu đặc biệt", 
        SaleSP: 120000,
        money: 129000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "34", 
        LinkImageSP: "images/pokemon/img42.jpg",
        NameSP: "Raich", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "35", 
        LinkImageSP: "images/pokemon/img43.jpg",
        NameSP: "Jigglypua", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "36", 
        LinkImageSP: "images/pokemon/img44.jpg",
        NameSP: "Cleff", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "37", 
        LinkImageSP: "images/pokemon/img45.jpg",
        NameSP: "Genga", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "38", 
        LinkImageSP: "images/pokemon/img46.jpg",
        NameSP: "Togep", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "39", 
        LinkImageSP: "images/pokemon/img47.jpg",
        NameSP: "Ma", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "40", 
        LinkImageSP: "images/pokemon/img48.jpg",
        NameSP: "Mega Gardevoi", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "41", 
        LinkImageSP: "images/pokemon/img49.jpg",
        NameSP: "Oshawot", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "42", 
        LinkImageSP: "images/pokemon/img50.jpg",
        NameSP: "Plusle và Minu", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "43", 
        LinkImageSP: "images/pokemon/img51.jpg",
        NameSP: "Bulbasaa", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "44", 
        LinkImageSP: "images/pokemon/img51.png",
        NameSP: "Pich", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "45", 
        LinkImageSP: "images/pokemon/img52.jpg",
        NameSP: "Froaki", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "46", 
        LinkImageSP: "images/pokemon/img53.jpg",
        NameSP: "Lucari", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "47", 
        LinkImageSP: "images/pokemon/img54.jpg",
        NameSP: "Rentora", 
        SaleSP: 69000,
        money: 79000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "48", 
        LinkImageSP: "images/pokemon/img55.jpg",
        NameSP: "Sylveo", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "49", 
        LinkImageSP: "images/pokemon/img56.jpg",
        NameSP: "Sniv", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "50", 
        LinkImageSP: "images/pokemon/img57.jpg",
        NameSP: "Blastois", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "51", 
        LinkImageSP: "images/pokemon/img58.jpg",
        NameSP: "Mega Charizard X", 
        SaleSP: 129000,
        money: 139000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "52", 
        LinkImageSP: "images/pokemon/img59.jpg",
        NameSP: "Meowt", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "53", 
        LinkImageSP: "images/pokemon/img60.jpg",
        NameSP: "Dragonit", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "54", 
        LinkImageSP: "images/pokemon/img61.jpg",
        NameSP: "Pokemon starter Sinnoh", 
        SaleSP: 1000000,
        money: 1100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "55", 
        LinkImageSP: "images/pokemon/img62.jpg",
        NameSP: "Eevee và các hệ tiến hóa", 
        SaleSP: 5000000,
        money: 5200000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "56", 
        LinkImageSP: "images/pokemon/img63.jpg",
        NameSP: "Bộ Pikachu đặc biệt", 
        SaleSP: 450000,
        money: 499000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "57", 
        LinkImageSP: "images/pokemon/img64.jpg",
        NameSP: "Bộ Pokemon 1", 
        SaleSP: 499000,
        money: 549000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "58", 
        LinkImageSP: "images/pokemon/img65.jpg",
        NameSP: "Bộ Pokemon 2", 
        SaleSP: 999000,
        money: 1000000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "59", 
        LinkImageSP: "images/pokemon/img66.jpg",
        NameSP: "Bộ Pokemon 3", 
        SaleSP: 499000,
        money: 549000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    },

    {
        Id: "60", 
        LinkImageSP: "images/pokemon/img67.jpg",
        NameSP: "Aceus", 
        SaleSP: 99000,
        money: 100000,
        Category: "Thú bông POKEMON", 
        LuotMua: 0, 
        Tag: ["gấu bông", "gấu POKEMON"]
    }
];


// Chi so SP trong mang data duoc load o trang single-product.html
var LoadSP;
var tensp = "";
function setLoadSP(tsp) {
    tensp = tsp;
    LoadSP = data.findIndex(item => item.LinkImageSP == tensp);

    if (typeof(Storage) !== "undefined") {
        localStorage.setItem("LoadSP", LoadSP);
    }
}

function load(page, array) {
  var container = $('.single-product-area .container .row');
  var content = "";
  for (var i = (page-1)*12; i < page*12 && i<array.length; i++) {
    var it = array[i];
    content += `
      <div id="${it.Id}" class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-shop-product" ondragstart="itemDrag(event)" draggable="true" data-itemid="${it.Id}">
          <div class="product-upper">
            <img src="${it.LinkImageSP}" alt="" style="width: 250px; height: 280px;" draggable="false">
          </div>
          <h2><a href="single-product.html" onclick="setLoadSP('${data[i].LinkImageSP}')" draggable="false">${it.NameSP}</a></h2>
          <div class="product-carousel-price">
            <ins>${it.SaleSP}<sup>đ</sup></ins> <del>${it.money}<sup>đ</sup></del>
          </div>

          <div class="product-option-shop">
            <a href="#" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" onclick="addToCart('${it.Id}'); return false;" draggable="false">Thêm vào giỏ hàng</a>
          </div>
        </div>
      </div>`
  }
  // console.log(content);
  container.html(content);
}

// ---------------------------------------------------------------------------
