const {src, dest, watch} = require('gulp');
const stylus  = require('gulp-stylus');
const uglify  = require('gulp-uglify');

function styluscss(){
    css_newstyle();
    css_newstyle2();
    return src('css/general/*.styl')
        .pipe(stylus())
        .pipe(dest('../assets/css'));
    css_landing1();
    css_landing2();
} 

function css_newstyle(){
    return src('css/newstyle.styl')
        .pipe(stylus())
        .pipe(dest('../assets/css/'));
}

function css_landing1(){
    return src('css/pages/landing1/*.styl')
        .pipe(stylus())
        .pipe(dest('../assets/css/pages/landing1'));
}

function css_newstyle2(){
    return src('css/newstyle2.styl')
        .pipe(stylus())
        .pipe(dest('../assets/css/'));
}

function css_landing2(){
    return src('css/pages/landing2/*.styl')
        .pipe(stylus())
        .pipe(dest('../assets/css/pages/landing2'));
}

function watch_files(){
    watch('css/**/**/*.styl', styluscss);
}

exports.style = styluscss;
exports.watch = watch_files;







//function styluscss(){
    //ruta de  archivos .styl
//    return src('css/*.styl')
        //indicando compilar con stylus 
//        .pipe(stylus())
        //ruta de guardado del archivo compilado .styl a css 
//        .pipe(dest('../assets/css'));
//}

//function watch_files(){
//    watch('css/**/**/*.styl', styluscss);
//}

//ejecutando funcion style
//exports.style = styluscss;
//ejecutando funcion watch_files (cada cambio ejecutara las funciones dentro de watch)
//exports.watch = watch_files;


//comando para ejecutar funcion styluscss guardado compilado en exports.style : 
//gulp style

//comando para ejecutar funcion watch que compila los archivos en cada modificacion
//gulp watch



