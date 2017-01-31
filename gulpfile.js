var gulp = require('gulp'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    rev = require('gulp-rev'),
    revdel = require('gulp-rev-delete-original'),
    inject = require("gulp-inject");


gulp.task('minify-css', function() {
    return gulp.src('public_html/blog/wp-content/themes/martword/style.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public_html/blog/wp-content/themes/martword/css'));
});

gulp.task('delete-rev', function(){
    return gulp.src('public_html/blog/wp-content/themes/martword/css/style-*.min.css', {read: false})
        .pipe(clean());
});

gulp.task('rev-css', function () {
    return gulp.src('public_html/blog/wp-content/themes/martword/css/style.min.css')
        .pipe(rev())
        .pipe(revdel())
        .pipe(gulp.dest('public_html/blog/wp-content/themes/martword/css'));
});

gulp.task('inject-css', function() {
    return gulp.src("public_html/blog/wp-content/themes/martword/header.php") // Not necessary to read the files (will speed up things), we're only after their paths
        .pipe( inject( gulp.src(["public_html/blog/wp-content/themes/martword/css/style-*.min.css"], {read: false }), { ignorePath: 'public_html/' } ) )
        .pipe( gulp.dest("public_html/blog/wp-content/themes/martword") );
});


gulp.task('watch', function(){
    gulp.watch(['public_html/blog/wp-content/themes/martword/style.css'], ['minify-css']);
    gulp.watch('public_html/blog/wp-content/themes/martword/css/style.min.css', function(e){
        // Only new or renamed
        if(e.type !== 'deleted'){
            gulp.start(['delete-rev','rev-css']);
        }
    });
    gulp.watch(['public_html/blog/wp-content/themes/martword/css/style-*.min.css'], ['inject-css']);
});


gulp.task('default', ['watch']);

