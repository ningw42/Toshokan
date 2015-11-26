chrome.browserAction.onClicked.addListener(function (tab) { //Fired when User Clicks ICON
    if (tab.url.indexOf("http://book.douban.com/") != -1) { // Inspect whether the place where user clicked matches with our list of URL
      var url = tab.url;
      var exp = new RegExp('\/([0-9]+)\/', 'i');
      var id = exp.exec(url)[1];
      $.post('http://zhangteng.yifangyun.com/index.php/wishlist/add', {id:id}, function (data) {
        console.log(data);
      });
    }
});
