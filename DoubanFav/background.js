chrome.browserAction.onClicked.addListener(function (tab) { //Fired when User Clicks ICON
    if (tab.url.indexOf("http://book.douban.com/") != -1) { // Inspect whether the place where user clicked matches with our list of URL
      var url = tab.url;
      $.post('http://zhangteng.yifangyun.com/index.php/wishlist/add', {}, function (data) {

      });
    }
});
