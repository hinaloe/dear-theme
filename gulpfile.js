var g = require ("gulp");
var $ = require("gulp-load-plugins")();


// Packaging
g.task('zip', function() {
    return g.src(['src/**','!src/_sass','!src/_sass/**','!*.md'])
           .pipe($.zip("dear.zip"))
           .pipe(g.dest("dist"));
});

g.task('style', function() {
    return g.src('src/_sass/style.scss')
           .pipe($.sass({
             outputStyle: 'expanded'
           }))
           .pipe($.autoprefixer())
           .pipe(g.dest('src'));
});

g.task('i18n', function () {
    return g.src(['src/**.php', 'dev/**.php'])
           .pipe($.sort())
           .pipe($.wpPot({
             domain: 'dear'
           }))
           .pipe(g.dest('src/languages'));
});