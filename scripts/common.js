function setCookie(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}

function getcookie(cookieName) {
    var b = new RegExp(cookieName + '=([^;]){1,}');
    var c = b.exec(document.cookie);
    if (c) c = c[0].split('='); else return false;
    return c[1] ? c[1] : false;
}