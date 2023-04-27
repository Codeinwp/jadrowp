'use strict';

require( 'dotenv' ).config();

const gulp = require( 'gulp' );
const sass = require( 'gulp-dart-sass' );
const browserSync = require( 'browser-sync' ).create();
const babel = require( 'gulp-babel' );
const sourcemaps = require( 'gulp-sourcemaps' );
const environments = require( 'gulp-environments' );
const postcss = require( 'gulp-postcss' );
const postcssPresetEnv = require( 'postcss-preset-env' );

const development = environments.development;

// Sass front.
gulp.task( 'sass', function() {
	return gulp.src( [ 'src/sass/*.scss' ] )
		.pipe( development( sourcemaps.init() ) )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( postcss( [
			postcssPresetEnv(),
		] ) )
		.pipe( development( sourcemaps.write( '.' ) ) )
		.pipe( gulp.dest( './' ) );
} );

// Script.
gulp.task( 'script', function() {
	return gulp.src( [ 'src/js/**/*.js' ] )
		.pipe( babel( {
			presets: [ '@babel/env' ],
		} ) )
		.pipe( gulp.dest( 'assets/js' ) );
} );

// Copy Images.
gulp.task( 'images', function() {
	return gulp.src( [ 'src/images/**/*.*' ] )
		.pipe( gulp.dest( 'assets/images' ) );
} );

// Copy Fonts.
gulp.task( 'font', function() {
	return gulp.src( [ 'src/fonts/**/*.*' ] )
		.pipe( gulp.dest( 'assets/fonts' ) );
} );

// Watch.
gulp.task( 'watch', function() {
	browserSync.init( {
		proxy: process.env.DEV_SERVER_URL,
	} );

	gulp.watch( 'src/sass/**/*.scss', gulp.series( 'sass' ) ).on( 'change', browserSync.reload );
	gulp.watch( 'src/js/**/*.js', gulp.series( 'script' ) ).on( 'change', browserSync.reload );
	gulp.watch( './**/*.php' ).on( 'change', browserSync.reload );
} );

// Tasks.
gulp.task( 'default', gulp.series( 'watch' ) );
gulp.task( 'build', gulp.series( 'script', 'sass', 'images', 'font' ) );
