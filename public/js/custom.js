c// -------------------------------
// AOS
// -------------------------------
AOS.init();

////////////////////////////////////////////////
// Div Sticky
////////////////////////////////////////////////
$(document).ready(function () {
  console.log("document ready!");

  var $sticky = $(".sticky");
  var $stickyrStopper = $(".sticky-stopper");
  if (!!$sticky.offset()) {
    // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function () {
      var windowTop = $(window).scrollTop();

      function myFunction(x) {
        if (x.matches) {
          if (stopPoint < windowTop) {
            $sticky.css({ position: "relative" });
            $sticky.css({ width: "100%" });
          } else if (stickyTop < windowTop + stickOffset) {
            $sticky.css({ position: "relative" });
            $sticky.css({ width: "100%" });
          } else {
            $sticky.css({ position: "relative" });
            $sticky.css({ width: "100%" });
          }
        } else {
          if (stopPoint < windowTop) {
            $sticky.css({
              position: "absolute",
              marginRight: "16px",
              top: diff,
            });
            // $sticky.css({ width: "41.5%" });
          } else if (stickyTop < windowTop + stickOffset) {
            $sticky.css({
              position: "fixed",
              paddingTop: "50px",
              marginRight: "16px",
              top: stickOffset,
            });
            // $sticky.css({ width: "41.5%" });
          } else {
            $sticky.css({
              position: "absolute",
              paddingTop: "0px",
              marginRight: "16px",
              top: "initial",
            });
            // $sticky.css({ width: "41.5%" });
          }
        }
      }
      var x = window.matchMedia("(max-width: 481px)");
      myFunction(x);
      x.addListener(myFunction);
    });
  }
});

// -------------------------------
// Data Table
// -------------------------------
$(document).ready(function () {
  new DataTable("#example", {
    responsive: true,
  });
});

function favouriteStar(clicked_id) {
  addEventListener("click", function () {
    document.getElementById(clicked_id).style.color = "#ffc107";
  });
}

// -------------------------------
// Inventory
// -------------------------------
function inventorySection_1() {
  function myFunction(x) {
    if (x.matches) {
      document.getElementById("inventory_section1").style.display = "block";
      document.getElementById("inventory_section2").style.display = "none";
    } else {
      document.getElementById("inventory_section1").style.display = "flex";
      document.getElementById("inventory_section2").style.display = "none";
    }
  }
  var x = window.matchMedia("(max-width: 1023px)");
  myFunction(x);
  x.addListener(myFunction);
}
function inventorySection_2() {
  function myFunction(x) {
    if (x.matches) {
      document.getElementById("inventory_section1").style.display = "none";
      document.getElementById("inventory_section2").style.display = "block";
      document.getElementById("inventory_section3").style.display = "none";
    } else {
      document.getElementById("inventory_section1").style.display = "none";
      document.getElementById("inventory_section2").style.display = "flex";
      document.getElementById("inventory_section3").style.display = "none";
    }
  }
  var x = window.matchMedia("(max-width: 1023px)");
  myFunction(x);
  x.addListener(myFunction);
}
function inventorySection_3() {
  function myFunction(x) {
    if (x.matches) {
      document.getElementById("inventory_section2").style.display = "none";
      document.getElementById("inventory_section3").style.display = "block";
    } else {
      document.getElementById("inventory_section2").style.display = "none";
      document.getElementById("inventory_section3").style.display = "flex";
    }
  }
  var x = window.matchMedia("(max-width: 1023px)");
  myFunction(x);
  x.addListener(myFunction);
}

// -------------------------------
// Left Side Menu
// -------------------------------
function hideMenu() {
  document.getElementById("left_panel").style.left = "-127px";
  document.getElementById("left_panel").style.transition = "all 0.5s ease";
  document.getElementById("left_panel").classList.add("menuHoverClass");
  document.getElementById("topbar").style.paddingLeft = "57px";
  document.getElementById("right_panel").style.paddingLeft = "46px";
  document.getElementById("hideMenu").style.display = "none";
  document.getElementById("showMenu").style.display = "block";
  document.getElementById("mainlogo_big").style.display = "none";
  document.getElementById("mainlogo_small").style.display = "flex";
  $(".cd-accordion__input").prop("checked", false);
}
function showMenu() {
  document.getElementById("left_panel").style.left = "0";
  document.getElementById("left_panel").classList.remove("menuHoverClass");
  document.getElementById("topbar").style.paddingLeft = "184px";
  document.getElementById("right_panel").style.paddingLeft = "172px";
  document.getElementById("hideMenu").style.display = "block";
  document.getElementById("showMenu").style.display = "none";
  document.getElementById("mainlogo_big").style.display = "flex";
  document.getElementById("mainlogo_small").style.display = "none";
}

// -------------------------------
// Add Menu Hover Class
// -------------------------------
function myFunction(x) {
  if (x.matches) {
    document.getElementById("left_panel").classList.add("menuHoverClass");
  } else {
    document.getElementById("left_panel").classList.remove("menuHoverClass");
  }
}
var x = window.matchMedia("(max-width: 1024px)");
myFunction(x);
x.addListener(myFunction);

// -------------------------------
// Active Menu Background
// -------------------------------
var li = $("#leftmenu li").click(function () {
  li.removeClass("vm_bg_secondary");
  $(this).addClass("vm_bg_secondary");
});
var ul_li = $("#leftmenu li ul li").click(function () {
  ul_li.removeClass("vm_bg_gray1");
  $(this).addClass("vm_bg_gray1");
});

// -------------------------------
// Numbers Counting
// -------------------------------
const counters = document.querySelectorAll(".value");
const speed = 400;

counters.forEach((counter) => {
  const animate = () => {
    const value = +counter.getAttribute("akhi");
    const data = +counter.innerText;

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 1);
    } else {
      counter.innerText = value;
    }
  };

  animate();
});
