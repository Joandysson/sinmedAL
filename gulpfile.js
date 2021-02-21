var gulp = require("gulp"),
  sass = require("gulp-sass"),
  sourcemaps = require("gulp-sourcemaps"),
  autoprefixer = require("gulp-autoprefixer"),
  rename = require("gulp-rename"),
  concat = require("gulp-concat"),
  cleanCSS = require("gulp-clean-css"),
  include = require("gulp-include"),
  uglify = require("gulp-uglify-es").default;

function swallowError(error) {
  console.log(error.toString());
  this.emit("end");
}

const sassOptions = {
  errLogToConsole: true,
  outputStyle: "compressed",
};

//SASS
gulp.task("sass", function () {
  return gulp
    .src([
      "assets/scss/bootstrap/bootstrap.scss",
      "assets/scss/global.scss",
      "assets/scss/home.scss",
      "assets/scss/list.scss",
      "assets/scss/contact.scss",
      "assets/scss/read.scss",
    ])
    .pipe(sass(sassOptions).on("error", sass.logError))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 4 versions"],
        cascade: false,
      })
    )
    .pipe(rename({ suffix: ".min" }))
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(
      sourcemaps.write("/", {
        includeContent: false,
        sourceRoot: "assets/css/sass",
      })
    )
    .pipe(gulp.dest("assets/css/"));
});

//Watch Task
gulp.task("watch", function () {
  gulp.watch([
    "assets/scss/bootstrap/bootstrap.scss",
    "assets/scss/global.scss",
    "assets/scss/home.scss",
    "assets/scss/list.scss",
    "assets/scss/contact.scss",
    "assets/scss/read.scss",
  ], gulp.series("sass"));
});

//Default task
gulp.task("default", gulp.series("sass", "watch"));
