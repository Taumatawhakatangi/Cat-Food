const gulp = require('gulp')
const less = require('gulp-less')
const stylus = require('gulp-stylus')
const cleanCss = require('gulp-clean-css')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const rename = require('gulp-rename')
const size = require('gulp-size');
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const concat = require('gulp-concat')
const newer = require('gulp-newer');
const imagemin = require('gulp-imagemin')
const gulpPug = require('gulp-pug');

const browserSync = require('browser-sync').create();

const del = require('del')

const paths = {  
    pug: {
        src: 'project/*.pug',
        dest: 'dist'   
    },
    html: {
        src: '*.html',
        dest: 'dist'   
    },
    php: {
        src: 'project/assets/php/**.',
        dest: 'dist/assets/php'   
    },
    styles: {
        src: ['project/assets/css/*.styl' , 'project/assets/css/*.less'],
        dest: 'dist/assets/css'    
    },
    scripts: {
        src: 'project/assets/js**/*.js',
        dest: 'dist/assets/js'
    },
    images: {
        src: 'project/assets/img/**',
        dest: 'dist/assets/img'
    },
    fonts: {
        src: 'project/assets/fonts/**',
        dest: 'dist/assets/fonts'
    }                      
}

function clean() {         
    return del(['dist/*', '!dist/assets/img'])   
}

function pug() {
    return gulp.src(paths.pug.src) 
    .pipe(gulpPug({
        pretty: true
    }))
    .pipe(size())
    .pipe(gulp.dest(paths.pug.dest))  
    .pipe(browserSync.reload({stream: true}));
}

function html() {
    return gulp.src(paths.html.src) 
    .pipe(size())
    .pipe(gulp.dest(paths.html.dest))  
    .pipe(browserSync.reload({stream: true}));
}

function php() {
    return gulp.src(paths.php.src) 
    .pipe(gulp.dest(paths.php.dest))  
    .pipe(browserSync.reload({stream: true}));
}

function fonts() {
    return gulp.src(paths.fonts.src) 
    .pipe(gulp.dest(paths.fonts.dest))  
    .pipe(browserSync.reload({stream: true}));
}

function styles() { 
    return gulp.src(paths.styles.src) 
    .pipe(sourcemaps.init())
    // .pipe(less())
    .pipe(stylus())
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(cleanCss({
        level: 2
    }))
    .pipe(rename({
        basename: 'main',
        suffix: '.min'
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(sourcemaps.write())
    .pipe(size())
    .pipe(gulp.dest(paths.styles.dest))   
    .pipe(browserSync.reload({stream: true}));  
}

function scripts() {
    return gulp.src(paths.scripts.src)
    .pipe(sourcemaps.init())
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(size())
    .pipe(gulp.dest(paths.scripts.dest))  
    .pipe(browserSync.reload({stream: true}));
}

function img() {
    return gulp.src(paths.images.src)
    .pipe(newer(paths.images.dest))
    .pipe(imagemin({
        progressive: true
    }))
    .pipe(size())
    .pipe(gulp.dest(paths.images.dest))
    .pipe(browserSync.reload({stream: true}));
}
                
function watch() {
    browserSync.init({
        server: {
            baseDir: "./dist"
        }
    });
    // gulp.watch(paths.html.dest).on('change', browserSync.reload)
    gulp.watch(paths.styles.src, styles)
    gulp.watch(paths.scripts.src, scripts)
    gulp.watch(paths.html.src, html)
    gulp.watch(paths.images.src, img)
    gulp.watch(paths.fonts.src, fonts)
    gulp.watch(paths.php.src, php)
    gulp.watch(paths.pug.src, pug)
}

const build = gulp.series(clean, pug, gulp.parallel(styles, scripts, img, fonts), watch)


exports.clean = clean  
exports.img = img  
exports.pug = pug  
exports.html = html
exports.php = php
exports.fonts = fonts  
exports.styles = styles
exports.scripts = scripts
exports.watch = watch
exports.build = build
exports.default = build









