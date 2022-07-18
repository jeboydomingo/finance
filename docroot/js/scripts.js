$(document).ready(function() {
    $(".menu-item").each(function(index) {
    $(this).find("a").click(function() {
      var menu_item_a = $(this);
      var menu_item_icon = $(this).find(".menu-item-icon");
      $(this).next().slideToggle(100, function() {
        $(menu_item_a).toggleClass("expanded");
        $(menu_item_icon).toggleClass("expanded");
      });
    });
  });
});
