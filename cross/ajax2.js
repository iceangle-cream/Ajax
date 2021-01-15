function ajax(obj) {
    var defaults = {
        // jsonp仅仅支持get请求
        type: 'get',
        url: '#',
        dataType: 'jsonp',
        jsonp: 'callback',
        success: function (data) { console.log(data); }
    }
    for (var key in obj) {
        defaults[key] = obj[key];
    }
    //expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),
    // var cbName = 'jQuery1324143212343214_23123123';
    var cbName = 'jQuery' + ('1.11.1' + Math.random()).replace(/\D/g, "") + '_' + (new Date().getTime());
    if (defaults.jsonpCallback) {
        cbName = defaults.jsonpCallback;
    }
    // 这里就是回调函数，调用方式：服务器响应内容来调用
    // 向window对象中添加了一个方法，方法名称是变量cbName的值
    window[cbName] = function (data) {
        defaults.success(data); //这里的success的data是实参
    }

    var param = '';
    for (var attr in obj.data) {
        param += attr + '=' + obj.data[attr] + '&';
    }
    if (param) {
        param = param.substring(0, param.length - 1);
        param = '&' + param;
    }
    // var o = {};
    // o.info = 'hello';
    // var n = 'info';
    // o[n] = 'hi';
    // 这里是默认的回调函数名称
    var script = document.createElement('script');
    script.src = defaults.url + '?' + defaults.jsonp + '=' + cbName + param;
    var head = document.getElementsByTagName('head')[0];
    head.appendChild(script);
}