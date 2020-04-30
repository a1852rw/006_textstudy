(function(){
    'use strict';
    var age = 16;
    var result = null;
    if (age >= 18) {
        // age >= 18が真の時に実行
        result  = '成年'
    } else {
        // age >= 18が偽の時に実行
        result = '未成年'
    }
    document.write(result);
})();