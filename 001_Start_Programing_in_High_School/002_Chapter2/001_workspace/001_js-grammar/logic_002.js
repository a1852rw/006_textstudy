(function(){
    'use strict';
    var age = 16;
    var isFemale = true;
    var result = null;
    if (age <= 15) {
        // age <= 15が真の時に実行
        result  = '800円'
    } else if (isFemale) {
        // sex = femaleが真の時に実行
        result = '1,000円'
    } else {
        //それ以外の場合 = 未成年でも女性でもない場合
        result = '1,800円'
    }
    document.write(result);
})();
