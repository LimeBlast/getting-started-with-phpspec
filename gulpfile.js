var gulp = require('gulp'),
    notify = require('gulp-notify'),
    phpspec = require('gulp-phpspec');

gulp.task('phpspec', function () {
    var options = {debug: true};
    gulp.src('spec/**/*.php')
        .pipe(phpspec('./vendor/bin/phpspec run', options))
        .on('error', notify.onError({
            title: "Testing Failed",
            message: "Error(s) occurred during test..."
        }))
        .pipe(notify({
            title: "Testing Passed",
            message: "All tests have passed..."
        }));
});

// set watch task to look for changes in test files
gulp.task('watch', function () {
    gulp.watch('spec/**/*.php', ['phpspec']);
    gulp.watch('src/**/*.php', ['phpspec']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['phpspec', 'watch']);