chrome.browserAction.onClicked.addListener(function (tab) { //Fired when User Clicks ICON
    if (tab.url.indexOf("http://book.douban.com/") != -1) { // Inspect whether the place where user clicked matches with our list of URL
      alert(tab.url);
    }
});
