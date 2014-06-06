<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_afa693e328511c6d1c07c941a13708439db5e7c3cd65708dd12f42e6f4a3977c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  93 => 30,  88 => 29,  77 => 26,  72 => 25,  67 => 24,  54 => 15,  49 => 14,  45 => 12,  34 => 6,  31 => 5,  27 => 3,  25 => 2,  19 => 1,  1564 => 419,  1556 => 417,  1547 => 415,  1543 => 414,  1541 => 413,  1536 => 412,  1524 => 411,  1522 => 410,  1519 => 409,  1504 => 403,  1496 => 401,  1487 => 399,  1483 => 398,  1481 => 397,  1476 => 396,  1468 => 395,  1466 => 394,  1463 => 393,  1448 => 387,  1440 => 385,  1431 => 383,  1427 => 382,  1425 => 381,  1420 => 380,  1415 => 379,  1410 => 378,  1405 => 377,  1397 => 376,  1395 => 375,  1392 => 374,  1379 => 369,  1373 => 368,  1371 => 367,  1368 => 366,  1359 => 360,  1352 => 358,  1348 => 357,  1342 => 356,  1340 => 355,  1337 => 354,  1330 => 349,  1320 => 347,  1315 => 346,  1312 => 345,  1308 => 344,  1306 => 343,  1303 => 342,  1294 => 338,  1292 => 337,  1289 => 336,  1283 => 332,  1276 => 330,  1272 => 329,  1270 => 328,  1267 => 327,  1257 => 322,  1253 => 321,  1221 => 320,  1218 => 319,  1215 => 318,  1212 => 317,  1208 => 316,  1204 => 315,  1200 => 314,  1198 => 313,  1195 => 312,  1187 => 308,  1182 => 307,  1176 => 306,  1174 => 305,  1171 => 304,  1163 => 299,  1160 => 298,  1151 => 293,  1148 => 292,  1146 => 291,  1143 => 290,  1134 => 285,  1129 => 284,  1124 => 283,  1121 => 282,  1119 => 281,  1116 => 280,  1108 => 276,  1106 => 272,  1104 => 271,  1101 => 270,  1096 => 266,  1069 => 261,  1066 => 260,  1062 => 259,  1058 => 258,  1055 => 257,  1051 => 256,  1047 => 255,  1044 => 254,  1039 => 253,  1035 => 252,  1031 => 251,  1029 => 250,  1026 => 249,  1018 => 243,  1014 => 242,  1012 => 241,  1009 => 240,  1001 => 236,  997 => 235,  995 => 234,  992 => 233,  977 => 229,  974 => 228,  970 => 227,  966 => 226,  964 => 225,  961 => 224,  953 => 220,  949 => 219,  947 => 218,  944 => 217,  936 => 213,  932 => 212,  930 => 211,  927 => 210,  919 => 206,  915 => 205,  913 => 204,  910 => 203,  902 => 199,  898 => 198,  896 => 197,  893 => 196,  885 => 192,  881 => 191,  879 => 190,  876 => 189,  868 => 185,  864 => 184,  862 => 183,  859 => 182,  850 => 178,  848 => 177,  845 => 176,  837 => 172,  833 => 171,  831 => 170,  828 => 169,  820 => 165,  816 => 164,  814 => 163,  812 => 162,  809 => 161,  802 => 156,  784 => 155,  779 => 154,  775 => 153,  769 => 151,  765 => 150,  763 => 149,  760 => 148,  752 => 142,  750 => 141,  749 => 140,  748 => 139,  745 => 138,  740 => 137,  734 => 135,  730 => 134,  728 => 133,  725 => 132,  715 => 126,  710 => 125,  705 => 124,  700 => 123,  695 => 122,  689 => 120,  685 => 119,  683 => 118,  680 => 117,  662 => 113,  660 => 112,  657 => 111,  639 => 107,  637 => 106,  634 => 105,  617 => 101,  600 => 99,  593 => 96,  590 => 95,  583 => 94,  579 => 93,  560 => 92,  558 => 91,  555 => 90,  546 => 85,  542 => 84,  539 => 83,  532 => 81,  528 => 80,  523 => 79,  519 => 78,  515 => 77,  501 => 75,  498 => 74,  489 => 73,  486 => 72,  483 => 71,  476 => 70,  474 => 69,  471 => 68,  465 => 64,  456 => 62,  450 => 61,  445 => 60,  440 => 59,  438 => 58,  435 => 57,  426 => 52,  420 => 50,  416 => 49,  414 => 48,  411 => 47,  400 => 43,  398 => 42,  395 => 41,  387 => 37,  384 => 36,  379 => 35,  376 => 34,  374 => 33,  371 => 32,  362 => 27,  357 => 26,  350 => 24,  347 => 23,  342 => 22,  340 => 21,  337 => 20,  318 => 16,  314 => 15,  312 => 14,  309 => 13,  300 => 8,  294 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 409,  278 => 408,  276 => 393,  273 => 392,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  230 => 303,  227 => 301,  225 => 298,  222 => 297,  220 => 290,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 246,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  179 => 224,  176 => 223,  174 => 217,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  149 => 182,  146 => 181,  144 => 176,  139 => 169,  136 => 168,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  89 => 47,  84 => 41,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  66 => 12,  160 => 32,  153 => 30,  151 => 188,  148 => 28,  145 => 27,  141 => 175,  138 => 37,  122 => 34,  119 => 117,  116 => 116,  113 => 26,  108 => 25,  104 => 90,  101 => 89,  98 => 20,  92 => 19,  90 => 15,  86 => 46,  83 => 28,  64 => 3,  61 => 2,  58 => 9,  36 => 39,  33 => 9,  28 => 6,  21 => 1,);
    }
}
