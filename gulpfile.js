const gulp = require("gulp"),
    livereload = require("gulp-livereload")
    sass = require("gulp-sass");

livereload({
    start: true,
    port: 3000
});

gulp.task("watch", () => {
    livereload.listen();
    gulp.watch("./assets/sass/style.scss", ["sass"]);
    gulp.watch(["*.php", "src/**/*.php"], ["php"]);
});

gulp.task("php", () => {
    gulp.src(["*.php", "src/**/*.php"]).pipe(livereload());
});

gulp.task("sass", () => {
    gulp.src("./assets/sass/style.scss")
    .pipe(sass({ outputStyle: "expanded" })).pipe(gulp.dest("")).pipe(livereload());
});

gulp.task("default", ["watch"]);