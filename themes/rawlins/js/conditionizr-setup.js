//Conditionizr rules
conditionizr.add('ie11', function () {
    return /constructor/i.test(window.HTMLElement);
});
conditionizr.add('ie10', function () {
    return /constructor/i.test(window.HTMLElement);
});
conditionizr.add('ie9', function () {
    return /constructor/i.test(window.HTMLElement);
});
conditionizr.add('firefox', function () {
    return /constructor/i.test(window.HTMLElement);
});

conditionizr.add('ie11', /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent));
conditionizr.add('ie10', !!(Function('/*@cc_on return (/^10/.test(@_jscript_version) && /MSIE 10\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')()));
conditionizr.add('ie9', !!(Function('/*@cc_on return (/^9/.test(@_jscript_version) && /MSIE 9\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')()));
conditionizr.add('firefox', 'InstallTrigger' in window);

conditionizr.config({
    assets: localized_conditionizr.path,//'<?php echo JSDIR; ?>/conditionizr/',
    tests: {
        'safari': ['class'],
        'chrome': ['class'],
        'firefox': ['class'],
        'opera': ['class'],
        'ie11': ['class'],
        'ie10': ['class'],
        'ie9': ['class']
    }
});

// Add html5shiv for IE8 and less
//conditionizr.polyfill('//html5shiv.googlecode.com/svn/trunk/html5.js', ['ie6', 'ie7', 'ie8']);
